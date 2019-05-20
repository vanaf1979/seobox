
import Sidebar from './components/sidebar.js';
import './store/uistore.js'
import './store/settingsstore.js'

const { registerPlugin } = wp.plugins;

// Gebruiken: https://github.com/reactjs/react-modal#demos

registerPlugin("silk", {
    icon: "buddicons-replies", // The Plugin Dashicon
    render: Sidebar
});