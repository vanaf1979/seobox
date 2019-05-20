import React from 'react'
import Modal from 'react-modal';


const { __ } = wp.i18n;
const { compose } = wp.compose;
const { withDispatch, withSelect } = wp.data;


Modal.setAppElement('#editor');


class SbModal extends React.Component {
    

    constructor() {

        super()

        this.state = {
            
        }

        this.openModal = this.openModal.bind(this);
        this.closeModal = this.closeModal.bind(this);
        this.afterOpenModal = this.afterOpenModal.bind(this);
        
    }


    openModal() {

        this.props.toggleModalOpen()

    }

    
    closeModal() {
        
        this.props.toggleModalOpen()

    }


    afterOpenModal() {


    }


    render() {
        return (
            <Modal
                isOpen={this.props.modalOpenState}
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

export default compose([

    withDispatch(( dispatch , props ) => {

        return {
            toggleModalOpen: function( ) {
                dispatch( 'silk/ui' ).toggleModalOpen()
            }
        }

    }),
    withSelect(( select , props ) => {
        
        return {
            modalOpenState: select( 'silk/ui' ).getModalOpemState()
        };

    }),

])( SbModal );