import React from 'react'
import Modal from 'react-modal';


const { __ } = wp.i18n;


Modal.setAppElement('#editor');


class SbModal extends React.Component {
    

    constructor() {

        super()

        this.state = {
            modalIsOpen: false
        }

        this.openModal = this.openModal.bind(this);
        this.afterOpenModal = this.afterOpenModal.bind(this);
        this.closeModal = this.closeModal.bind(this);

    }


    openModal() {

        this.setState({modalIsOpen: true});

    }

    
    closeModal() {
        
        this.setState({modalIsOpen: false});

    }


    afterOpenModal() {

        // references are now sync'd and can be accessed.
        //this.subtitle.style.color = '#f00';

    }
    

    componentWillReceiveProps( nextProps ) {

        this.setState({modalIsOpen: nextProps.isOpen});

    }


    render() {
        return (
            <Modal
                isOpen={this.state.modalIsOpen}
                onAfterOpen={this.afterOpenModal}
                onRequestClose={this.closeModal}
                contentLabel="Example Modal"
                className="seobox-modal"
                overlayClassName="seobox-modal-overlay"
            >

                <header className="seobox-modal-header">

                    <h4>SeoBox</h4>

                    <a onClick={this.closeModal} className="fas fa-times"></a>

                </header>

                <main>

                    {this.props.children}

                </main>
                

            </Modal>
        )
    }

}

export default SbModal
