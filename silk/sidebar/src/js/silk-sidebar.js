
import Sidebar from './components/sidebar.js';
import './store/uistore.js'
import './store/settingsstore.js'

import icons from './icons/icons.js'

const { registerPlugin } = wp.plugins;

// Gebruiken: https://github.com/reactjs/react-modal#demos

registerPlugin("silk", {
    icon: icons.butterfly, // The Plugin Dashicon
    render: Sidebar
});