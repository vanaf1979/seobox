import React from 'react'
import ProtoTextfield from './fields/proto-textfield.js';
import GBrowserTitle from './fields/GBrowserTitle.js';

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

                <h5>Google inputs view</h5>

                {/* <ProtoTextfield/> */}

                <GBrowserTitle/>
                    
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
