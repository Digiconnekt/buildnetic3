( function( $ ) {
	"use strict";

	var $win = $(window), $doc = $(document), $body = $('body');

(function() {
	var lastTime = 0;
	var vendors = ['ms', 'moz', 'webkit', 'o'];
	for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
			window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
			window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
					|| window[vendors[x]+'CancelRequestAnimationFrame'];
	}

	if (!window.requestAnimationFrame)
			window.requestAnimationFrame = function(callback, element) {
					var currTime = new Date().getTime();
					var timeToCall = Math.max(0, 16 - (currTime - lastTime));
					var id = window.setTimeout(function() { callback(currTime + timeToCall); },
							timeToCall);
					lastTime = currTime + timeToCall;
					return id;
			};

	if (!window.cancelAnimationFrame)
			window.cancelAnimationFrame = function(id) {
					clearTimeout(id);
			};
}());

(function($) {

	function Circle(pos,rad,color, ctx) {
			var _this = this;

			// constructor
			(function() {
					_this.pos = pos || null;
					_this.radius = rad || null;
					_this.color = color || null;
			})();

			this.draw = function() {
					if(!_this.active) return;
					ctx.beginPath();
					ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
					ctx.fillStyle = 'rgba(255,255,255,'+ _this.active+')';
					ctx.fill();
			};
	}

	// Util
	function getDistance(p1, p2) {
			return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
	}

	function CanvasEffect (element) {
			this.$elm = $(element);
			this.animateHeader = true;
			
			this._initHeader();
			this._initAnimation();
			this._initEvents();
	}

	CanvasEffect.prototype = {
			_initHeader: function () {
					this.width = this.$elm.outerWidth();
					this.height = this.$elm.outerHeight();
					this.target = {x: this.width/2, y: this.height/2};

					this.canvas = this.$elm.find('canvas').get(0);
					this.canvas.width = this.width;
					this.canvas.height = this.height;
					this.ctx = this.canvas.getContext('2d');

					// create points
					this.points = [];
					for(var x = 0; x < this.width; x = x + this.width/20) {
							for(var y = 0; y < this.height; y = y + this.height/20) {
									var px = x + Math.random()*this.width/20;
									var py = y + Math.random()*this.height/20;
									var p = {x: px, originX: px, y: py, originY: py };

									this.points.push(p);
							}
					}

					// for each point find the 5 closest points
					for(var i = 0; i < this.points.length; i++) {
							var closest = [];
							var p1 = this.points[i];
							for(var j = 0; j < this.points.length; j++) {
									var p2 = this.points[j]
									if(!(p1 == p2)) {
											var placed = false;
											for(var k = 0; k < 5; k++) {
													if(!placed) {
															if(closest[k] == undefined) {
																	closest[k] = p2;
																	placed = true;
															}
													}
											}

											for(var k = 0; k < 5; k++) {
													if(!placed) {
															if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
																	closest[k] = p2;
																	placed = true;
															}
													}
											}
									}
							}
							p1.closest = closest;
					}

					// assign a circle to each point
					for(var i in this.points) {
							var c = new Circle(this.points[i], 2+Math.random()*2, 'rgba(255,255,255,0.3)', this.ctx);
							this.points[i].circle = c;
					}
			},

			_initAnimation: function () {
					this._animate();

					for(var i in this.points) {
							this._shiftPoint(this.points[i]);
					}
			},

			_initEvents: function () {
					if(!('ontouchstart' in window)) {
							this.$elm.on('mousemove', this._mouseMove.bind(this));
					}

					window.addEventListener('resize', this._resize.bind(this));
			},

			_mouseMove: function (e) {
				e.stopPropagation();

				var y = e.pageY - $(e.currentTarget).offset().top
  				var x = e.pageX - $(e.currentTarget).offset().left

				this.target.x = x;
				this.target.y = y;
			},

			_resize: function () {
				this.width = this.$elm.outerWidth();
				this.height = this.$elm.outerHeight();
				this.canvas.width = this.width;
				this.canvas.height = this.height;
			},

			_animate: function () {
				this.ctx.clearRect(0,0,this.width,this.height);
				for(var i in this.points) {
						// detect points in range
						if(Math.abs(getDistance(this.target, this.points[i])) < 4000) {
								this.points[i].active = 0.3;
								this.points[i].circle.active = 0.6;
						} else if(Math.abs(getDistance(this.target, this.points[i])) < 20000) {
								this.points[i].active = 0.1;
								this.points[i].circle.active = 0.3;
						} else if(Math.abs(getDistance(this.target, this.points[i])) < 40000) {
								this.points[i].active = 0.02;
								this.points[i].circle.active = 0.1;
						} else {
								this.points[i].active = 0;
								this.points[i].circle.active = 0;
						}

						this._drawLines(this.points[i]);
						this.points[i].circle.draw();
				}
					
				window.requestAnimationFrame(this._animate.bind(this));
			},

			_shiftPoint: function (p) {
					var self = this;
					TweenLite.to(p, 1+1*Math.random(), {x:p.originX-50+Math.random()*100,
							y: p.originY-50+Math.random()*100, ease:Circ.easeInOut,
							onComplete: function() {
									self._shiftPoint(p);
							}});
			},

			_drawLines: function (p) {
					if(!p.active) return;

					for(var i in p.closest) {
							this.ctx.beginPath();
							this.ctx.moveTo(p.x, p.y);
							this.ctx.lineTo(p.closest[i].x, p.closest[i].y);
							this.ctx.strokeStyle = 'rgba(255,255,255,'+ p.active+')';
							this.ctx.stroke();
					}
			}
	}

	$.fn['canvasEffect'] = function () {
			return this.each(function () {
					new CanvasEffect(this);
			});
    };
})(jQuery);
$.fn['contentGrid'] = function() {
	return this.each(function() {
		var $this = $(this);

		$this.imagesLoaded().then(function() {
			$this.isotope(
				$.extend({}, $this.data('grid'), {
					layoutMode: 'packery',
					percentPosition: true
				})
			);
		});
	});
};
$.fn['contentGridFilter'] = function() {
	return this.each(function() {
		var targetSelector = $(this).attr('data-filter-target'),
			target = $(targetSelector),
			filter = $(this);

		filter.on('click', 'a', function(e) {
			e.preventDefault();

			$('.active', filter).removeClass('active');
			$(this).closest('li').addClass('active');

			target.isotope({
				filter: $( this ).parent().attr( 'data-filter' )
			});
		});
	});
};
$.headerSticky = function() {
	$win.on( 'scroll load', function() {
		$win.scrollTop() > $( '#site-header' ).outerHeight()
			? $( '.site-header-sticky' ).addClass( 'active' )
			: $( '.site-header-sticky' ).removeClass( 'active' );
	} );
};

$.mobileMenu = function () {
  $('ul.menu li.menu-item-has-children, ul.menu li.page_item_has_children').each(function () {
    var menuItem = $(this)
    var menuToggle = $('<span class="menu-item-toggle"><span></span></span>')

    menuToggle.insertAfter(menuItem.find('> a'))
      .on('click', function () {
        menuItem.toggleClass('menu-item-expand');
        menuItem.nextAll().removeClass('menu-item-expand');
        menuItem.prevAll().removeClass('menu-item-expand');
      })
  })
}

function NavSearch( element ) {
	this.element = $( element );
	this.toggler = $( '> a:first-child', this.element );
	this.input   = $( 'input', this.element );

	$doc.on( 'click', this.hide.bind( this ) );

	this.toggler.on( 'click', this.toggle.bind( this ) );
	this.element.on( 'click', function( e ) {
		e.stopPropagation();
	});

	this.element.on( 'keydown', ( function( e ) {
		if ( e.keyCode == 27 )
			this.hide();
	} ).bind( this ) );

	$.each( ['transitionend', 'oTransitionEnd', 'webkitTransitionEnd'], ( function( index, eventName ) {
		$( '> div', this.element ).on( eventName, ( function() {
			if ( this.element.hasClass( 'active' ) )
				this.input.get( 0 ).focus();
		} ).bind( this ) );
	} ).bind( this ) );
};

NavSearch.prototype = {
	toggle: function( e ) {
		e.preventDefault();
		e.stopPropagation();

		this.element.toggleClass( 'active' );
	},

	hide: function() {
		this.element.removeClass( 'active' );
	}
};

$.fn.navSearch = function( options ) {
	return this.each( function() {
		$( this ).data( '_navSearch', new NavSearch( this, options ) );
	} );
};

$.fn['offCanvasToggle'] = function() {
	return this.each(function() {
		var activeClass = $(this).attr('data-target') + '-active';

		$(this).on('click', function(e) {
			e.preventDefault();
			e.stopPropagation();
			
			$('body').toggleClass(activeClass);
		});

		$doc.on('click', function() {
			$('body').removeClass(activeClass);
		});

		$('.off-canvas').on('click', function(e) {
			e.stopPropagation();
		});
	});
};

$.fn['swiperSlider'] = function() {
	return this.each(function() {
		var config = $.extend({}, $(this).data('swiper'), {
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			autoHeight: true
		});

		var slider = new Swiper(this, config);
		var thumbs = $(this).next('.project-media-thumbs');

		if (thumbs.size() > 0) {
			var sliderThumbs = new Swiper(thumbs.get(0), {
				spaceBetween: 10,
				centeredSlides: true,
				slidesPerView: 5,
				touchRatio: 0.2
			});

			slider.params.control = sliderThumbs
			sliderThumbs.params.control = slider

			thumbs.on('click', '.swiper-slide', function() {
				var slideIndex = $(this).index();
				console.log(slideIndex)

				slider.slideTo(slideIndex)
				// sliderThumbs.slideTo(slideIndex)

				// Remove an active class
				thumbs.find('.swiper-slide-active').removeClass('swiper-slide-active')
				thumbs.find('.swiper-slide:nth(' + slideIndex + ')').addClass('swiper-slide-active')
			})
		}
	});
};
$.gotop = function() {
	$('.go-to-top a').on('click', function() {
		$( 'html, body' ).animate({ scrollTop: 0 });
	});

	$win.on('scroll', function() {
		if ($win.scrollTop() > 0) $('.go-to-top').addClass('active');
		else $('.go-to-top').removeClass('active');
	}).on('load', function() {
		$win.trigger('scroll');
	});
};
$.fn['googleMaps'] = function() {
	return this.each(function() {
		var
		elm       = $(this),
		elmCanvas = this,
		locations = {},
		geocoder  = {},
		elmConfig = $.extend({
			locations: encodeURIComponent('[]'),
			zoomable: 'yes',
			zoomlevel: 15,
			draggable: 'yes',
			type: 'roadmap',
			style: 'default'
		}, elm.data('options'));

		if (elmConfig.locations) {
			elmConfig.locations = decodeURIComponent(elmConfig.locations);
		}

		try {
			var mapStyles = {
				'subtle-grayscale': [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
				'pale-dawn':        [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}],
				'blue-warter':      [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}],
				'light-monochrome': [{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}],
				'shades-of-gray':   [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
			};

			var mapTypes = {
				'roadmap'  : google.maps.MapTypeId.ROADMAP,
				'satellite': google.maps.MapTypeId.SATELLITE,
				'hybrid'   : google.maps.MapTypeId.HYBRID,
				'terrain'  : google.maps.MapTypeId.TERRAIN
			};

			var createMarker = function(map, location, image) {
				return new google.maps.Marker({
					map: map,
					position: location,
					icon: image
				});
			};

			var initMaps = function (locations) {
				if (locations.length && locations.length > 0) {
					var centerLocation = locations.shift();
					var map = new google.maps.Map(elmCanvas, {
						center     : centerLocation.latlng,
						zoom       : parseInt(elmConfig.zoomlevel || 12),
						mapTypeId  : mapTypes[elmConfig.type || 'roadmap'],
						scrollwheel: elmConfig.zoomable == 'yes',
						styles     : mapStyles[elmConfig.style],
						panControl: true,
						scaleControl: true,
						streetViewControl: true,
						zoomControl: true,
						draggable: elmConfig.draggable == 'yes'
					});

					if (centerLocation.marker != '') {
						var centerMarker = createMarker(map, centerLocation.latlng, centerLocation.marker);

						if (centerLocation.content != '') {
							var infoWindow = new google.maps.InfoWindow({
								content: centerLocation.content
							});

							centerMarker.addListener('click', function() {
								infoWindow.open(map, centerMarker);
							});
						}
					}

					if (locations.length > 0) {
						$.map(locations, function(location) {
							if (location.marker != '') {
								var marker = createMarker(map, location.latlng, location.marker);

								if (location.content != '') {
									var infoWindow = new google.maps.InfoWindow({
										content: location.content
									});

									marker.addListener('click', function() {
										infoWindow.open(map, marker);
									});
								}
							}
						});
					}
				}
			};

			var queryAddressLocations = function (locations) {
				var geocoder = new google.maps.Geocoder();
				var deferres = locations.map(function (location) {
					var deferred = $.Deferred();

				    geocoder.geocode({ 'address': location.address }, function (results, status) {
				        if (status === google.maps.GeocoderStatus.OK) {
				        	location.latlng = results[0].geometry.location;
				            deferred.resolve(location);
				        } 
				    });

				    return deferred.promise();
				});

				return deferres;
			}

			locations = $.parseJSON(elmConfig.locations);
			geocoder = new google.maps.Geocoder();

			var invalidLocations = locations.filter(function (location) {
				return location.latlng === undefined;
			});

			if (invalidLocations.length > 0) {
				$.when.apply($, queryAddressLocations(locations)).done(function () {
					initMaps(Array.prototype.slice.apply(arguments));
				});
			} else {
				initMaps(locations);
			}
		} catch(e) {
		}
	});
};
$(function() {
	// Initialize the header sticky
	$.headerSticky();

	// Initialize the menu mobile
	$.mobileMenu();

	// Initialize go-to-top button
	$.gotop();

	// Initialize scroll down arrow
	$('.content-header .down-arrow a').on('click', function() {
		var stickyHeaderHeight = $('#site-header-sticky').height() || 0;
		var adminbarHeight = $('#wpadminbar').height() || 0;
		var contentOffset = $('.content-header').offset().top + $('.content-header').outerHeight();

		$( 'html, body' ).animate({
			scrollTop: contentOffset - (stickyHeaderHeight + adminbarHeight)
		});
	});

	// Initialize the off-canvas toggler
	$('.off-canvas-toggle').offCanvasToggle();

	// Initialize the search box toggler on the
	// navigation bar
	$('.navigator .search-box').navSearch();

	// Initialize the grid component
	$('[data-grid]').contentGrid();

	// Initialize the grid items filter
	$('[data-filter-target]').contentGridFilter();

	// Initialize swiper slider
	$('[data-swiper]').swiperSlider();

	// Initialize lightbox
	$('[rel^="prettyPhoto"]').prettyPhoto({
		social_tools: ''
	});

	$('[data-height]').imagesLoaded(function () {
		$(this).matchHeight({ property: 'min-height' });
	});

	$(document).imagesLoaded(function () {
		$('.vc_row > canvas').each(function () {
			$(this).parent().canvasEffect();
		});
	});

	//Fix RTL
	$(document).ready(function () {
		if ($('html').attr('dir') == 'rtl') {
			$('[data-vc-full-width="true"]').each(function(i, v) {
				$(this)
					.css('right', -$(this).css('left'))
					.css('left' , 'auto !important');
			});
		}
	});
});

$(window).on('load', function() {
  $('body').addClass('is-loaded');
  $('.elm-google-maps[data-options]').googleMaps();
});


} ).call( this, jQuery )