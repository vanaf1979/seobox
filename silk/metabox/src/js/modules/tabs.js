var Utils = require('./utils.js');


var tabs = {

    init: function()
    {
        var tabs = Utils.findAll('.silk-admin-tabs li');

        Utils.loop( tabs , ( tab ) => {

            Utils.addEvent( tab , 'click' , ( e ) => {
                
                var currentTab = Utils.find('.silk-admin-tabs li.active');
                currentTab.classList.remove('active');

                e.target.classList.add('active');

                var currentPanel = Utils.find('.sb-admin-tabs-container .tab.active');
                currentPanel.classList.remove('active');

                var nextPanelName = '#' + e.target.dataset.tab;
                var nextPanel = Utils.find( nextPanelName );

                nextPanel.classList.add('active');

            });

        });
    }

}

module.exports = tabs;