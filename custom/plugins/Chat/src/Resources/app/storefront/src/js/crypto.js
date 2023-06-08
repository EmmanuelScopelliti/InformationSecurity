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

export function getRSAPublicKey() {
    return key.publicKey;
}

export function decryptRSA(cyphertext) {
    return crypto.subtle.decrypt(
        {
            name: "RSA-OAEP"
        },
        key.privateKey,
        cyphertext
    )
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
                    const desKey = decryptRSA(challangeMessage.challenge);
                    ws.send(
                        des.encrypt(
                            JSON.stringify({
                                message_type: 'challenge_response',
                                challenge_response: desKey
                            })
                        )
                    )
                    break;
                }
                case 'challenge_confirm': {
                    cleanupListener(ws)
                    resolve(desKey);
                }
                case 'challenge_reject': {
                    cleanupListener(ws)
                    resolve(false)
                }
            }
        })
        ws.onopen = () => {
            ws.send(JSON.stringify({
                message_type: 'pubKey',
                key: getRSAPublicKey()
            }))
        }
    })
}