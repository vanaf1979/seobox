

const { registerStore } = wp.data;

// https://wordpress.stackexchange.com/questions/324979/getting-a-custom-gutenberg-components-state-from-outside-that-component?rq=1

const initial_state = {

    settings: {
        g_browser_title_max_lenght: 150
    }
    
};


const reducer = ( state = initial_state , action ) => {
    
    switch ( action.type ) {
        
        case "SET_SETTING": {
            return {
                ...state,
                settings: {
                    [action.key]: action.value
                }
            };
        }

    }

    return state;
};


const actions = {

    setSetting( key , value ) {
        return {
            type: "SET_SETTING",
            key,
            value
        };
    },
    
}


const selectors = {

    getSettings( state ) {
        return state.settings;
    },

};


registerStore("silk/settings", {
    reducer,
    actions,
    selectors
});