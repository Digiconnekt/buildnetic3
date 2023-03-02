( function( $ ) {
	"use strict";

	var Mixins = {
		methods: {
			triggerChange: function() {
				this.$emit( 'change', this );
			},

			getValue: function() {
				return $.extend( {}, this.value );
			},

			debounce: function(func, wait, immediate) {
				var timeout;
				return function() {
					var context = this, args = arguments;
					var later = function() {
						timeout = null;
						if (!immediate) func.apply(context, args);
					};
					var callNow = immediate && !timeout;
					clearTimeout(timeout);
					timeout = setTimeout(later, wait);
					if (callNow) func.apply(context, args);
				};
			}
		}
	}

	Vue.component( 'textfield', {
		props: ['value'],
		mixins: [Mixins],
		template: '\
			<div>\
				<input type="text" v-model:value="value" v-on:change="triggerChange" />\
			</div>',

		data: function() {
			return {
				value: this.value
			};
		},

		methods: {
			getValue: function() {
				return this.value;
			}
		}
	} );

	Vue.component( 'textareafield', {
		props: ['value'],
		mixins: [Mixins],
		template: '\
			<div>\
				<textarea type="text" v-model:value="value" v-on:change="triggerChange"></textarea>\
			</div>',

		data: function() {
			return {
				value: this.value
			};
		},

		methods: {
			getValue: function() {
				return this.value;
			}
		}
	} );

	/**
	 * The image uploader component
	 * @since  1.0.0
	 */
	Vue.component( 'image-upload', {
		props: {
			value: {
				type: Object,
				required: true,
				default: function () {
					return {
						id: false,
						url: false
					}
				}
			}
		},
		mixins: [Mixins],

		data: function() {
			return this.value;
		},

		template: '\
			<div class="image-uploader">\
				<div class="upload-dropzone">\
					<span class="upload-message">\
						Drop a file here or<br>\
						<a href="javascript:;" v-on:click="media.open()">select a file</a>\
						<a href="#" class="upload"></a>\
					</span>\
					<span v-if="value.url" class="upload-preview">\
						<img v-bind:src="value.url" />\
					</span>\
				</div>\
				<a v-if="value.url" href="javascript:;" v-on:click="_clear" class="button">Remove</a>\
			</div>\
		',

		mounted: function() {
			this.media = wp.media.frames.file_frame = wp.media({
				title: 'Choose Image',
				button: { text: 'Choose Image' },
				multiple: false,
				library: {
					type: 'image'
				}
			});

			this.media.on( 'select', ( function() {
				var selected = this.media.state().get('selection').first();

				this.value.id = selected.get( 'id' );
				this.value.url = selected.get( 'url' );
				
				this.triggerChange();
			} ).bind( this ) );
		},

		methods: {
			_clear: function() {
				this.value.id = -1;
				this.value.url = false;

				this.triggerChange();
			}
		}
	} );

	Vue.component( 'color', {
		props: ['value'],
		mixins: [Mixins],
		template: '<input type="text" v-bind:value="value" />',

		data: function() {
			return {
				value: this.value
			};
		},

		mounted: function() {
			var self     = this;
			var $element = $( this.$el );

			$element.spectrum( {
				showInput: true,
				showAlpha: true,
				allowEmpty:true,
				clickoutFiresChange: true,
				preferredFormat: "hex",
				chooseText: "Ok",
    			cancelText: "Cancel",
				change: function( color ) {
					self.value = color == null ? '' : color.toString();
					self.triggerChange();
				}
			} );
		},

		methods: {
			getValue: function() {
				return this.value;
			}
		}
	} );

	Vue.component( 'colors', {
		props: ['value', 'options'],
		mixins: [Mixins],
		template: '\
			<div>\
				<div v-for="(title, key) in options" class="color-field">\
					<label>{{ title }}</label>\
					<div class="color-input">\
						<color v-bind:value="value[key]" v-bind:data-key="key" v-on:change="changeValue"></color>\
					</div>\
				</div>\
			</div>',

		methods: {
			changeValue: function( context ) {
				this.value[ $( context.$el ).attr( 'data-key' ) ] = context.value;
				this.triggerChange();
			}
		}
	} );

	Vue.component( 'checkboxes', {
		props: ['value', 'options'],
		mixins: [Mixins],
		data: function() {
			var values = [];
			$.map( this.value, function( item, index ) {
				values.push( item );
			} );

			return {
				values: values
			}
		},
		template: '\
			<div>\
				<label v-for="(title, index) in options">\
					<input type="checkbox" v-bind:value="index" v-model="values" v-on:change="triggerChange" />\
					<span>{{ title }}</span>\
				</label>\
			</div>\
		',
		methods: {
			getValue: function() {
				return this.values;
			}
		}
	} );

	Vue.component( 'dropdown', {
		props: ['value', 'options'],
		mixins: [Mixins],
		template: '\
			<div>\
				<select v-model="value" v-on:change="triggerChange">\
					<option v-for="(title, key) in options" v-bind:value="key">{{ title }}</option>\
				</select>\
			</div>\
		',
		methods: {
			getValue: function() {
				return this.value;
			}
		}
	} );

	Vue.component( 'radio-buttons', {
		props: ['value', 'options'],
		mixins: [Mixins],

		template: '\
			<div>\
				<label v-for="(title, key) in options">\
					<input type="radio" v-bind:value="key" v-bind:checked="value == key" v-on:change="changeValue" />\
					<span>{{ title }}</span>\
				</label>\
			</div>\
		',

		methods: {
			changeValue: function( e ) {
				this.value = e.target.value;
				console.log( this.value );
				this.triggerChange();
			},

			getValue: function() {
				return this.value;
			}
		}
	} );

	Vue.component( 'dimension', {
		props: ['value', 'choices'],
		mixins: [Mixins],
		template: '\
			<div>\
				<label v-for="(title, key) in choices">\
					<span>{{ title }}</span>\
					<input type="text" v-bind:value="value[key]" v-bind:data-key="key" v-on:change="changeValue">\
				</label>\
			</div>\
		',

		methods: {
			changeValue: function( context ) {
				this.value[ $( context.target ).attr( 'data-key' ) ] = context.target.value;
				this.triggerChange();
			}
		}
	} );

	Vue.component( 'typography', {
		props: ['value', 'fonts'],
		mixins: [Mixins],
		data: function() {
			return {
				fontVariants: []
			}
		},
		filters: {
			parseTitle: function( value ) {
				return decodeURIComponent( value.substring( 0, value.indexOf( '/' ) ) ).replace(/\+/g, ' ');
			}
		},
		template: '\
			<div> \
				<div class="typography-font">\
					<select ref="font" v-model="value.family">\
						<option v-for="font in fonts" v-bind:value="font">{{ font | parseTitle }}</option>\
					</select>\
				</div>\
				<div class="typography-style">\
					<select ref="fontVariants" v-model="value.style">\
						<option v-for="variant in fontVariants" v-bind:value="variant">{{ variant }}</option>\
					</select>\
				</div>\
				<div class="typography-color">\
					<color v-bind:value="value.color" v-on:change="changeColor"></color>\
				</div>\
				<div class="typography-group">\
					<div class="typography-transform">\
						<select ref="textStyle" v-model="value.textStyle">\
							<option value="none">None</option>\
							<option value="uppercase">Upper Case</option>\
							<option value="lowercase">Lower Case</option>\
							<option value="capitalize">Capitalize</option>\
						</select>\
						<label class="typography-label">Text Style</label>\
					</div>\
					<div class="typography-size">\
						<input type="text" v-model="value.size" v-on:change="triggerChange" />\
						<label class="typography-label">Size</label>\
					</div>\
					<div class="typography-line-height">\
						<input type="text" v-model="value.lineHeight" v-on:change="triggerChange" />\
						<label class="typography-label">Line Height</label>\
					</div>\
					<div class="typography-letter-spacing">\
						<input type="text" v-model="value.letterSpacing" v-on:change="triggerChange" />\
						<label class="typography-label">Letter Spacing</label>\
					</div>\
				</div>\
			</div>\
		',
		beforeMount: function() {
			if ( /\//.test( this.value.family ) ) {
				this.fontVariants = this.value.family.split( '/' )[1].split( ',' );
			}
		},
		mounted: function() {
			$( 'select', this.$el ).chosen( {
				width: '100%',
				disable_search_threshold: 10
			} );

			$( this.$refs.font ).on( 'change', this.updateVariants );
			$( this.$refs.textStyle ).on( 'change', this.setStyle );
			$( this.$refs.fontVariants )
				.on( 'change', this.setVariant )
				.trigger( 'chosen:updated' );
		},
		updated: function() {
			$( this.$refs.fontVariants ).trigger( 'chosen:updated' );
		},
		methods: {
			updateVariants: function( e ) {
				this.value.family = $( e.target ).val();
				this.fontVariants = this.value.family.split( '/' )[1].split( ',' );
				this.value.style  = this.fontVariants.indexOf( this.value.style ) == -1 ? 'regular' : this.value.style;
				
				this.triggerChange();
			},

			setVariant: function ( e ) {
				this.value.style = $( e.target ).val();
				this.triggerChange();
			},

			setStyle: function( e ) {
				this.value.textStyle = $( e.target ).val();
				this.triggerChange();
			},

			changeColor: function( context ) {
				this.value.color = context.value;
				this.triggerChange();
			}
		}
	} );

	/**
	 * The background settings component
	 * @since  1.0.0
	 */
	Vue.component( 'background', {
		props: ['value'],
		mixins: [Mixins],

		template: '\
			<div class="options-control-wrap">\
				<div class="background-image">\
					<image-upload v-bind:value="value.image" v-on:change="triggerChange"></image-upload>\
				</div>\
				<div class="background-color">\
					<color v-bind:value="value.color" v-on:change="changeColor"></color>\
				</div>\
				<div class="background-group">\
					<div class="background-repeat">\
						<label>Repeat</label>\
						<select v-on:change="triggerChange" v-model="value.repeat">\
							<option value="no-repeat">No Repeat</option>\
							<option value="repeat-x">Repeat X</option>\
							<option value="repeat-y">Repeat Y</option>\
							<option value="repeat">Repeat Both</option>\
						</select>\
					</div>\
					<div class="background-position">\
						<label>Position</label>\
						<select v-on:change="triggerChange" v-model="value.position">\
							<option value="top left">Top Left</option>\
							<option value="top center">Top Center</option>\
							<option value="top right">Top Right</option>\
							<option value="center left">Middle Left</option>\
							<option value="center center">Middle Center</option>\
							<option value="center right">Middle Right</option>\
							<option value="bottom left">Bottom Left</option>\
							<option value="bottom center">Bottom Center</option>\
							<option value="bottom right">Bottom Right</option>\
							<option value="custom">Custom</option>\
						</select>\
					</div>\
				</div>\
				<div v-if="value.position == \'custom\'" class="background-position-custom background-group">\
					<label>Custom Position</label>\
					<div>\
						<input type="text" v-on:change="triggerChange" v-model="value.x" />\
						<label>Position X</label>\
					</div>\
					<div>\
						<input type="text" v-on:change="triggerChange" v-model="value.y" />\
						<label>Position Y</label>\
					</div>\
				</div>\
				<div class="background-group">\
					<div class="background-attachment">\
						<label>Attachment</label>\
						<select v-on:change="triggerChange" v-model="value.attachment">\
							<option value="scroll">Scroll</option>\
							<option value="fixed">Fixed</option>\
						</select>\
					</div>\
					<div class="background-size">\
						<label>Size</label>\
						<select v-on:change="triggerChange" v-model="value.size">\
							<option value="auto">Auto</option>\
							<option value="cover">Cover</option>\
							<option value="contain">Contain</option>\
							<option value="fit-width">100% Width</option>\
							<option value="fit-height">100% Height</option>\
							<option value="stretch">Stretch</option>\
							<option value="custom">Custom</option>\
						</select>\
					</div>\
				</div>\
				<div v-if="value.size == \'custom\'" class="background-size-custom background-group">\
					<label>Custom Size</label>\
					<div>\
						<input type="text" v-on:change="triggerChange" v-model="value.width" />\
						<label>Width</label>\
					</div>\
					<div>\
						<input type="text" v-on:change="triggerChange" v-model="value.height" />\
						<label>Height</label>\
					</div>\
				</div>\
			</div>\
		',
		methods: {
			changeColor: function( context ) {
				this.value.color = context.value;
				this.triggerChange();
			}
		}
	} );

	Vue.component( 'border-item', {
		props: ['value', 'title'],
		mixins: [Mixins],
		template: '\
			<div class="border-field-wrap">\
				<label>{{ title }}</label>\
				<div class="border-field">\
					<div class="border-size">\
						<input v-model="value.size" type="text" v-on:change="triggerChange" />\
					</div>\
					<div class="border-style">\
						<select v-model="value.style" v-on:change="triggerChange">\
							<option value="none">None</option>\
							<option value="dotted">Dotted</option>\
							<option value="dashed">Dashed</option>\
							<option value="solid">Solid</option>\
							<option value="double">Double</option>\
							<option value="groove">Groove</option>\
							<option value="ridge">Ridge</option>\
							<option value="inset">Inset</option>\
							<option value="outset">Outset</option>\
							<option value="hidden">Hidden</option>\
						</select>\
					</div>\
					<div class="border-color">\
						<color v-bind:value="value.color" v-on:change="changeColor"></color>\
					</div>\
				</div>\
			</div>\
		',
		methods: {
			changeColor: function( context ) {
				this.value.color = context.value;
				this.triggerChange();
			},

			getValue: function() {
				return $.extend( {}, this.value );
			}
		}
	} );

	Vue.component( 'border', {
		props: ['value', 'options'],
		mixins: [Mixins],
		template: '\
			<div v-bind:class="{ simplify: isSimplify }">\
				<div class="border-simplify">\
					<label>\
						<span>Show Simplify Controls</span>\
						<input type="checkbox" v-bind:checked="isSimplify" v-on:change="setSimplify" />\
					</label>\
				</div>\
				<border-item v-show="isSimplify" v-bind:value="value.all" title="All" v-on:change="triggerChange"></border-item>\
				<border-item v-for="(title, key) in options" \
							 v-bind:value="value[key]" \
							 v-show="!isSimplify" \
							 v-bind:title="title" \
							 v-bind:data-key="key" \
							 v-on:change="setOptions">\
				</border-item>\
			</div>\
		',

		data: function() {
			return {
				isSimplify: this.value.simplify === true
			}	
		},

		methods: {
			setSimplify: function( e ) {
				this.value.simplify = this.isSimplify = e.target.checked;
				this.triggerChange();
			},

			setOptions: function ( context ) {
				this.value[ $( context.$el ).attr( 'data-key' ) ] = context.getValue();
				this.triggerChange();
			},

			getValue: function() {
				var value = {};
				$.map( this.value, function( item, index ) {
					value[index] = typeof( item ) == 'object'
						? $.extend( {}, item )
						: item;
				} );

				return value;
			}
		}
	} );


	Vue.component( 'column-layout-item', {
		props: ['value'],
		mixins: [Mixins],
		computed: {
			sizes: function() {
				return this.value;
			}
		},
		template: '\
			<div class="columns-layout">\
				<div v-for="size in sizes" :data-width="size"></div>\
			</div>\
		',
		updated() {
			this.setupResizable();
		},
		mounted() {
			this.setupResizable();
		},
		methods: {
			setupResizable: function() {
				var self = this;
				var root = this.$el;
				var initResize, doResize, getMaxWidth, commitChanges, parentWidth, stepWidth, increase, decrease, resizeHolder;

				initResize = function(event, ui) {
					resizeHolder = $(event.srcElement);
					parentWidth = ui.element.parent().width();
					stepWidth = Math.floor(parentWidth / 12);
				};

				getMaxWidth = function(element) {
					var prevWidth = 0;
					
					element.prevAll().each(function() {
						prevWidth += parseInt($(this).attr('data-width'));
					});

					return (12 - prevWidth) - (element.nextAll().length * 2);
				};

				decrease = function(element, width, invert) {
					var currentWidth = parseInt(element.attr('data-width')),
						isInvert = invert || false,
						newWidth = currentWidth - width;

					if (newWidth < 2) {
						decrease(isInvert ? element.prev() : element.next(), width, isInvert);
					}
					else {
						element.attr('data-width', newWidth);
						element.find('span').text(newWidth);
					}
				};

				increase = function(element, width) {
					var currentWidth = parseInt(element.attr('data-width')),
						newWidth = currentWidth + width;

					element.attr('data-width', newWidth);
					element.find('span').text(newWidth);
				};

				doResize = function(event, ui) {
					var newWidth = Math.round(ui.size.width / stepWidth),
						currentWidth = parseInt(ui.element.attr('data-width')),
						maxWidth = getMaxWidth(ui.element);

					if (newWidth < 2) newWidth = 2;
					if (newWidth > maxWidth) newWidth = maxWidth;

					if (newWidth > currentWidth)
						decrease(ui.element.next(), newWidth - currentWidth);
					else
						increase(ui.element.next(), currentWidth - newWidth);

					ui.element.attr('data-width', newWidth);
					ui.element.removeAttr('style');
					ui.element.find('span').text(newWidth);
				};

				commitChanges = function() {
					var columns = [];

					$('div[data-width]', root).each(function() {
						columns.push( parseInt( $(this).attr('data-width') ) );
					});

					self.value = columns;
					self.triggerChange();
				};

				$('div[data-width]', root).resizable({
					handles: 'e',
					start: initResize,
					resize: doResize,
					stop: commitChanges
				});
			},
			getValue: function() {
				return JSON.parse( JSON.stringify( this.value ) );
			}
		}
	} );


	Vue.component( 'column-layout', {
		props: ['value'],
		mixins: [Mixins],
		template: '\
			<div>\
				<div class="columns-count options-control-radio-buttons">\
					<div class="options-control-inputs">\
						<radio-buttons v-bind:value="columns" v-bind:options="ranges" v-on:change="setColumns"></radio-buttons>\
					</div>\
				</div>\
				<column-layout-item v-bind:value="layout" v-on:change="setLayout"></column-layout-item>\
			</div>\
		',
		data: function() {
			return {
				columns: this.value.columns,
				ranges: { 1: 1, 2: 2, 3: 3, 4:4 }
			}
		},
		computed: {
			columns: function() {
				return this.value.columns;
			},
			layout: function() {
				return this.value.layout[this.columns];
			}
		},
		methods: {
			setColumns: function(columns) {
				this.value.columns = parseInt(columns.value);
				this.triggerChange();
			},
			setLayout: function(context) {
				this.value.layout[this.columns] = context.getValue();
				this.triggerChange();
			}
		}
	} );

	Vue.component( 'icon-item', {
		props: ['value', 'icons'],
		mixins: [Mixins],
		template: '\
			<div class="sortable-content">\
				<div class="sortable-item-icon">\
					<input type="text" class="item-icon" :value="value.icon" />\
				</div>\
				<div class="sortable-item-title">\
					<input type="text" :value="value.title" @input="changeTitle" />\
				</div>\
				<div class="sortable-item-url">\
					<input type="text" :value="value.url" @input="changeUrl" />\
				</div>\
			</div>\
		',
		mounted() {
			this.$nextTick((function() {
				$('.item-icon', this.$el).fontIconPicker({
					source: this.icons,
					theme: 'fip-inverted'
				}).on('change', (function(e) {
					this.value.icon = $(e.target).val();
					this.triggerChange();
				}).bind(this));
			}).bind(this));
		},
		methods: {
			changeTitle: function(e) {
				this.value.title = $(e.target).val();
				this.triggerChange();
			},
			changeUrl: function(e) {
				this.value.url = $(e.target).val();
				this.triggerChangeDebounced();
			},
			triggerChangeDebounced: function() {
				this.debounce(this.triggerChange, 100)();
			}
		}
	} );

	Vue.component( 'icons', {
		props: ['value', 'icons'],
		mixins: [Mixins],
		data: function() {
			return {
				addedIcons: []
			}
		},
		template: '\
			<div>\
				<ul class="social-icons-sortable">\
					<li v-for="(item, index) in addedIcons" :data-index="index">\
						<div class="handle"></div>\
						<icon-item :value="item" :icons="icons" :data-index="index" @change="updateIcon"></icon-item>\
						<button type="button" class="button" @click="removeIcon(item)">\
							<i class="fa fa-times"></i>\
						</button>\
					</li>\
				</ul>\
				<button type="button" class="add-new-icon" @click="addIcon">Add Icon</button>\
			</div>\
		',

		created() {
			this.$set(this, 'addedIcons', this.value);
		},

		mounted() {
			$('.social-icons-sortable', this.$el).sortable({
				items: '> li',
				handle: '.handle',
				axis: 'y',
				update: this.updatePosition.bind(this)
			});
		},

		methods: {
			addIcon: function() {
				this.addedIcons.push({ icon: 'fa fa-cog', title: '', url: '#' });
				this.triggerChange();
			},
			removeIcon: function(icon) {
				this.addedIcons.splice(this.addedIcons.indexOf(icon), 1);
				this.triggerChange();
			},
			updateIcon: function(context) {
				var index = $(context.$el).attr('data-index');
				var value = context.getValue();

				this.$set(this.addedIcons, index, value);
				this.triggerChange();
			},
			updatePosition: function(e, ui) {
				var originalIndex = ui.item.data('index');
				var item = this.addedIcons[originalIndex];

				// Delete the old item
				this.addedIcons.splice(originalIndex, 1);
				this.addedIcons.splice(ui.item.index(), 0, item);

				this.triggerChange();
			},


			getValue: function() {
				return JSON.parse( JSON.stringify( this.addedIcons ) );
			}
		}
	} );



	$( function() {
		$( '.options-control' ).each( function() {
			var elm         = $( this );
			var elmId       = elm.data( 'option' );
			var link        = elm.data( 'customizeid' );
			var data        = elm.attr( 'data-value' );
			var dataDefault = elm.attr( 'data-default' );
			var choices     = elm.data( 'choices' );

			try {
				data = JSON.parse( data );
				
				if ( $.isPlainObject( data ) ) {
					dataDefault = JSON.parse( dataDefault );
					data = $.extend( {}, dataDefault, data );
				}
			}
			catch( e ) {}

			new Vue( {
				el: $( '.options-control-inputs', elm ).get( 0 ),
				data: function() {
					return {
						data: data,
						choices: choices
					}
				},
				methods: {
					triggerChange: function( context ) {
						if ( link ) {
							wp.customize.instance( link ).set(
								context.getValue()
							);
						}
					}
				}
			} );
		} );
	} )
} )( jQuery );
