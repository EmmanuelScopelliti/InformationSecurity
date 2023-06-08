import Plugin from 'src/plugin-system/plugin.class';
import { getActiveChat, getChatData, setupChatCommunication } from './chat_communication.js';
import { Message } from './chat_communication.js';

const chatel = document.getElementById('chat');



export function getUserId() {
    return getChatData()[0][getChatData()[1]].userToken;
}

function getChatUsername(chatId) {
    return getChatData()[0].find(chat => chat.chatId === chatId).username;
}

/** @returns {Message} */
function prepareMessage(messageText, chatId, userId) {
    return {
        message_type: 'message',
        chatId,
        message: messageText,
        from: userId
    }
}

function sendListener(sendMessage, userId, chatId) {
    const sendButton = document.getElementById('chat-send');
    const messageInput = document.getElementById('chat-input');

    sendButton.addEventListener('click', (ev) => {
        ev.preventDefault();
        const message = messageInput.value;
        messageInput.value = '';
        sendMessage(prepareMessage(message, chatId, userId));
        displayMessage(prepareMessage(message, chatId, userId), true);
    })
}

/**
 * 
 * @param {Message} message 
 * @param {string} chatId 
 * @param {boolean} self 
 */
function displayMessage(message, self) {
    const msgDiv = document.createElement('div');
    const msgHeader = document.createElement('div');
    const msgBody = document.createElement('div');
    // insecure way of displaying messages
    // msgDiv.innerHTML = message.message;
    msgBody.innerText = message.message;
    msgBody.classList.add('message-body');

    msgHeader.classList.add('message-header')
    msgHeader.innerText = getChatUsername(message.chatId);

    msgDiv.classList.add(self ? 'self' : 'other');
    msgDiv.classList.add('message');

    chatel.appendChild(msgDiv);
}

export function displayMessages(...messages) {
    messages.forEach(message => {
        displayMessage(message, chat.chatId, message.from.userId === getUserId());
    });
}

export default class Chat extends Plugin {
    init() {
        window.addEventListener('load', this.onLoad.bind(this));
    }

    onLoad() {
        setupChatCommunication(getUserId(), displayMessages).then(sendMsg => {
            sendListener(sendMsg, getUserId(), getActiveChat().chatId)
        });
    }
}
