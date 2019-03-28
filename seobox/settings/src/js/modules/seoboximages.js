
var seoboximages = {

    init: function(  )
    {
        this.start();

        // this.editImage();
    },

    start: function()
    {
        $('.seobox-image-upload-select').click( ( e ) => {

            e.preventDefault();

            var btEll = e.target;
            
            var frame = wp.media({
                title: 'Select or Upload an image',
                button: {
                    text: 'Use this image'
                },
                multiple: false
            });

            frame.open();

            frame.on('select', () => { 

                var attachment = frame.state().get('selection').first().toJSON();

                // Set preview img url
                var imgEll = $(btEll).parent().find('.seobox-image-upload-src');
                imgEll.attr( 'src' , attachment.sizes.thumbnail.url );
                
                // Set form hidden field value 
                var imgEll = $(btEll).parent().find('.seobox-image-upload-field');
                imgEll.attr( 'value' , attachment.id );
            });

        });
        
    },

    editImage: function()
    {

        $('.seobox-image-upload-edit').click( ( e ) => {

            e.preventDefault();

            if( frame )
            {
                console.log( 'here' );
                console.log( frame );
            }

            var attachmentId = $( e.target ).closest( ".seobox-image-upload-container" ).find('.seobox-image-upload-field').attr('value');

            var frame = wp.media({
                title: 'Edit image',
                mode: 'edit',
                attachment:	parseInt( attachmentId ),
                button: {
                    text: 'Use changes'
                },
                multiple: false,
                uploader: false
            });

            frame.open();

        });
        // var frame = acf.newMediaPopup({
        //     mode:		'edit',
        //     title:		acf.__('Edit File'),
        //     button:		acf.__('Update File'),
        //     attachment:	val,
        //     field:		this.get('key'),
        //     select:		$.proxy(function( attachment, i ) {
        //         this.render( attachment );
        //     }, this)
        // });
    }
  
};
    
module.exports = seoboximages;
  