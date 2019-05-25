import React from 'react'

const { __ } = wp.i18n;
const { compose } = wp.compose;
const { withDispatch, withSelect } = wp.data;
const { Fragment } = wp.element;
const { TextControl, Popover, MenuGroup, MenuItem } = wp.components;


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

                <a onClick={ this.toggleVisible } className="chevron-bt">
                    { this.isVisible && (

                        <Popover position="bottom left" onClickOutside={ this.toggleVisible }>
                            
                            <MenuGroup label="Content">
                                <MenuItem
                                    icon='facebook-alt'
                                    // info="Copy value from Facebook title"
                                    isSelected={ false }
                                    onClick={ () => { console.log('click') } }
                                >
                                    Copy Facebook title
                                </MenuItem>
                                <MenuItem
                                    icon='twitter'
                                    isSelected={ false }
                                    onClick={ () => { console.log('click') } }
                                >
                                    Copy from Twitter
                                </MenuItem>
                                <MenuItem
                                    icon='networking'
                                    isSelected={ false }
                                    onClick={ () => { console.log('click') } }
                                >
                                    Copy from Schema
                                </MenuItem>
                            </MenuGroup>
                            <MenuGroup label="Tools">
                                <MenuItem
                                    icon='book'
                                    isSelected={ false }
                                    onClick={ () => { console.log('click') } }
                                >
                                    Field documentation
                                </MenuItem>
                            </MenuGroup>

                        </Popover>
                    ) }
                </a>

                <TextControl
                    label="Browser title"
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
                dispatch( 'core/editor' ).editPost( { meta: { silk_g_browser_title: value } } );
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
            metaFieldValue: select( 'core/editor' ).getEditedPostAttribute( 'meta' )[ 'silk_g_browser_title' ],
            getSettings: select( 'silk/settings' ).getSettings()['g_browser_title_max_lenght']
        };

    }),

])( ProtoTextfield );


// WP Data: https://wordpress.org/gutenberg/handbook/designers-developers/developers/packages/packages-data/
// Data: https://github.com/WordPress/gutenberg/tree/master/packages/data
// Stack overflow: https://wordpress.stackexchange.com/questions/324979/getting-a-custom-gutenberg-components-state-from-outside-that-component
