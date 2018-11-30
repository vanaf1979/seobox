var Utils = require('./utils.js');


var mediaUpload = {

    init: function()
    {   
        var uploadButtons = Utils.findAll('.image-upload-button');

        Utils.loop( uploadButtons , ( uploadButton ) => {

            Utils.addEvent( uploadButton , 'click' , ( e ) => {
                
                e.preventDefault();

                custom_uploader = wp.media({
                    title: 'Insert image',
                    library : {
                        type : 'image'
                    },
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false 

                }).on('select', () => { 

                    // Get attachment data
                    var attachment = custom_uploader.state().get('selection').first().toJSON();

                    // Add image id to hidden field
                    var targetField = Utils.find( '#' + uploadButton.dataset.field );
                    targetField.setAttribute('value', attachment.id );

                    // Add image url to prieview source
                    var previewTarget = Utils.find( '.' + uploadButton.dataset.preview + ' img' );
                    previewTarget.setAttribute('src', attachment.sizes.thumbnail.url );

                }).open();
            });
        });
    }
}

module.exports = mediaUpload;