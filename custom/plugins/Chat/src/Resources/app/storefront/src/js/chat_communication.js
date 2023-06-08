import { performKeyExchange } from './crypto.js';
import { DES } from './des.js';

const requestURL = '89.190.184.32:6666/chat/join';



/**
 * @typedef {{message_type: 'message', chatId: string, from: string, message: string}} Message
 */

/**
     * @return {Record<string, Message[]>}
*/
function getChatStateFromLocalStorage() {
    return JSON.parse(localStorage.getItem('chatState')) || {};
}

/**
 * @returns {[{chatId: string, userToken: string, active: boolean, username: string}[], number]}
 */
export function getChatData() {
    const chatListItem = document.querySelector('.chat-list-item');
    let activeChatIndex = -1;
    const chatData = Array.from(chatListItem).map((chatListItem, index) => {
        const active = chatListItem.classList.contains('active');
        const linkEl = chatListItem.querySelector('a');
        const chatId = linkEl.dataset.chatId;
        const userToken = linkEl.dataset.userToken;
        const username = linkEl.innerText.trim();

        const obj = { chatId, userToken, active, username };
        if (active) {
            activeChatIndex = index;
        }
        return obj;
    });

    return [chatData, activeChatIndex]
}

export function getActiveChat() {
    return getChatData()[0][getChatData()[1]];
}

/**
 * @returns {Promise<WebSocket>} - Promise resolving to the WebSocket connection.
 */
function createWebSocketConnection(chatId, userToken) {
    return new Promise((resolve, reject) => {
        if (activeChat) {
            fetch(`http://${requestURL}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    chatId: chatId,
                    userToken: userToken
                })
            })
                .then(res => {
                    if (res.headers.get('Upgrade') === 'websocket') {
                        const ws = new WebSocket(`ws://${requestURL}`);
                        resolve(ws);
                    } else {
                        reject('Server does not support WebSocket upgrade');
                    }
                })
                .catch(err => {
                    reject(err);
                });
        } else {
            reject('No active chat found');
        }
    });
}

/**
 * 
 * @param {number} keyExchangeState 
 * @param {function(Message): void} onMessage 
 * @returns 
 */
function createOnMessageHandler(keyExchangeState, onMessage) {
    return function (data) {
        const message = JSON.parse(data.data);
        switch (keyExchangeState) {
            case 3: {
                message.message = des.decryptFull(message.message);
            }
            case 0: {
                chatState[message.chatId] = message;
                onMessage && onMessage(message);
            }
        }
    }
}


/**
 * Sets up the chat communication and returns a Promise with the send function.
 * @param {string} userId - The user id.
 * @param {function(chatId:string, message:Message): void} onMessage - Callback function to handle incoming messages.
 * @param {function(Record<string, Message[]>): void} onLoad - Callback function to handle chat state load.
 * @returns {Promise<function(Message): void>} - Promise resolving to the send function.
 */
export function setupChatCommunication(userId, onMessage, onLoad) {
    return new Promise((resolve, reject) => {
        let keyExchangeState = false;
        let chatState = getChatStateFromLocalStorage();

        const [chats, activeChatIndex] = getChatData();
        const activeChat = chats[activeChatIndex];
        createWebSocketConnection(activeChat.chatId, activeChat.userToken).then(ws => {
            performKeyExchange(ws).then((desKey) => {
                keyExchangeState = !!desKey;
                const des = new DES(desKey)

                ws.onmessage = createOnMessageHandler(0, onMessage);


                ws.onerror = (err) => {
                    console.error(err)
                }

                ws.onclose = () => {
                    localStorage.setItem('chatData', JSON.stringify(chatData));
                };

                ws.send(des.encryptFull(JSON.stringify({ message_type: 'fetch_pending_messages' })))

                const sendMessage = (message) => {
                    let messageString = JSON.stringify(message);
                    if (keyExchangeState) {
                        messageString = des.encryptFull(messageString);
                    }
                    ws.send(messageString)
                }
                resolve(sendMessage)
            })
        }).catch(err => {
            console.error(err);
            reject(err)
        })
    });
}