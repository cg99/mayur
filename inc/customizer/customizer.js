( function( $ ) {

	//Footer
	wp.customize( 'address1', function( value ) {
		value.bind( function( newval ) {
			 $( '#optionAddress1' ).html( newval );
		} );
	} );

	wp.customize( 'address2', function( value ) {
		value.bind( function( newval ) {
			 $( '#optionAddress1' ).html( newval );
		} );
	} );

  	wp.customize( 'contact', function( value ) {
		value.bind( function( newval ) {
			 $( '#optionContact' ).html( newval );
		} );
	} );

	wp.customize( 'email', function( value ) {
		value.bind( function( newval ) {
			 $( '#optionEmail' ).html( newval );
		} );
	} );

	//Social Links
	wp.customize( 'socialInstagram', function( value ) {
		value.bind( function( newval ) {
			 $( '#socialInstagram' ).html( newval );
		} );
	} );
	wp.customize( 'socialFacebook', function( value ) {
		value.bind( function( newval ) {
			 $( '#socialFacebook' ).html( newval );
		} );
	} );
	wp.customize( 'socialYoutube', function( value ) {
		value.bind( function( newval ) {
			 $( '#socialYoutube' ).html( newval );
		} );
	} );
	wp.customize( 'socialTwitter', function( value ) {
		value.bind( function( newval ) {
			 $( '#socialTwitter' ).html( newval );
		} );
	} );
	
} )( jQuery );