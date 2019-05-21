import React from 'react'

const { __ } = wp.i18n;
const { compose } = wp.compose;
const { withDispatch, withSelect } = wp.data;
const { Fragment } = wp.element;
const { TextControl } = wp.components;


class ProtoTextfield extends React.Component {
    
    constructor() {

        super()

        this.state = {
            value: false
        }

    }


    render() {

        return (
            <div>

                <TextControl
                    label="Browser title"
                    help="Description about this field"
                    value={this.props.metaFieldValue}
                    onChange={this.props.setMetaFieldValue} />

            </div>
        )

    }

}


export default compose([

    withDispatch(( dispatch , props ) => {

        return {
            setMetaFieldValue: function( value ) {
                dispatch( 'core/editor' ).editPost( { meta: { seobox_sidebar_test_field: value } } );
                // Replace meta field name with props.fieldName
                // dispatch( 'core/editor' ).editPost( { meta: { [ props.fieldName ]: value } } );
                
            },
            setSetting: function( key , value ) {
                dispatch( 'silk/settings' ).setSetting( key , value )
            }
        }

    }),
    withSelect(( select , props ) => {
        
        return {
            // Replace meta field name with props.fieldName
            // metaFieldValue: select( 'core/editor' ).getEditedPostAttribute( 'meta' )[ props.fieldName ],
            metaFieldValue: select( 'core/editor' ).getEditedPostAttribute( 'meta' )[ 'seobox_sidebar_test_field' ],
            getSettings: select( 'silk/settings' ).getSettings()['g_browser_title_max_lenght']
        };

    }),

])( ProtoTextfield );


// WP Data: https://wordpress.org/gutenberg/handbook/designers-developers/developers/packages/packages-data/
// Data: https://github.com/WordPress/gutenberg/tree/master/packages/data
// Stack overflow: https://wordpress.stackexchange.com/questions/324979/getting-a-custom-gutenberg-components-state-from-outside-that-component
