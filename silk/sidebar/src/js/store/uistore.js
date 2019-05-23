

const { registerStore } = wp.data;

// https://wordpress.stackexchange.com/questions/324979/getting-a-custom-gutenberg-components-state-from-outside-that-component?rq=1

const initial_state = {

    modal: {
        isOpen: false
    }
    
};


const reducer = ( state = initial_state , action ) => {
    
    switch ( action.type ) {

        case "TOGGLE_MODAL_OPEN": {
            return {
                ...state,
                modal: {
                    isOpen: ! state.modal.isOpen
                }
            };
        }

    }

    return state;
};


const actions = {
    toggleModalOpen( ) {
        return {
            type: "TOGGLE_MODAL_OPEN"
        };
    },
}


const selectors = {

    getModalOpemState( state ) {
        return state.modal.isOpen;
    },

};


registerStore("silk/ui", {
    reducer,
    actions,
    selectors
});