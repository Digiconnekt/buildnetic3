<?php
  function alvon_custom_styles(){
    if(function_exists( 'alvon_framework_init' ) ) {
      
      /* Body Fonts */
      $body_fonts = alvon_get_option('alvon_body_font');
      if (!empty($body_fonts)) {
        $body_font = $body_fonts['family'];
      } else {
        $body_font = 'Karla';
      }

      /* Heading Fonts */
      $alvon_heading_font = alvon_get_option('alvon_heading_font');
      if (!empty($alvon_heading_font)) {
        $heading_font = $alvon_heading_font['family'];
      } else {
        $heading_font = 'Nunito';
      }
      
      /* Color Variation theme options */
      $base_color = alvon_get_customize_option( 'alvon_base_color' );
      $gradient_start_color = alvon_get_customize_option( 'gradient_start_color' );
      $gradient_end_color = alvon_get_customize_option( 'gradient_end_color' );

      $preloader_color = alvon_get_option( 'alvon_preloader_color' );
      $alvon_breadcrumb_overlay = alvon_get_option( 'alvon_breadcrumb_overlay' );
      $breatcrumb_bg_img_opacity = alvon_get_option( 'breatcrumb_bg_img_opacity' );
      if (!empty($breatcrumb_bg_img_opacity)) {
        $breatcrumb_bg_img_opacity = $breatcrumb_bg_img_opacity;
      } else {
        $breatcrumb_bg_img_opacity = '0.9';
      }

      $body_fonts_size = alvon_get_option('alvon_body_font_size');

      $bg_img_id = alvon_get_option('footer_bg2');
      $attachment = wp_get_attachment_image_src( $bg_img_id, 'full' );
      $bg_img    = ($attachment) ? $attachment[0] : $bg_img_id;

      $alvon_logo_custom_size = alvon_get_option('alvon_logo_custom_size');
      if (!empty($alvon_logo_custom_size)) {
        $alvon_logo_custom_size = $alvon_logo_custom_size;
      } else {
        $alvon_logo_custom_size = '180px';
      }

      $alvon_scrollup_bg_color = alvon_get_option( 'alvon_scrollup_bg_color' );
      if (!empty($alvon_scrollup_bg_color)) {
        $alvon_scrollup_bg_color = $alvon_scrollup_bg_color;
      } else {
        $alvon_scrollup_bg_color = '#7DBA2F';
      }
      $alvon_scrollup_font_color = alvon_get_option( 'alvon_scrollup_font_color' );
      if (!empty($alvon_scrollup_font_color)) {
        $alvon_scrollup_font_color = $alvon_scrollup_font_color;
      } else {
        $alvon_scrollup_font_color = '#ffffff';
      }

      $alvon_all_default_color = alvon_get_option( 'alvon_all_default_color' );
      if (!empty($alvon_all_default_color)) {
        $alvon_all_default_color = $alvon_all_default_color;
      } else {
        $alvon_all_default_color = '#00aeff';
      } 

      $alvon_all_default_color_h3 = alvon_get_option( 'alvon_all_default_color_h3' );
      if (!empty($alvon_all_default_color_h3)) {
        $alvon_all_default_color_h3 = $alvon_all_default_color_h3;
      } else {
        $alvon_all_default_color_h3 = '#ff5050';
      }

      // Typography Settings
      //======================================================================================================================

      echo "<style>

        body {
          font-family: {$body_font}, sans-serif;
        }
        .logo {
          width: $alvon_logo_custom_size;
        }
        h1, h2, h3, h4, h5, h6 {
          font-family: {$heading_font}, sans-serif;
        }

        .s-footer-bg::before {
          background-image: url($bg_img);
        }

        .breadcrumb_height:before {
          background-color: $alvon_breadcrumb_overlay;
          opacity: $breatcrumb_bg_img_opacity;
        }
        section.vc_section.area-ml .vc_row.wpb_row.vc_row-fluid.vc_row-no-padding,
        section.vc_section.area-ml {
          margin-left: 80px;
        }
        #scroller {
          color: $alvon_scrollup_font_color;
          background-color: $alvon_scrollup_bg_color;
        }
        
        .comment-text .avatar-name .comment-reply-link:hover::before,
        .comment-text .avatar-name a.comment-reply-link::before,
        .widget_recent_comments ul li:hover::before, 
        .widget_recent_entries ul li:hover::before, 
        .widget_categories ul li:hover::before, 
        .widget_nav_menu ul li:hover::before, 
        .widget_archive ul li:hover::before, 
        .widget_pages ul li:hover::before, 
        .widget_meta ul li:hover::before,
        .benifits-video .popup-video,
        .widget-title span::before, 
        .widget-title span::after,
        .widget_tag_cloud a:hover,
        .header-btn .nice-select,
        .section-title h2 small,
        .post-tag ul li a:hover,
        .services-icon::before,
        .formcomment-box .btn,
        .team-social a:hover,
        .sv-img .popup-video,
        .btn.portfolio-d-btn,
        .widget-title span,
        .filed-button .btn,
        .contact-form .btn,
        .fwc-form .btn,
        .btn::before,
        .cta-circle,
        .team-btn a {
          background: $alvon_all_default_color;
        }
        .comment-text .avatar-name a.comment-reply-link:hover,
        .widget_recent_comments ul li:hover::before, 
        .widget_recent_entries ul li:hover::before, 
        .posts-navigation .post-next a h4:hover,
        .widget_categories ul li:hover::before, 
        .widget_nav_menu ul li:hover::before, 
        .widget_archive ul li:hover::before, 
        .widget_pages ul li:hover::before, 
        .widget_meta ul li:hover::before,
        .widget_tag_cloud a:hover,
        .post-tag ul li a:hover,
        .ws-input input:focus,
        .formcomment-box .btn,
        .team-social a:hover,
        .btn.portfolio-d-btn,
        .filed-button .btn,
        .contact-form .btn,
        .fwc-form .btn,
        .btn:hover {
          border-color: $alvon_all_default_color;
        }
        .posts-navigation .post-previous a h4:hover,
        .posts-navigation .post-next a h4:hover,
        .inner-single-post .post-meta ul li i,
        .widget_categories ul li a:hover,
        .comment-text .avatar-name span,
        .single-team:hover .team-btn a,
        .menu-area ul li .submenu li a,
        .comment-form .comment-field i,
        .services-content h3 a:hover,
        .formcomment-box .btn:hover,
        .iabout-content h4 a:hover,
        .p-details-content > span,
        .faq-widget .faq-title h5,
        .post-content h4:hover a,
        .contact-form .btn:hover,
        .footer-social a:hover,
        .product-share a:hover,
        .fw-link ul li a:hover,
        .fwc-form .btn:hover,
        .team-content span,
        .post-meta ul li a,
        .fcta-box::before,
        .comment-text p a,
        p.logged-in-as a,
        .contact-info a,
        .fwt-icon i,
        .btn i {
          color: $alvon_all_default_color;
        }
        .ss-skill .skill-content a:hover {
          color: $alvon_all_default_color !important;
        }
        
        .s-menu-area ul li.menu-item-has-children:hover a::before,
        .t-post-content .post-meta ul li a,
        .t-services-content h5:hover a,
        .s-menu-area ul > li:hover a,
        .t-post-content h4:hover a,
        .t-slider-img .popup-video,
        .t-post-content h4:hover a,
        .pricing-head > span {
          color: $alvon_all_default_color_h3;
        }
        .pricing-tabs .nav-tabs .nav-item.show .nav-link, 
        .nav-tabs .nav-link.active {
          background-color: $alvon_all_default_color_h3;
        }
        .pricing-box.active .pricing-btn .btn,
        .project-active .slick-arrow:hover,
        .s-header-btn .search-btn:hover,
        .t-services-content h5::before,
        .exp-content .btn::before,
        .pricing-btn .btn:hover,
        .s-header-btn .btn,
        .t-slider-btn .btn,
        .t-footer-social a,
        .area-ml {
          background: $alvon_all_default_color_h3;
        }
        .pricing-box.active .pricing-btn .btn,
        .pricing-btn .btn:hover,
        .s-header-btn .btn,
        .t-slider-btn .btn,
        .project-active .slick-arrow:hover {
          border-color: $alvon_all_default_color_h3;
        }
        .pricing-tabs {
          border: 2px solid $alvon_all_default_color_h3;
        }

      </style>";
    } 
  }
  add_filter('wp_head', 'alvon_custom_styles');
?>