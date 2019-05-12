import React from 'react'

const { __ } = wp.i18n;
const { Fragment } = wp.element;
const { TextControl, TextareaControl, RadioControl } = wp.components;


class ViewGoogle extends React.Component {
    
    constructor() {

        super()

        this.state = {
            value: false
        }

    }


    render() {

        return (
            <Fragment>

                <h3>Google inputs view</h3>

                <p>Here goes a great description of this view.</p>

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
