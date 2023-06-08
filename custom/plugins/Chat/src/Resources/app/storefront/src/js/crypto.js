export { generateKey, DES } from './des.js';

const key = await crypto.subtle.generateKey(
    {
        name: "RSA-OAEP",
        modulusLength: 4096,
        publicExponent: new new Uint8Array([0x01, 0x00, 0x01]),
        hash: "SHA-256"
    },
    true,
    ["encrypt", "decrypt"]
)



export async function getRSAPublicKeyString() {
    try {
        // Export the public key as ArrayBuffer
        const keyArrayBuffer = await crypto.subtle.exportKey('raw', cryptoKey);

        // Convert the ArrayBuffer to a Uint8Array
        const keyUint8Array = new Uint8Array(keyArrayBuffer);

        // Convert the Uint8Array to a Base64-encoded string
        const keyString = btoa(String.fromCharCode.apply(null, keyUint8Array));

        return keyString;
    } catch (error) {
        console.error('Public key export error:', error);
        throw error;
    }
}

export function getRSAPublicKey() {

    return key.publicKey;
}

function arrayBufferToString(arrayBuffer) {
    const decoder = new TextDecoder();
    const decodedString = decoder.decode(arrayBuffer);
    return decodedString;
}

export function decryptRSA(cyphertext) {
    return new Promise((resolve, reject) => {
        crypto.subtle.decrypt(
            {
                name: "RSA-OAEP"
            },
            key.privateKey,
            cyphertext
        ).then((decrypted) => {
            resolve(arrayBufferToString(decrypted))
        }).catch((err) => {
            reject(err)
        })
    })
}

/**
 * @param {boolean} perform - whether to perform key exchange or not
 * @param {WebSocket} ws
 * @param {KryptoKey} key 
 * @returns {Promise<desKey>} - true if key exchange was successful, false otherwise
 */
export function performKeyExchange(ws, skip = false) {
    // Only resolve is used to have less code duplication in this specific case
    return new Promise((resolve) => {
        const des = new DES();
        if (skip) {
            resolve(false);
        }

        // a bit cleaner to read
        const cleanupListener = (ws) => {
            ws.removeEventListener('message')
        }

        ws.addEventListener('message', (data) => {
            let msg = JSON.parse(data.data);
            switch (msg.message_type) {
                case 'challenge': {
                    /**@type {{message_type: 'challenge',challenge: string}} */
                    const challangeMessage = data;
                    decryptRSA(challangeMessage.challenge).then(desKey => {
                        des.generateKeys(desKey)
                        ws.send(
                            JSON.stringify({
                                message_type: 'challenge_response',
                                challenge_response: des.encryptFull(desKey)
                            })
                        )
                    });
                    break;
                }
                case 'challenge_success': {
                    cleanupListener(ws)
                    resolve(desKey);
                }
                case 'challenge_fail': {
                    cleanupListener(ws)
                    resolve(false)
                }
            }
        })
        ws.onopen = () => {
            ws.send(JSON.stringify({
                message_type: 'pubKey',
                key: getRSAPublicKeyString()
            }))
        }
    })
}