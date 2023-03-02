( function( $ ) {
	"use strict";

	var remove_button_markup = '<div class="widgets-holder-toolbar">\
								<a href="" class="button"></a>\
							</div>';

	$.sidebars_remove_button = function( options ) {
		$.each( options.items || [], function ( index, value ) {
			var
			toolbar = $( remove_button_markup ),
			parent  = $( '#' + value ).parent();

			toolbar.find( 'a' )
				.attr( { 'href': ajaxurl + '?action=remove_custom_sidebar&id=' + value } )
				.text( options.button_title || 'remove this area' )
				.on( 'click', function( e ) {
					if ( ! confirm( options.confirm_message || 'Are you sure you want to remove this widget area?' ) ) {
						e.preventDefault();
					}
				} );

			parent.append( toolbar );
		});
	}

	$(function() {
		if ( _sidebarSettings )
			$.sidebars_remove_button( _sidebarSettings );
	});
} ).call( this, jQuery );