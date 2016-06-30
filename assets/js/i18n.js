( function( $ ) {
  $( 'select.languages' ).on( 'change', function() {
    if ( $( this ).val() ) {
      location.href = $( this ).val();
    }
  } );
} )( jQuery );
