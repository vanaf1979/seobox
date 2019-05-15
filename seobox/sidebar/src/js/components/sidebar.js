import React from 'react'
import SbModal from './sbmodal.js'
import ViewGoogle from './view-google.js'
import ViewFacebook from './view-facebook.js'
import ViewTwitter from './view-twitter.js'
import ViewSchema from './view-schema.js'

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { PluginSidebar, PluginSidebarMoreMenuItem } = wp.editPost;
const { Panel, PanelBody, PanelRow, TabPanel, TextControl, TextareaControl, RadioControl } = wp.components;


class Sidebar extends React.Component {
    
    constructor() {

        super()

        this.state = {
            modalIsOpen: false
        }

        // Bind methods
        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);

    }


    openModal() {

        this.setState({modalIsOpen: true});

    }

    closeModal() {
        
        this.setState({modalIsOpen: false});

    }


    onSelect( tabName ) {

        console.log( 'Selecting tab', tabName );

    }


    render() {

        return (
            <Fragment>

                <PluginSidebarMoreMenuItem target="silk-sidebar" icon="buddicons-replies">

                    {__("Silk seo", "silk")}

                </PluginSidebarMoreMenuItem>

                <PluginSidebar name="silk-sidebar" title={__("Silk SEO", "silk")} >

                    <Panel>

                        <PanelBody className="google" title="Google" icon="" initialOpen={ true }>

                            <PanelRow>

                                <button onClick={this.openModal}>Edit meta values</button>

                            </PanelRow>

                        </PanelBody>
                    
                    </Panel>

                    <Panel>

                        <PanelBody className="facebook" title="Facebook" icon="" initialOpen={ false }>

                            <PanelRow>

                                <p>Facebook</p>

                            </PanelRow>

                        </PanelBody>
                    
                    </Panel>

                    <Panel>

                        <PanelBody className="twitter" title="Twitter" icon="" initialOpen={ false }>

                            <PanelRow>

                                <p>Twitter</p>

                            </PanelRow>

                        </PanelBody>
                    
                    </Panel>

                    <Panel>

                        <PanelBody className="schema" title="Schema.org" icon="" initialOpen={ false }>

                            <PanelRow>

                                <p>Schema.org</p>

                            </PanelRow>

                        </PanelBody>
                    
                    </Panel>

                </PluginSidebar>

                <SbModal ref={this.SbModal} isOpen={this.state.modalIsOpen}>
                
                    <TabPanel className="edit-post"
                        activeClass="active-tab"
                        onSelect={ this.onSelect }
                        className="seobox-tabs"
                        tabs={ [
                            {
                                name: 'Google',
                                title: 'Google',
                                className: 'google'
                            },
                            {
                                name: 'Facebook',
                                title: 'Facebook',
                                className: 'facebook'
                            },
                            {
                                name: 'Twitter',
                                title: 'Twitter',
                                className: 'twitter'
                            },
                            {
                                name: 'Schema',
                                title: 'Schema',
                                className: 'schema'
                            }]
                        }>
                        {
                            ( tab ) => { 
                                
                                if( tab.title == 'Google' ) {
                                    
                                    return ( <ViewGoogle/> )

                                } else if( tab.title == 'Facebook' ) {
                                    
                                    return ( <ViewFacebook/> )
                                    
                                } else if( tab.title == 'Twitter' ) {
                                    
                                    return ( <ViewTwitter/> )

                                } else if( tab.title == 'Schema' ) {
                                    
                                    return ( <ViewSchema/> )
                                    
                                }
                            }
                        }
                    </TabPanel>

                </SbModal>

            </Fragment>
        )

    }

}

export default Sidebar
