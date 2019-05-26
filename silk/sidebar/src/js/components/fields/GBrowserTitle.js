import React from 'react'

const { __ } = wp.i18n;
const { compose } = wp.compose;
const { withDispatch, withSelect } = wp.data;
const { Fragment } = wp.element;
const { TextControl, Button, Popover, MenuGroup, MenuItem } = wp.components;


class GBrowserTitle extends React.Component {
    
    constructor() {

        super()

        this.state = {
            menuIsVisible: false
        }

        this.copyFromFacebook - this.copyFromFacebook.bind(this);
        this.copyFromTwitter - this.copyFromTwitter.bind(this);
        this.copyFromSchema - this.copyFromSchema.bind(this);
        this.gotoDocs - this.gotoDocs.bind(this);
        this.toggleMenuVisible = this.toggleMenuVisible.bind(this);

    }


    popClick( e ) {

        e.preventDefault();

    }


    copyFromFacebook( e ) {

        console.log('Copy from Facebook title');

    }


    copyFromTwitter( e ) {

        console.log('Copy from Twitter title');
        
    }


    copyFromSchema( e ) {
        
        console.log('Copy from Schema title');

    }


    gotoDocs( e ) {
        
        window.open('https://vanaf-1979.gitbook.io/silk/fields/google-meta-tags/browser-title','_blank');

    }


    toggleMenuVisible() {

		this.setState( ( state ) => ( 

            this.menuIsVisible = ! this.menuIsVisible

        ));
        
    }


    render() {

        return (

            <div className="silk-field silk-textfield silk-textfield-browser-title">

                <div className="silk-field-controls">

                    <p className="silk-field-control silk-counter">
                        <span classNmme="count">100</span> / <span classNmme="max">150</span>
                    </p>

                    <Button onClick={ this.toggleMenuVisible } className="silk-field-control silk-menu-toggle">

                        { this.menuIsVisible && (

                            <Popover position="bottom left" onClick={ this.popClick(event) } onClickOutside={ this.toggleMenuVisible }>
                                
                                <MenuGroup label="Content">
                                    
                                    <MenuItem
                                        icon='facebook-alt'
                                        isSelected={ false }
                                        onClick={ ( event ) => { this.copyFromFacebook( event ) } }>
                                        Copy from Facebook title
                                    </MenuItem>

                                    <MenuItem
                                        icon='twitter'
                                        isSelected={ false }
                                        onClick={ ( event ) => { this.copyFromTwitter( event ) } }>
                                        Copy from Twitter title
                                    </MenuItem>

                                    <MenuItem
                                        icon='networking'
                                        isSelected={ false }
                                        onClick={ ( event ) => { this.copyFromSchema( event ) } }>
                                        Copy from Schema title
                                    </MenuItem>

                                </MenuGroup>
                                
                                <MenuGroup label="Tools">

                                    <MenuItem
                                        icon='book'
                                        isSelected={ false }
                                        onClick={ ( event ) => { this.gotoDocs( event ) } }>
                                        Field documentation
                                    </MenuItem>

                                </MenuGroup>

                            </Popover>
                        ) }
                    </Button>

                </div>

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
            }
        }

    }),
    withSelect(( select , props ) => {
        
        return {
            metaFieldValue: select( 'core/editor' ).getEditedPostAttribute( 'meta' )[ 'silk_g_browser_title' ],
        };

    }),

])( GBrowserTitle );