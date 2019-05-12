var el = wp.element.createElement;
var Text = wp.components.TextControl;
var withSelect = wp.data.withSelect;
var withDispatch = wp.data.withDispatch;
var compose = wp.compose.compose;

var MetaBlockField = compose(
    withDispatch( function( dispatch, props ) {
        return {
            setMetaFieldValue: function( value ) {
                dispatch( 'core/editor' ).editPost(
                    { meta: { [ props.fieldName ]: value } }
                );
            }
        }
    } ),
    withSelect( function( select, props ) {
        return {
            metaFieldValue: select( 'core/editor' )
                .getEditedPostAttribute( 'meta' )
                [ props.fieldName ],
        }
    } )
)( function( props ) {
    return el( Text, {
        label: 'Meta Block Field',
        value: props.metaFieldValue,
        onChange: function( content ) {
            props.setMetaFieldValue( content );
        },
    } );
} );

export default MetaBlockField