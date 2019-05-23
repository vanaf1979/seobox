import Tagify from '@yaireo/tagify';

var Tags = {

    init: function() {

        var input = document.querySelector('#tags'),
        tagify = new Tagify(input, {
            mode: 'mix',
            pattern: /#/,
            // enforceWhitelist: true,
            whitelist: ['title', 'sitename'],
            dropdown: {
                classname: "color-blue",
                enabled: 1,
                maxItems: 10
            },
            
        });

        tagify.on('input', function(e){ 

        })

        tagify.on('add', function(e){
 
        })

        // var input = document.querySelector('#tags');

        // var tagify = new Tagify(input, {
        //     mode             : 'mix',  // <--  Enable mixed-content
        //     pattern          : /@|#/,  // <--  Tag words which start with @ or # (can be a String instead of Regex)
        //     enforceWhitelist : true,
        //     whitelist        : [       // <--  Set the initial whitelist, which will dynamically change as you type (see "input" event below)
        //         {
        //             value : 'cartman',
        //             title : 'Eric Cartman',
        //             class : 'borderd-blue'  // <-- Add any attribute you wish, per-tag
        //         },
        //         {
        //             value : 'kyle',
        //             title : 'Kyle Broflovski'
        //         },
        //         {
        //             value: 'Homer'
        //         }
        //     ],
        //     dropdown   : {
        //         enabled : 1
        //     }
        // })
    
        // var whitelist_1 = [
        //     {
        //         value : 'kenny',
        //         title : 'Kenny McCormick'
        //     },
        //     {
        //         value : 'cartman',
        //         title : 'Eric Cartman'
        //     },
        //     {
        //         value : 'kyle',
        //         title : 'Kyle Broflovski'
        //     },
        //     {
        //         value : 'token',
        //         title : 'Token Black'
        //     },
        //     {
        //         value : 'jimmy',
        //         title : 'Jimmy Valmer'
        //     },
        //     {
        //         value : 'butters',
        //         title : 'Butters Stotch'
        //     },
        //     {
        //         value : 'stan',
        //         title : 'Stan Marsh'
        //     },
        //     {
        //         value : 'randy',
        //         title : 'Randy Marsh'
        //     },
        //     {
        //         value : 'Mr. Garrison',
        //         title : 'POTUS'
        //     },
        //     {
        //         value : 'Mr. Mackey',
        //         title : "M'Kay"
        //     }
        // ]
        
        // var whitelist_2 = ['Homer', 'Marge', 'Bart', 'Lisa', 'Maggie', 'Mr. Burns', 'Ned', 'Milhouse', 'Moe'];
        
        // // A good place to pull server suggestion list accoring to the prefix/value
        // tagify.on('input', function(e){
        //     var prefix = e.detail.prefix;
        
        //     if( prefix ){
        //         if( prefix == '@' )
        //             tagify.settings.whitelist = whitelist_1;
        
        //         if( prefix == '#' )
        //             tagify.settings.whitelist = whitelist_2;
        
        //         if( e.detail.value.length > 1 )
        //             tagify.dropdown.show.call(tagify, e.detail.value);
        //     }
        
        //     console.log('mix-mode "input" event value: ', e.detail)
        // })
        
        // tagify.on('add', function(e){
        //     console.log(e)
        // })
    }

}

export default Tags;