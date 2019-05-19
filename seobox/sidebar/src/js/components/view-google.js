import React from 'react'
import ProtoTextfield from './fields/proto-textfield.js';

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { TextControl, TextareaControl, RadioControl, Button, Popover, MenuGroup, MenuItem, Tooltip } = wp.components;


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
                                    info="Copy value from Facebook title"
                                    isSelected={ false }
                                    onClick={ () => { console.log('click') } }
                                >
                                    Copy Facebook title
                                </MenuItem>
                                <MenuItem
                                    icon='twitter'
                                    info="Copy value from Twitter title"
                                    isSelected={ false }
                                    onClick={ () => { console.log('click') } }
                                >
                                    Copy from Twitter
                                </MenuItem>
                                <MenuItem
                                    icon='networking'
                                    info="Copy value from Schema title"
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
                    
                {/* Use for tags: https://github.com/yairEO/tagify */}
                <TextControl
                    label="Browser title"
                    value="Google browser title"
                    onChange=""
                />

                <TextControl
                    label="Keywords"
                    value="Google keywords"
                    onChange=""
                />

                <TextareaControl
                    label="Description"
                    help="Enter some text"
                    value="Google description"
                />

                <TextControl
                    label="Canonical"
                    value="Canonical url"
                    onChange=""
                />

                {/* <RadioControl
                    label="User type"
                    help="The type of the current user"
                    options={ [
                    { label: 'Author', value: 'a' },
                    { label: 'Editor', value: 'e' },
                    ] }
                /> */}

            </Fragment>
        )

    }

}

export default ViewGoogle
