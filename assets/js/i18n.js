( function( $ ) {
  var select = $( '<select />' );
  $( select ).append( '<option>Change Language</option>' );
  $( '.cf .container' ).append( select );
  $.getJSON( '/i18n.json', function( data ) {
    $( data ).each( function() {
      var option = $( '<option />' );
      $( option ).text( this['label'] );
      $( option ).val( this['path'] );
      $( select ).append( option );
    } );
  } );
  $( select ).on( 'change', function() {
    if ( $( this ).val() ) {
      location.href = $( this ).val();
    }
  } );
} )( jQuery );
