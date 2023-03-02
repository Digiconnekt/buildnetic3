( function( $ ) {
	"use strict";
	
	/**
	 * debouncing function from John Hann
	 * http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
	 */
	var debounce = function (func, threshold, execAsap) {
		var timeout;

		return function debounced () {
			var obj = this, args = arguments;
			function delayed () {
				if (!execAsap)
					func.apply(obj, args);
				timeout = null;
			};

			if (timeout)
				clearTimeout(timeout);
			else if (execAsap)
				func.apply(obj, args);

			timeout = setTimeout(delayed, threshold || 100);
		};
	};

	/**
	 * Register smartresize plugin
	 */
	$.fn['smartresize'] = function(fn){
		return fn ? this.bind('resize', debounce(fn)) : this.trigger('smartresize');
	};
} ).call( this, jQuery );


( function( $ ) {
	"use strict";

	var doc = $( document ),
		win = $( window );

	$( function() {
		win.smartresize( Waypoint.refreshAll )
		   .on( 'load', Waypoint.refreshAll );

		if ( $.fn.countTo ) {
			$( '.counter' ).each( function() {
				var counted = false;

				$( this ).data( 'waypoint.inview', new Waypoint.Inview( {
					element: this,
					enter: function() {
						if ( counted == false ) {
							counted = true;
							$( '.counter-value', this.element ).countTo();
						}
					}
				} ) )
			} );
		}

		// Countdown
		if ( $.fn.countdown ) {
			$( '.countdown' ).each( function() {
				var format = [],
					parts = $( this ).attr( 'data-hidden' ).split( ',' ),
					config = {
						year: '<span class="years"><span class="number">%-Y</span> %!Y:' + _countdownLocalize['year'] + ',' + _countdownLocalize['year'] + 's;</span>',
						month: '<span class="months"><span class="number">%-m</span> %!m:' + _countdownLocalize['month'] + ',' + _countdownLocalize['month'] + 's;</span>',
						week: '<span class="weeks"><span class="number">%-w</span> %!w:' + _countdownLocalize['week'] + ',' + _countdownLocalize['week'] + 's;</span>',
						day: '<span class="days"><span class="number">%-d</span> %!d:' + _countdownLocalize['day'] + ',' + _countdownLocalize['day'] + 's;</span>',
						hour: '<span class="hours"><span class="number">%-H</span> %!H:' + _countdownLocalize['hour'] + ',' + _countdownLocalize['hour'] + 's;</span>',
						minute: '<span class="minutes"><span class="number">%-M</span> %!M:' + _countdownLocalize['minute'] + ',' + _countdownLocalize['minute'] + 's;</span>',
						second: '<span class="seconds"><span class="number">%-S</span> %!S:' + _countdownLocalize['second'] + ',' + _countdownLocalize['second'] + 's;</span>'
					};

				if ( parts.indexOf( 'week' ) != -1 ) {
					config.day = '<span class="days"><span class="number">%-D</span> %!D:' + _countdownLocalize['day'] + ',' + _countdownLocalize['day'] + 's;</span>';
				}

				$.map( config, function( value, key ) {
					if ( parts.indexOf( key ) == -1 )
						format.push( value );
				} );

				$( this ).countdown( $( this ).attr( 'data-time' ), function( evt ) {
					$(this).html( evt.strftime( format.join( ' ' ) ) );
				} )
			} );
		}

		// Post Carousel
		$( '.blog-shortcode.blog-carousel' ).each( function() {
			var container = $( this ),
				columns = 1;

			if ( container.hasClass( 'blog-two-columns' ) ) columns = 2;
			if ( container.hasClass( 'blog-three-columns' ) ) columns = 3;
			if ( container.hasClass( 'blog-four-columns' ) ) columns = 4;
			if ( container.hasClass( 'blog-five-columns' ) ) columns = 5;

			var entriesWrapper = $( '.entries-wrapper', container )
				.addClass( 'owl-carousel' )
				.imagesLoaded( function() {
					entriesWrapper.owlCarousel( {
						items: columns,
						navigation: true,
						autoPlay: true,
						stopOnHover: true,
						itemsDesktop : [1199, columns],
						itemsDesktopSmall : [979, 3],
						itemsTablet : [768, 2],
						scrollPerPage: true,
						slideSpeed: 800,
						autoHeight : true,
						responsiveBaseWidth: entriesWrapper
					} );
				} );
		} );

		// Elements Carousel
		$( '.elements-carousel' ).each( function() {
			try {
				var element = $( this );
				var config  = JSON.parse( element.attr( 'data-config' ) );
				
				element.imagesLoaded( function() {
					$( '.elements-carousel-wrap', element ).owlCarousel( config );
				} );
			}
			catch( e ) {}
		} );
	} );

} ).call( this, jQuery );