
var seoboximages = {

    init: function(  )
    {
        console.log('seobox images');

        this.start();
        
    },

    start: function()
    {
        frame = wp.media({
            title: 'Select or Upload Media Of Your Chosen Persuasion',
            button: {
            text: 'Use this media'
        },
            multiple: false  // Set to true to allow multiple files to be selected
        });

        console.log( frame );
    }
  
};
    
module.exports = seoboximages;
  