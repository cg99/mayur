( function( $ ) {
	
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