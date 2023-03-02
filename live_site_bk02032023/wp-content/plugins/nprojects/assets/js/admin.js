( function( $ ) {
	"use strict";

	var api = wp.customize,
		doc = $(document);

	var MediaList = ( function() {
		function MediaList( element ) {
			this.root        = $( element );
			this.list        = this.root.find( '.project-media-items' );
			
			// Initialize sortable plugin
			this.list.sortable( {
				items: '> li.project-media-item'
			} );

			// Bind events
			this.root.on( 'click', '.insert-media-items', this.browse.bind( this ) );
			this.root.on( 'click', '.remove-media-item', this.remove.bind( this ) );
		};

		MediaList.prototype = {
			browse: function( e ) {
				e.preventDefault();

				var self = this;
				var media = wp.media.frames.file_frame = wp.media( {
					title: _projects_i18n.SELECT_MEDIA_FILES,
					button: { text: _projects_i18n.INSERT_SELECTED_FILES },
					multiple: true
	 			} );

				media.on( 'select', function() {
					media.state().get('selection').forEach( function( value ) {
						var thumbnail = {};

						$.map( value.get( 'sizes' ), function( value ) {
							if ( thumbnail.width === undefined || thumbnail.width > value.width )
								thumbnail = value;
						} );

						self.add( value.toJSON() );
					} );
				} );

				media.open();
			},

			add: function( item ) {
				var template = $( '\
					<li class="project-media-item">\
						<input type="hidden" class="project-media-id" name="_project_media[id][]" />\
						<input type="hidden" class="project-media-title" name="_project_media[title][]" />\
						<input type="hidden" class="project-media-caption" name="_project_media[caption][]" />\
						<input type="hidden" class="project-media-alt" name="_project_media[alt][]" />\
						<div class="thumbnail"></div>\
						<input type="text" class="project-media-desc" name="_project_media[desc][]" />\
						<div class="project-media-item-buttons">\
							<button type="button" class="button edit-media-item">Edit</button>\
							<button type="button" class="button remove-media-item">Remove</button>\
						</div>\
					</li>\
				' );

				template.find( 'input.project-media-id' ).val( item.id );
				template.find( 'input.project-media-title' ).val( item.title );
				template.find( 'input.project-media-desc' ).val( item.description );
				template.find( 'input.project-media-caption' ).val( item.caption );
				template.find( 'input.project-media-alt' ).val( item.alt );

				if ( item.sizes.thumbnail ) {
					template.removeClass( 'no-thumbnail' );
					template.find( '.thumbnail' ).append(
						$( '<img/>', { src: item.sizes.thumbnail.url } )
					);
				}
				else {
					template.addClass( 'no-thumbnail' );
				}
				
				template.insertBefore( this.list.find( '.project-media-empty' ) );
			},

			remove: function( e ) {
				$( e.target ).closest( '.project-media-item' ).remove();
			}
		};

		return MediaList;
	} )();

	$( function() {
		new MediaList( $( '#project-media' ) );
	} );

} ).call( this, jQuery );
