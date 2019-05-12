import React from 'react'

const { __ } = wp.i18n;
const { Fragment } = wp.element;


class ViewSchema extends React.Component {
    
    constructor() {

        super()

        this.state = {
            value: false
        }

    }


    render() {

        return (
            <Fragment>

                <h3>Schema inputs view</h3>

                <p>Here goes a great description of this view.</p>

            </Fragment>
        )

    }

}

export default ViewSchema
