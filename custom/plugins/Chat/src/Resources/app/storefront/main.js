import Chat from './chat.js';

const PluginManager = window.PluginManager;

PluginManager.register('Chat', Chat, '[data-chat]');