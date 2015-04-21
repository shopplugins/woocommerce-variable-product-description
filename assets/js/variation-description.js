/*!
 * Variations Description
 */
;(function ( $, window, document, undefined ) {

    $variation_form = $( '.variations_form');

    $variation_form.on( 'show_variation', function( event, variation ){
        // set the variation description if the value is set
        if ( variation.variation_description ) {
            $( '.variation-description p').text( variation.variation_description );
        }
    })
    .on( 'reset_image', function () {
        // reset the variation description when reset button is pressed
        $('.variation-description p').text('');
    });

})( jQuery, window, document );