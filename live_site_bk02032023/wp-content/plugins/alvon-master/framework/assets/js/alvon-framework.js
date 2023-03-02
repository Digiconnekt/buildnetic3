/**
 *
 * -----------------------------------------------------------
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 * Copyright 2015 Codestar <info@codestarlive.com>
 *
 * -----------------------------------------------------------
 *
 */
;(function ( $, window, document, undefined ) {
  'use strict';

  $.ALVONRAMEWORK = $.ALVONRAMEWORK || {};

  // caching selector
  var $alvon_body = $('body');

  // caching variables
  var alvon_is_rtl  = $alvon_body.hasClass('rtl');

  // ======================================================
  // ALVONRAMEWORK TAB NAVIGATION
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_TAB_NAVIGATION = function() {
    return this.each(function() {

      var $this   = $(this),
          $nav    = $this.find('.alvon-nav'),
          $reset  = $this.find('.alvon-reset'),
          $expand = $this.find('.alvon-expand-all');

      $nav.find('ul:first a').on('click', function (e) {

        e.preventDefault();

        var $el     = $(this),
            $next   = $el.next(),
            $target = $el.data('section');

        if( $next.is('ul') ) {

          $next.slideToggle( 'fast' );
          $el.closest('li').toggleClass('alvon-tab-active');

        } else {

          $('#alvon-tab-'+$target).show().siblings().hide();
          $nav.find('a').removeClass('alvon-section-active');
          $el.addClass('alvon-section-active');
          $reset.val($target);

        }

      });

      $expand.on('click', function (e) {
        e.preventDefault();
        $this.find('.alvon-body').toggleClass('alvon-show-all');
        $(this).find('.fa').toggleClass('fa-eye-slash' ).toggleClass('fa-eye');
      });

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK DEPENDENCY
  // ------------------------------------------------------
  $.ALVONRAMEWORK.DEPENDENCY = function( el, param ) {

    // Access to jQuery and DOM versions of element
    var base     = this;
        base.$el = $(el);
        base.el  = el;

    base.init = function () {

      base.ruleset = $.deps.createRuleset();

      // required for shortcode attrs
      var cfg = {
        show: function( el ) {
          el.removeClass('hidden');
        },
        hide: function( el ) {
          el.addClass('hidden');
        },
        log: false,
        checkTargets: false
      };

      if( param !== undefined ) {
        base.depSub();
      } else {
        base.depRoot();
      }

      $.deps.enable( base.$el, base.ruleset, cfg );

    };

    base.depRoot = function() {

      base.$el.each( function() {

        $(this).find('[data-controller]').each( function() {

          var $this       = $(this),
              _controller = $this.data('controller').split('|'),
              _condition  = $this.data('condition').split('|'),
              _value      = $this.data('value').toString().split('|'),
              _rules      = base.ruleset;

          $.each(_controller, function(index, element) {

            var value     = _value[index] || '',
                condition = _condition[index] || _condition[0];

            _rules = _rules.createRule('[data-depend-id="'+ element +'"]', condition, value);
            _rules.include($this);

          });

        });

      });

    };

    base.depSub = function() {

      base.$el.each( function() {

        $(this).find('[data-sub-controller]').each( function() {

          var $this       = $(this),
              _controller = $this.data('sub-controller').split('|'),
              _condition  = $this.data('sub-condition').split('|'),
              _value      = $this.data('sub-value').toString().split('|'),
              _rules      = base.ruleset;

          $.each(_controller, function(index, element) {

            var value     = _value[index] || '',
                condition = _condition[index] || _condition[0];

            _rules = _rules.createRule('[data-sub-depend-id="'+ element +'"]', condition, value);
            _rules.include($this);

          });

        });

      });

    };


    base.init();
  };

  $.fn.ALVONRAMEWORK_DEPENDENCY = function ( param ) {
    return this.each(function () {
      new $.ALVONRAMEWORK.DEPENDENCY( this, param );
    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK CHOSEN
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_CHOSEN = function() {
    return this.each(function() {
      $(this).chosen({allow_single_deselect: true, disable_search_threshold: 15, width: parseFloat( $(this).actual('width') + 25 ) +'px'});
    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK IMAGE SELECTOR
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_IMAGE_SELECTOR = function() {
    return this.each(function() {

      $(this).find('label').on('click', function () {
        $(this).siblings().find('input').prop('checked', false);
      });

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK SORTER
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_SORTER = function() {
    return this.each(function() {

      var $this     = $(this),
          $enabled  = $this.find('.alvon-enabled'),
          $disabled = $this.find('.alvon-disabled');

      $enabled.sortable({
        connectWith: $disabled,
        placeholder: 'ui-sortable-placeholder',
        update: function( event, ui ){

          var $el = ui.item.find('input');

          if( ui.item.parent().hasClass('alvon-enabled') ) {
            $el.attr('name', $el.attr('name').replace('disabled', 'enabled'));
          } else {
            $el.attr('name', $el.attr('name').replace('enabled', 'disabled'));
          }

        }
      });

      // avoid conflict
      $disabled.sortable({
        connectWith: $enabled,
        placeholder: 'ui-sortable-placeholder'
      });

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK MEDIA UPLOADER / UPLOAD
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_UPLOADER = function() {
    return this.each(function() {

      var $this  = $(this),
          $add   = $this.find('.alvon-add'),
          $input = $this.find('input'),
          wp_media_frame;

      $add.on('click', function( e ) {

        e.preventDefault();

        // Check if the `wp.media.gallery` API exists.
        if ( typeof wp === 'undefined' || ! wp.media || ! wp.media.gallery ) {
          return;
        }

        // If the media frame already exists, reopen it.
        if ( wp_media_frame ) {
          wp_media_frame.open();
          return;
        }

        // Create the media frame.
        wp_media_frame = wp.media({

          // Set the title of the modal.
          title: $add.data('frame-title'),

          // Tell the modal to show only images.
          library: {
            type: $add.data('upload-type')
          },

          // Customize the submit button.
          button: {
            // Set the text of the button.
            text: $add.data('insert-title'),
          }

        });

        // When an image is selected, run a callback.
        wp_media_frame.on( 'select', function() {

          // Grab the selected attachment.
          var attachment = wp_media_frame.state().get('selection').first();
          $input.val( attachment.attributes.url ).trigger('change');

        });

        // Finally, open the modal.
        wp_media_frame.open();

      });

    });

  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK IMAGE UPLOADER
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_IMAGE_UPLOADER = function() {
    return this.each(function() {

      var $this    = $(this),
          $add     = $this.find('.alvon-add'),
          $preview = $this.find('.alvon-image-preview'),
          $remove  = $this.find('.alvon-remove'),
          $input   = $this.find('input'),
          $img     = $this.find('img'),
          wp_media_frame;

      $add.on('click', function( e ) {

        e.preventDefault();

        // Check if the `wp.media.gallery` API exists.
        if ( typeof wp === 'undefined' || ! wp.media || ! wp.media.gallery ) {
          return;
        }

        // If the media frame already exists, reopen it.
        if ( wp_media_frame ) {
          wp_media_frame.open();
          return;
        }

        // Create the media frame.
        wp_media_frame = wp.media({
          library: {
            type: 'image'
          }
        });

        // When an image is selected, run a callback.
        wp_media_frame.on( 'select', function() {

          var attachment = wp_media_frame.state().get('selection').first().attributes;
          var thumbnail = ( typeof attachment.sizes !== 'undefined' && typeof attachment.sizes.thumbnail !== 'undefined' ) ? attachment.sizes.thumbnail.url : attachment.url;

          $preview.removeClass('hidden');
          $img.attr('src', thumbnail);
          $input.val( attachment.id ).trigger('change');

        });

        // Finally, open the modal.
        wp_media_frame.open();

      });

      // Remove image
      $remove.on('click', function( e ) {
        e.preventDefault();
        $input.val('').trigger('change');
        $preview.addClass('hidden');
      });

    });

  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK IMAGE GALLERY
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_IMAGE_GALLERY = function() {
    return this.each(function() {

      var $this   = $(this),
          $edit   = $this.find('.alvon-edit'),
          $remove = $this.find('.alvon-remove'),
          $list   = $this.find('ul'),
          $input  = $this.find('input'),
          $img    = $this.find('img'),
          wp_media_frame;

      $this.on('click', '.alvon-add, .alvon-edit', function( e ) {

        var $el   = $(this),
            ids   = $input.val(),
            what  = ( $el.hasClass('alvon-edit') ) ? 'edit' : 'add',
            state = ( what === 'add' && !ids.length ) ? 'gallery' : 'gallery-edit';

        e.preventDefault();

        // Check if the `wp.media.gallery` API exists.
        if ( typeof wp === 'undefined' || ! wp.media || ! wp.media.gallery ) { return; }

         // Open media with state
        if( state === 'gallery' ) {

          wp_media_frame = wp.media({
            library: {
              type: 'image'
            },
            frame: 'post',
            state: 'gallery',
            multiple: true
          });

          wp_media_frame.open();

        } else {

          wp_media_frame = wp.media.gallery.edit( '[gallery ids="'+ ids +'"]' );

          if( what === 'add' ) {
            wp_media_frame.setState('gallery-library');
          }

        }

        // Media Update
        wp_media_frame.on( 'update', function( selection ) {

          $list.empty();

          var selectedIds = selection.models.map( function ( attachment ) {

            var item  = attachment.toJSON();
            var thumb = ( typeof item.sizes.thumbnail !== 'undefined' ) ? item.sizes.thumbnail.url : item.url;

            $list.append('<li><img src="'+ thumb +'"></li>');

            return item.id;

          });

          $input.val( selectedIds.join( ',' ) ).trigger('change');
          $remove.removeClass('hidden');
          $edit.removeClass('hidden');

        });

      });

      // Remove image
      $remove.on('click', function( e ) {
        e.preventDefault();
        $list.empty();
        $input.val('').trigger('change');
        $remove.addClass('hidden');
        $edit.addClass('hidden');
      });

    });

  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK TYPOGRAPHY
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_TYPOGRAPHY = function() {
    return this.each( function() {

      var typography      = $(this),
          family_select   = typography.find('.alvon-typo-family'),
          variants_select = typography.find('.alvon-typo-variant'),
          typography_type = typography.find('.alvon-typo-font');

      family_select.on('change', function() {

        var _this     = $(this),
            _type     = _this.find(':selected').data('type') || 'custom',
            _variants = _this.find(':selected').data('variants');

        if( variants_select.length ) {

          variants_select.find('option').remove();

          $.each( _variants.split('|'), function( key, text ) {
            variants_select.append('<option value="'+ text +'">'+ text +'</option>');
          });

          variants_select.find('option[value="regular"]').attr('selected', 'selected').trigger('chosen:updated');

        }

        typography_type.val(_type);

      });

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK GROUP
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_GROUP = function() {
    return this.each(function() {

      var _this           = $(this),
          field_groups    = _this.find('.alvon-groups'),
          accordion_group = _this.find('.alvon-accordion'),
          clone_group     = _this.find('.alvon-group:first').clone();

      if ( accordion_group.length ) {
        accordion_group.accordion({
          header: '.alvon-group-title',
          collapsible : true,
          active: false,
          animate: 250,
          heightStyle: 'content',
          icons: {
            'header': 'dashicons dashicons-arrow-right',
            'activeHeader': 'dashicons dashicons-arrow-down'
          },
          beforeActivate: function( event, ui ) {
            $(ui.newPanel).ALVONRAMEWORK_DEPENDENCY( 'sub' );
          }
        });
      }

      field_groups.sortable({
        axis: 'y',
        handle: '.alvon-group-title',
        helper: 'original',
        cursor: 'move',
        placeholder: 'widget-placeholder',
        start: function( event, ui ) {
          var inside = ui.item.children('.alvon-group-content');
          if ( inside.css('display') === 'block' ) {
            inside.hide();
            field_groups.sortable('refreshPositions');
          }
        },
        stop: function( event, ui ) {
          ui.item.children( '.alvon-group-title' ).triggerHandler( 'focusout' );
          accordion_group.accordion({ active:false });
        }
      });

      var i = 0;
      $('.alvon-add-group', _this).on('click', function( e ) {

        e.preventDefault();

        clone_group.find('input, select, textarea').each( function () {
          this.name = this.name.replace(/\[(\d+)\]/,function(string, id) {
            return '[' + (parseInt(id,10)+1) + ']';
          });
        });

        var cloned = clone_group.clone().removeClass('hidden');
        field_groups.append(cloned);

        if ( accordion_group.length ) {
          field_groups.accordion('refresh');
          field_groups.accordion({ active: cloned.index() });
        }

        field_groups.find('input, select, textarea').each( function () {
          this.name = this.name.replace('[_nonce]', '');
        });

        // run all field plugins
        cloned.ALVONRAMEWORK_DEPENDENCY( 'sub' );
        cloned.ALVONRAMEWORK_RELOAD_PLUGINS();

        i++;

      });

      field_groups.on('click', '.alvon-remove-group', function(e) {
        e.preventDefault();
        $(this).closest('.alvon-group').remove();
      });

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK RESET CONFIRM
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_CONFIRM = function() {
    return this.each( function() {
      $(this).on('click', function( e ) {
        if ( !confirm('Are you sure?') ) {
          e.preventDefault();
        }
      });
    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK SAVE OPTIONS
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_SAVE = function() {
    return this.each( function() {

      var $this  = $(this),
          $text  = $this.data('save'),
          $value = $this.val(),
          $ajax  = $('#alvon-save-ajax');

      $(document).on('keydown', function(event) {
        if (event.ctrlKey || event.metaKey) {
          if( String.fromCharCode(event.which).toLowerCase() === 's' ) {
            event.preventDefault();
            $this.trigger('click');
          }
        }
      });

      $this.on('click', function ( e ) {

        if( $ajax.length ) {

          if( typeof tinyMCE === 'object' ) {
            tinyMCE.triggerSave();
          }

          $this.prop('disabled', true).attr('value', $text);

          var serializedOptions = $('#csframework_form').serialize();

          $.post( 'options.php', serializedOptions ).error( function() {
            alert('Error, Please try again.');
          }).success( function() {
            $this.prop('disabled', false).attr('value', $value);
            $ajax.hide().fadeIn().delay(250).fadeOut();
          });

          e.preventDefault();

        } else {

          $this.addClass('disabled').attr('value', $text);

        }

      });

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK SAVE TAXONOMY CLEAR FORM ELEMENTS
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_TAXONOMY = function() {
    return this.each( function() {

      var $this   = $(this),
          $parent = $this.parent();

      // Only works in add-tag form
      if( $parent.attr('id') === 'addtag' ) {

        var $submit  = $parent.find('#submit'),
            $name    = $parent.find('#tag-name'),
            $wrap    = $parent.find('.alvon-framework'),
            $clone   = $wrap.find('.alvon-element').clone(),
            $list    = $('#the-list'),
            flooding = false;

        $submit.on( 'click', function() {

          if( !flooding ) {

            $list.on( 'DOMNodeInserted', function() {

              if( flooding ) {

                $wrap.empty();
                $wrap.html( $clone );
                $clone = $clone.clone();

                $wrap.ALVONRAMEWORK_RELOAD_PLUGINS();
                $wrap.ALVONRAMEWORK_DEPENDENCY();

                flooding = false;

              }

            });

          }

          flooding = true;

        });

      }

    });
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK UI DIALOG OVERLAY HELPER
  // ------------------------------------------------------
  if( typeof $.widget !== 'undefined' && typeof $.ui !== 'undefined' && typeof $.ui.dialog !== 'undefined' ) {
    $.widget( 'ui.dialog', $.ui.dialog, {
        _createOverlay: function() {
          this._super();
          if ( !this.options.modal ) { return; }
          this._on(this.overlay, {click: 'close'});
        }
      }
    );
  }

  // ======================================================
  // ALVONRAMEWORK ICONS MANAGER
  // ------------------------------------------------------
  $.ALVONRAMEWORK.ICONS_MANAGER = function() {

    var base   = this,
        onload = true,
        $parent;

    base.init = function () {

      $alvon_body.on('click', '.alvon-icon-add', function( e ) {

        e.preventDefault();

        var $this   = $(this),
            $dialog = $('#alvon-icon-dialog'),
            $load   = $dialog.find('.alvon-dialog-load'),
            $select = $dialog.find('.alvon-dialog-select'),
            $insert = $dialog.find('.alvon-dialog-insert'),
            $search = $dialog.find('.alvon-icon-search');

        // set parent
        $parent = $this.closest('.alvon-icon-select');

        // open dialog
        $dialog.dialog({
          width: 850,
          height: 700,
          modal: true,
          resizable: false,
          closeOnEscape: true,
          position: {my: 'center', at: 'center', of: window},
          open: function() {

            // fix scrolling
            $alvon_body.addClass('alvon-icon-scrolling');

            // fix button for VC
            $('.ui-dialog-titlebar-close').addClass('ui-button');

            // set viewpoint
            $(window).on('resize', function () {

              var height      = $(window).height(),
                  load_height = Math.floor( height - 237 ),
                  set_height  = Math.floor( height - 125 );

              $dialog.dialog('option', 'height', set_height).parent().css('max-height', set_height);
              $dialog.css('overflow', 'auto');
              $load.css( 'height', load_height );

            }).resize();

          },
          close: function() {
            $alvon_body.removeClass('alvon-icon-scrolling');
          }
        });

        // load icons
        if( onload ) {

          $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
              action: 'alvon-get-icons'
            },
            success: function( content ) {

              $load.html( content );
              onload = false;

              $load.on('click', 'a', function( e ) {

                e.preventDefault();

                var icon = $(this).data('alvon-icon');

                $parent.find('i').removeAttr('class').addClass(icon);
                $parent.find('input').val(icon).trigger('change');
                $parent.find('.alvon-icon-preview').removeClass('hidden');
                $parent.find('.alvon-icon-remove').removeClass('hidden');
                $dialog.dialog('close');

              });

              $search.keyup( function(){

                var value  = $(this).val(),
                    $icons = $load.find('a');

                $icons.each(function() {

                  var $ico = $(this);

                  if ( $ico.data('alvon-icon').search( new RegExp( value, 'i' ) ) < 0 ) {
                    $ico.hide();
                  } else {
                    $ico.show();
                  }

                });

              });

              $load.find('.alvon-icon-tooltip').cstooltip({html:true, placement:'top', container:'body'});

            }
          });

        }

      });

      $alvon_body.on('click', '.alvon-icon-remove', function( e ) {

        e.preventDefault();

        var $this   = $(this),
            $parent = $this.closest('.alvon-icon-select');

        $parent.find('.alvon-icon-preview').addClass('hidden');
        $parent.find('input').val('').trigger('change');
        $this.addClass('hidden');

      });

    };

    // run initializer
    base.init();
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK SHORTCODE MANAGER
  // ------------------------------------------------------
  $.ALVONRAMEWORK.SHORTCODE_MANAGER = function() {

    var base = this, deploy_atts;

    base.init = function () {

      var $dialog          = $('#alvon-shortcode-dialog'),
          $insert          = $dialog.find('.alvon-dialog-insert'),
          $shortcodeload   = $dialog.find('.alvon-dialog-load'),
          $selector        = $dialog.find('.alvon-dialog-select'),
          shortcode_target = false,
          shortcode_name,
          shortcode_view,
          shortcode_clone,
          $shortcode_button,
          editor_id;

      $alvon_body.on('click', '.alvon-shortcode', function( e ) {

        e.preventDefault();

        // init chosen
        $selector.ALVONRAMEWORK_CHOSEN();

        $shortcode_button = $(this);
        shortcode_target  = $shortcode_button.hasClass('alvon-shortcode-textarea');
        editor_id         = $shortcode_button.data('editor-id');

        $dialog.dialog({
          width: 850,
          height: 700,
          modal: true,
          resizable: false,
          closeOnEscape: true,
          position: {my: 'center', at: 'center', of: window},
          open: function() {

            // fix scrolling
            $alvon_body.addClass('alvon-shortcode-scrolling');

            // fix button for VC
            $('.ui-dialog-titlebar-close').addClass('ui-button');

            // set viewpoint
            $(window).on('resize', function () {

              var height      = $(window).height(),
                  load_height = Math.floor( height - 281 ),
                  set_height  = Math.floor( height - 125 );

              $dialog.dialog('option', 'height', set_height).parent().css('max-height', set_height);
              $dialog.css('overflow', 'auto');
              $shortcodeload.css( 'height', load_height );

            }).resize();

          },
          close: function() {
            shortcode_target = false;
            $alvon_body.removeClass('alvon-shortcode-scrolling');
          }
        });

      });

      $selector.on( 'change', function() {

        var $elem_this     = $(this);
            shortcode_name = $elem_this.val();
            shortcode_view = $elem_this.find(':selected').data('view');

        // check val
        if( shortcode_name.length ){

          $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
              action: 'alvon-get-shortcode',
              shortcode: shortcode_name
            },
            success: function( content ) {

              $shortcodeload.html( content );
              $insert.parent().removeClass('hidden');

              shortcode_clone = $('.alvon-shortcode-clone', $dialog).clone();

              $shortcodeload.ALVONRAMEWORK_DEPENDENCY();
              $shortcodeload.ALVONRAMEWORK_DEPENDENCY('sub');
              $shortcodeload.ALVONRAMEWORK_RELOAD_PLUGINS();

            }
          });

        } else {

          $insert.parent().addClass('hidden');
          $shortcodeload.html('');

        }

      });

      $insert.on('click', function ( e ) {

        e.preventDefault();

        var send_to_shortcode = '',
            ruleAttr          = 'data-atts',
            cloneAttr         = 'data-clone-atts',
            cloneID           = 'data-clone-id';

        switch ( shortcode_view ){

          case 'contents':

            $('[' + ruleAttr + ']', '.alvon-dialog-load').each( function() {
              var _this = $(this), _atts = _this.data('atts');
              send_to_shortcode += '['+_atts+']';
              send_to_shortcode += _this.val();
              send_to_shortcode += '[/'+_atts+']';
            });

          break;

          case 'clone':

            send_to_shortcode += '[' + shortcode_name; // begin: main-shortcode

            // main-shortcode attributes
            $('[' + ruleAttr + ']', '.alvon-dialog-load .alvon-element:not(.hidden)').each( function() {
              var _this_main = $(this), _this_main_atts = _this_main.data('atts');
              send_to_shortcode += base.validate_atts( _this_main_atts, _this_main );  // validate empty atts
            });

            send_to_shortcode += ']'; // end: main-shortcode attributes

            // multiple-shortcode each
            $('[' + cloneID + ']', '.alvon-dialog-load').each( function() {

                var _this_clone = $(this),
                    _clone_id   = _this_clone.data('clone-id');

                send_to_shortcode += '[' + _clone_id; // begin: multiple-shortcode

                // multiple-shortcode attributes
                $('[' + cloneAttr + ']', _this_clone.find('.alvon-element').not('.hidden') ).each( function() {

                  var _this_multiple = $(this), _atts_multiple = _this_multiple.data('clone-atts');

                  // is not attr content, add shortcode attribute else write content and close shortcode tag
                  if( _atts_multiple !== 'content' ){
                    send_to_shortcode += base.validate_atts( _atts_multiple, _this_multiple ); // validate empty atts
                  }else if ( _atts_multiple === 'content' ){
                    send_to_shortcode += ']';
                    send_to_shortcode += _this_multiple.val();
                    send_to_shortcode += '[/'+_clone_id+'';
                  }
                });

                send_to_shortcode += ']'; // end: multiple-shortcode

            });

            send_to_shortcode += '[/' + shortcode_name + ']'; // end: main-shortcode

          break;

          case 'clone_duplicate':

            // multiple-shortcode each
            $('[' + cloneID + ']', '.alvon-dialog-load').each( function() {

              var _this_clone = $(this),
                  _clone_id   = _this_clone.data('clone-id');

              send_to_shortcode += '[' + _clone_id; // begin: multiple-shortcode

              // multiple-shortcode attributes
              $('[' + cloneAttr + ']', _this_clone.find('.alvon-element').not('.hidden') ).each( function() {

                var _this_multiple = $(this),
                    _atts_multiple = _this_multiple.data('clone-atts');


                // is not attr content, add shortcode attribute else write content and close shortcode tag
                if( _atts_multiple !== 'content' ){
                  send_to_shortcode += base.validate_atts( _atts_multiple, _this_multiple ); // validate empty atts
                }else if ( _atts_multiple === 'content' ){
                  send_to_shortcode += ']';
                  send_to_shortcode += _this_multiple.val();
                  send_to_shortcode += '[/'+_clone_id+'';
                }
              });

              send_to_shortcode += ']'; // end: multiple-shortcode

            });

          break;

          default:

            send_to_shortcode += '[' + shortcode_name;

            $('[' + ruleAttr + ']', '.alvon-dialog-load .alvon-element:not(.hidden)').each( function() {

              var _this = $(this), _atts = _this.data('atts');

              // is not attr content, add shortcode attribute else write content and close shortcode tag
              if( _atts !== 'content' ){
                send_to_shortcode += base.validate_atts( _atts, _this ); // validate empty atts
              }else if ( _atts === 'content' ){
                send_to_shortcode += ']';
                send_to_shortcode += _this.val();
                send_to_shortcode += '[/'+shortcode_name+'';
              }

            });

            send_to_shortcode += ']';

          break;

        }

        if( shortcode_target ) {
          var $textarea = $shortcode_button.next();
          $textarea.val( base.insertAtChars( $textarea, send_to_shortcode ) ).trigger('change');
        } else {
          base.send_to_editor( send_to_shortcode, editor_id );
        }

        deploy_atts = null;

        $dialog.dialog( 'close' );

      });

      // cloner button
      var cloned = 0;
      $dialog.on('click', '#shortcode-clone-button', function( e ) {

        e.preventDefault();

        // clone from cache
        var cloned_el = shortcode_clone.clone().hide();

        cloned_el.find('input:radio').attr('name', '_nonce_' + cloned);

        $('.alvon-shortcode-clone:last').after( cloned_el );

        // add - remove effects
        cloned_el.slideDown(100);

        cloned_el.find('.alvon-remove-clone').show().on('click', function( e ) {

          cloned_el.slideUp(100, function(){ cloned_el.remove(); });
          e.preventDefault();

        });

        // reloadPlugins
        cloned_el.ALVONRAMEWORK_DEPENDENCY('sub');
        cloned_el.ALVONRAMEWORK_RELOAD_PLUGINS();
        cloned++;

      });

    };

    base.validate_atts = function( _atts, _this ) {

      var el_value;

      if( _this.data('check') !== undefined && deploy_atts === _atts ) { return ''; }

      deploy_atts = _atts;

      if ( _this.closest('.pseudo-field').hasClass('hidden') === true ) { return ''; }
      if ( _this.hasClass('pseudo') === true ) { return ''; }

      if( _this.is(':checkbox') || _this.is(':radio') ) {
        el_value = _this.is(':checked') ? _this.val() : '';
      } else {
        el_value = _this.val();
      }

      if( _this.data('check') !== undefined ) {
        el_value = _this.closest('.alvon-element').find('input:checked').map( function() {
         return $(this).val();
        }).get();
      }

      if( el_value !== null && el_value !== undefined && el_value !== '' && el_value.length !== 0 ) {
        return ' ' + _atts + '="' + el_value + '"';
      }

      return '';

    };

    base.insertAtChars = function( _this, currentValue ) {

      var obj = ( typeof _this[0].name !== 'undefined' ) ? _this[0] : _this;

      if ( obj.value.length && typeof obj.selectionStart !== 'undefined' ) {
        obj.focus();
        return obj.value.substring( 0, obj.selectionStart ) + currentValue + obj.value.substring( obj.selectionEnd, obj.value.length );
      } else {
        obj.focus();
        return currentValue;
      }

    };

    base.send_to_editor = function( html, editor_id ) {

      var tinymce_editor;

      if ( typeof tinymce !== 'undefined' ) {
        tinymce_editor = tinymce.get( editor_id );
      }

      if ( tinymce_editor && !tinymce_editor.isHidden() ) {
        tinymce_editor.execCommand( 'mceInsertContent', false, html );
      } else {
        var $editor = $('#'+editor_id);
        $editor.val( base.insertAtChars( $editor, html ) ).trigger('change');
      }

    };

    // run initializer
    base.init();
  };
  // ======================================================

  // ======================================================
  // ALVONRAMEWORK COLORPICKER
  // ------------------------------------------------------
  if( typeof Color === 'function' ) {

    // adding alpha support for Automattic Color.js toString function.
    Color.fn.toString = function () {

      // check for alpha
      if ( this._alpha < 1 ) {
        return this.toCSS('rgba', this._alpha).replace(/\s+/g, '');
      }

      var hex = parseInt( this._color, 10 ).toString( 16 );

      if ( this.error ) { return ''; }

      // maybe left pad it
      if ( hex.length < 6 ) {
        for (var i = 6 - hex.length - 1; i >= 0; i--) {
          hex = '0' + hex;
        }
      }

      return '#' + hex;

    };

  }

  $.ALVONRAMEWORK.PARSE_COLOR_VALUE = function( val ) {

    var value = val.replace(/\s+/g, ''),
        alpha = ( value.indexOf('rgba') !== -1 ) ? parseFloat( value.replace(/^.*,(.+)\)/, '$1') * 100 ) : 100,
        rgba  = ( alpha < 100 ) ? true : false;

    return { value: value, alpha: alpha, rgba: rgba };

  };

  $.fn.ALVONRAMEWORK_COLORPICKER = function() {

    return this.each(function() {

      var $this = $(this);

      // check for rgba enabled/disable
      if( $this.data('rgba') !== false ) {

        // parse value
        var picker = $.ALVONRAMEWORK.PARSE_COLOR_VALUE( $this.val() );

        // wpColorPicker core
        $this.wpColorPicker({

          // wpColorPicker: clear
          clear: function() {
            $this.trigger('keyup');
          },

          // wpColorPicker: change
          change: function( event, ui ) {

            var ui_color_value = ui.color.toString();

            // update checkerboard background color
            $this.closest('.wp-picker-container').find('.alvon-alpha-slider-offset').css('background-color', ui_color_value);
            $this.val(ui_color_value).trigger('change');

          },

          // wpColorPicker: create
          create: function() {

            // set variables for alpha slider
            var a8cIris       = $this.data('a8cIris'),
                $container    = $this.closest('.wp-picker-container'),

                // appending alpha wrapper
                $alpha_wrap   = $('<div class="alvon-alpha-wrap">' +
                                  '<div class="alvon-alpha-slider"></div>' +
                                  '<div class="alvon-alpha-slider-offset"></div>' +
                                  '<div class="alvon-alpha-text"></div>' +
                                  '</div>').appendTo( $container.find('.wp-picker-holder') ),

                $alpha_slider = $alpha_wrap.find('.alvon-alpha-slider'),
                $alpha_text   = $alpha_wrap.find('.alvon-alpha-text'),
                $alpha_offset = $alpha_wrap.find('.alvon-alpha-slider-offset');

            // alpha slider
            $alpha_slider.slider({

              // slider: slide
              slide: function( event, ui ) {

                var slide_value = parseFloat( ui.value / 100 );

                // update iris data alpha && wpColorPicker color option && alpha text
                a8cIris._color._alpha = slide_value;
                $this.wpColorPicker( 'color', a8cIris._color.toString() );
                $alpha_text.text( ( slide_value < 1 ? slide_value : '' ) );

              },

              // slider: create
              create: function() {

                var slide_value = parseFloat( picker.alpha / 100 ),
                    alpha_text_value = slide_value < 1 ? slide_value : '';

                // update alpha text && checkerboard background color
                $alpha_text.text(alpha_text_value);
                $alpha_offset.css('background-color', picker.value);

                // wpColorPicker clear for update iris data alpha && alpha text && slider color option
                $container.on('click', '.wp-picker-clear', function() {

                  a8cIris._color._alpha = 1;
                  $alpha_text.text('').trigger('change');
                  $alpha_slider.slider('option', 'value', 100).trigger('slide');

                });

                // wpColorPicker default button for update iris data alpha && alpha text && slider color option
                $container.on('click', '.wp-picker-default', function() {

                  var default_picker = $.ALVONRAMEWORK.PARSE_COLOR_VALUE( $this.data('default-color') ),
                      default_value  = parseFloat( default_picker.alpha / 100 ),
                      default_text   = default_value < 1 ? default_value : '';

                  a8cIris._color._alpha = default_value;
                  $alpha_text.text(default_text);
                  $alpha_slider.slider('option', 'value', default_picker.alpha).trigger('slide');

                });

                // show alpha wrapper on click color picker button
                $container.on('click', '.wp-color-result', function() {
                  $alpha_wrap.toggle();
                });

                // hide alpha wrapper on click body
                $alvon_body.on( 'click.wpcolorpicker', function() {
                  $alpha_wrap.hide();
                });

              },

              // slider: options
              value: picker.alpha,
              step: 1,
              min: 1,
              max: 100

            });
          }

        });

      } else {

        // wpColorPicker default picker
        $this.wpColorPicker({
          clear: function() {
            $this.trigger('keyup');
          },
          change: function( event, ui ) {
            $this.val(ui.color.toString()).trigger('change');
          }
        });

      }

    });

  };
  // ======================================================

  // ======================================================
  // ON WIDGET-ADDED RELOAD FRAMEWORK PLUGINS
  // ------------------------------------------------------
  $.ALVONRAMEWORK.WIDGET_RELOAD_PLUGINS = function() {
    $(document).on('widget-added widget-updated', function( event, $widget ) {
      $widget.ALVONRAMEWORK_RELOAD_PLUGINS();
      $widget.ALVONRAMEWORK_DEPENDENCY();
    });
  };

  // ======================================================
  // TOOLTIP HELPER
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_TOOLTIP = function() {
    return this.each(function() {
      var placement = ( alvon_is_rtl ) ? 'right' : 'left';
      $(this).cstooltip({html:true, placement:placement, container:'body'});
    });
  };

  // ======================================================
  // RELOAD FRAMEWORK PLUGINS
  // ------------------------------------------------------
  $.fn.ALVONRAMEWORK_RELOAD_PLUGINS = function() {
    return this.each(function() {
      $('.chosen', this).ALVONRAMEWORK_CHOSEN();
      $('.alvon-field-image-select', this).ALVONRAMEWORK_IMAGE_SELECTOR();
      $('.alvon-field-image', this).ALVONRAMEWORK_IMAGE_UPLOADER();
      $('.alvon-field-gallery', this).ALVONRAMEWORK_IMAGE_GALLERY();
      $('.alvon-field-sorter', this).ALVONRAMEWORK_SORTER();
      $('.alvon-field-upload', this).ALVONRAMEWORK_UPLOADER();
      $('.alvon-field-typography', this).ALVONRAMEWORK_TYPOGRAPHY();
      $('.alvon-field-color-picker', this).ALVONRAMEWORK_COLORPICKER();
      $('.alvon-help', this).ALVONRAMEWORK_TOOLTIP();
    });
  };

  // ======================================================
  // JQUERY DOCUMENT READY
  // ------------------------------------------------------
  $(document).ready( function() {
    $('.alvon-framework').ALVONRAMEWORK_TAB_NAVIGATION();
    $('.alvon-reset-confirm, .alvon-import-backup').ALVONRAMEWORK_CONFIRM();
    $('.alvon-content, .wp-customizer, .widget-content, .alvon-taxonomy').ALVONRAMEWORK_DEPENDENCY();
    $('.alvon-field-group').ALVONRAMEWORK_GROUP();
    $('.alvon-save').ALVONRAMEWORK_SAVE();
    $('.alvon-taxonomy').ALVONRAMEWORK_TAXONOMY();
    $('.alvon-framework, #widgets-right').ALVONRAMEWORK_RELOAD_PLUGINS();
    $.ALVONRAMEWORK.ICONS_MANAGER();
    $.ALVONRAMEWORK.SHORTCODE_MANAGER();
    $.ALVONRAMEWORK.WIDGET_RELOAD_PLUGINS();
  });

})( jQuery, window, document );
