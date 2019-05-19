

/* Import utilities. */
var utils = require('./modules/utils.js');

var tabs = require('./modules/tabs.js');
var mediaUpload = require('./modules/media-upload.js');

import Tags from './modules/tags.js';

/* Initialize components. */
utils.domready( () => {

    tabs.init();
    mediaUpload.init();

    Tags.init();

});