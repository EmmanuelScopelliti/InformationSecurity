export { DES } from './des.js';
import { DES } from './des.js'

const key = await crypto.subtle.generateKey(
    {
        name: "RSA-OAEP",
        modulusLength: 4096,
        publicExponent: new Uint8Array([0x01, 0x00, 0x01]),
        hash: "SHA-256"
    },
    true,
    ["encrypt", "decrypt"]
)

function arrayBufferToString(arrayBuffer) {
    const decoder = new TextDecoder();
    const decodedString = decoder.decode(arrayBuffer);
    return decodedString;
}

function stringToArrayBuffer(string) {
    const encoder = new TextEncoder();
    const encodedData = encoder.encode(string);
    return encodedData.buffer;
}


export async function getRSAPublicKeyString() {
    // Export the public key as ArrayBuffer
    const keyArrayBuffer = await crypto.subtle.exportKey('jwk', key.publicKey);
    return JSON.stringify(keyArrayBuffer);
}

export function getRSAPublicKey() {

    return key.publicKey;
}

export function decryptRSA(cyphertext) {
    return new Promise((resolve, reject) => {
        crypto.subtle.decrypt(
            {
                name: "RSA-OAEP",
            },
            key.privateKey,
            cyphertext
        ).then((decrypted) => {
            resolve(decrypted)
        }).catch((err) => {
            console.log(JSON.stringify(err))
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
                    const challangeMessage = JSON.parse(data.data);
                    const u8a = Uint8Array.from(challangeMessage.challenge);
                    debugger;
                    decryptRSA(u8a.buffer).then(desKey => {
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
                    console.log('challange success')
                    cleanupListener(ws)
                    resolve(desKey);
                }
                case 'challenge_fail': {
                    console.log('challange failed')
                    cleanupListener(ws)
                    resolve(false)
                }
            }
        })
        ws.onopen = () => {
            getRSAPublicKeyString().then(key => {
                ws.send(JSON.stringify({
                    message_type: 'pubKey',
                    key
                }))
            })
        }
    })
}
