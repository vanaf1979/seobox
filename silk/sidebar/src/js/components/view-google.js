import React from 'react'
import ProtoTextfield from './fields/proto-textfield.js';

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { TextControl, TextareaControl, RadioControl, Button, Popover, MenuGroup, MenuItem } = wp.components;


class ViewGoogle extends React.Component {
    
    constructor() {

        super()

        this.state = {
            isVisible: false
        }

        this.toggleVisible = this.toggleVisible.bind(this);

    }


    toggleVisible() {
		this.setState( ( state ) => ( 
            this.isVisible = ! this.isVisible
        ) );
    }
    

    render() {

        return (
            <Fragment>

                <h3>Google inputs view</h3>

                <Button isDefault onClick={ this.toggleVisible } className="drop-bt">
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
                </Button>

                <ProtoTextfield/>
                    
                <TextareaControl
                    label="Description"
                    value="Google description google description google description google description google description google description google description google description google description google description google description google description"
                />

                <TextControl
                    label="Canonical"
                    value=""
                    onChange=""
                />

                <TextControl
                    label="Robots"
                    value=""
                    onChange=""
                />

            </Fragment>
        )

    }

}

export default ViewGoogle
