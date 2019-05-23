import React from 'react'

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { TextControl, TextareaControl, RadioControl, Button, Popover, MenuGroup, MenuItem, Tooltip } = wp.components;


class ViewFacebook extends React.Component {
    
    constructor() {

        super()

        this.state = {
            value: false
        }

    }


    render() {

        return (
            <Fragment>

                <h3>Facebook inputs view</h3>

                <p>Here goes a great description of this view.</p>

                <TextControl
                    label="Canonical"
                    help="Description about this field"
                    value="Canonical url"
                    onChange=""
                />

            </Fragment>
        )

    }

}

export default ViewFacebook
