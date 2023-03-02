<?php
/*<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>*/
/* - Footer Widget
/*<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>*/


function alvon_custom_widgets_init() {

  register_sidebar(array(
    'name'          => esc_html__('Portfolio Widgets', 'alvon'),
    'id'            => 'portfolio-sidebar',
    'description'   => esc_html__('This area will be shown on Portfolio details page sidebar.', 'alvon'),
    'before_widget' => '<div id="%1$s" class="widget-wrap %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="sidebar-title"><h4>',
    'after_title'   => '</h4></div>',
  ));
  register_sidebar(array(
    'name'          => esc_html__('Service Widgets', 'alvon'),
    'id'            => 'service-sidebar',
    'description'   => esc_html__('Widgets in this area will be shown on service page sidebar.', 'alvon'), 
    'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="siderbar-title mb-20"><h5>',
    'after_title'   => '</h5></div>',
  ));
  register_sidebar(array(
    'name'          => esc_html__('Faq Widgets', 'alvon'),
    'id'            => 'faq-sidebar',
    'description'   => esc_html__('Widgets in this area will be shown on service page sidebar.', 'alvon'), 
    'before_widget' => '<div id="%1$s" class="faq-widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="faq-title mb-20"><h5>',
    'after_title'   => '</h5></div>',
  ));

}
add_action( 'widgets_init', 'alvon_custom_widgets_init' );

add_action( 'init', 'alvon_widgets_init', 0 );


// Add a custom class in every widget
function kc_widget_form_extend( $instance, $widget ) {
  $row = '';
  if ( !isset($instance['classes']) )
    $instance['classes'] = null;   
    $row .= "<div class=\"alvon-title\"><h4>Custom Class:</h4></div>\t<input type='text' name='widget-{$widget->id_base}[{$widget->number}][classes]' id='widget-{$widget->id_base}-{$widget->number}-classes' class='widefat' value='{$instance['classes']}'/>\n";
    $row .= "</p>\n";
    echo $row;
    return $instance;
}
add_filter('widget_form_callback', 'kc_widget_form_extend', 10, 2);function kc_widget_update( $instance, $new_instance ) {
  $instance['classes'] = $new_instance['classes'];
  return $instance;
}
add_filter( 'widget_update_callback', 'kc_widget_update', 10, 2 );
function kc_dynamic_sidebar_params( $params ) {
    global $wp_registered_widgets;
    $widget_id    = $params[0]['widget_id'];
    $widget_obj   = $wp_registered_widgets[$widget_id];
    $widget_opt   = get_option($widget_obj['callback'][0]->option_name);
    $widget_num   = $widget_obj['params'][0]['number'];    
    if ( isset($widget_opt[$widget_num]['classes']) && !empty($widget_opt[$widget_num]['classes']) )
      $params[0]['before_widget'] = preg_replace( '/class="/', "class=\"{$widget_opt[$widget_num]['classes']} ", $params[0]['before_widget'], 1 );
    return $params;
}
add_filter( 'dynamic_sidebar_params', 'kc_dynamic_sidebar_params' );




/*============================================================================================================================*/
/* - About Widget
/*============================================================================================================================*/ 
if( ! class_exists( 'ALVON_about_Widget' ) ) {

    //Footer About Widget
    class ALVON_about_Widget extends WP_Widget {

        /*=====================================================
        // = Widget Register
        /*=====================================================*/
        function __construct() {

          $widget_ops     = array(
            'classname'   => 'alvon_about_widget',
            'description' => __( 'About Widget.', 'alvon' )
          );
          parent::__construct( 'address_widget', __( 'A::1 About Widget', 'alvon' ), $widget_ops );
        }

        /*=====================================================
        // = Front-end Setting
        /*=====================================================*/
        function widget( $args, $instance ) {

          extract( $args );
          echo $before_widget; ?>

            <?php 

              if (!empty($instance['title'])) {
                $title = $instance['title'];
              } else {
                $title = '';

              } 

              if (!empty($instance['about_desc'])) {
                $about_desc = $instance['about_desc'];
              } else {
                $about_desc = '';
              } 

              if (!empty($instance['social_list'])) {
                $social_list = $instance['social_list'];
              } else {
                $social_list = '';
              }

              if ( !empty($instance['about_widget_logo'])) {
                $image_id = $instance['about_widget_logo'];
                $attachment = wp_get_attachment_image_src( $image_id, 'full' );
                $image =($attachment) ? $attachment[0] : $image_id;
              } else {
                $image = '';
              }

            ?> 

            <div class="footer-widget mb-30">
              <div class="logo mb-30">
                <a href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo esc_url( $image ); ?>" alt="<?php esc_attr_e( 'footer logo', 'alvon' ); ?>"></a>
              </div>
              <div class="fc-info mb-30">
                <p><?php echo $about_desc; ?></p>
              </div>
              <?php if (!empty( $social_list)) { ?>
              <div class="footer-social">
                <h4><?php esc_html_e( 'Social Share', 'alvon' ); ?></h4>
                <?php echo $social_list; ?>
              </div>
              <?php } ?>
            </div>

          <?php echo $after_widget;
        }
        /*=====================================================
        // = Widget Update Setting
        /*=====================================================*/
        function update( $new_instance, $old_instance ) {
          $instance            = $old_instance;
          $instance['title']   = $new_instance['title'];
          $instance['about_widget_logo']    = $new_instance['about_widget_logo'];
          $instance['about_desc']    = $new_instance['about_desc'];
          $instance['social_list']    = $new_instance['social_list'];
          return $instance;
        }

        /*=====================================================
        // = Widget Form Setting
        /*=====================================================*/
        function form( $instance ) {

          /* -------------------------------------------------
          /* - Defaults Value Seiitng Fields
          /*------------------------------------------------- */
          $instance   = wp_parse_args( $instance, array(
            'title'             => 'Alvon',
            'about_widget_logo' => ALVON_PLG_URL. 'assets/imgs/logo.png',
            'about_desc'        => 'info@exampleweb.com <br> +987 876 564 78 <br> 16/A, Pumkin Street City, UK <br> www.exampleweb.com',
            'social_list' => '
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-behance"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-github"></i></a>',
          ));
                                        
          /* -------------------------------------------------
          /* - Widget Title Seiitng
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['title'] );
          $text_field = array(
            'id'    => $this->get_field_name('title'),
            'name'  => $this->get_field_name('title'),
            'type'  => 'text',
            'title' => __( 'Title', 'alvon' ),
          );
          echo alvon_add_element( $text_field, $text_value );
         
          /* -------------------------------------------------
          /* - All Widget Fields Seiitng
          /*------------------------------------------------- */
          
          /* - About Widget Logo Upload Field
          /* ------------------------------------------------- */
          $about_widget_logo_value = esc_attr( $instance['about_widget_logo'] );
          $about_widget_logo_field = array(
            'id'    => $this->get_field_name('about_widget_logo'),
            'name'  => $this->get_field_name('about_widget_logo'),
            'type'  => 'image',
            'title' => __( 'Logo Image', 'alvon' ),
            'info'  => __( 'About Widghet Logo Upload Here', 'alvon' ),
          );
          echo alvon_add_element( $about_widget_logo_field, $about_widget_logo_value );


          /* - About widget Button Link
          /* ------------------------------------------------- */
          $about_desc_value = esc_attr( $instance['about_desc'] );
          $about_desc_field = array(
            'id'    => $this->get_field_name('about_desc'),
            'name'  => $this->get_field_name('about_desc'),
            'type'  => 'textarea',
            'title' => __( 'Description', 'alvon' ),
          );
          echo alvon_add_element( $about_desc_field, $about_desc_value );

          /* - About widget Button Link
          /* ------------------------------------------------- */
          $social_list_value = esc_attr( $instance['social_list'] );
          $social_list_field = array(
            'id'    => $this->get_field_name('social_list'),
            'name'  => $this->get_field_name('social_list'),
            'type'  => 'textarea',
            'title' => __( 'Social List', 'alvon' ),
          );
          echo alvon_add_element( $social_list_field, $social_list_value );

        }
    }
    // End Of Footer About Widget
}

if ( ! function_exists( 'alvon_about_widget_init' ) ) {
  function alvon_about_widget_init() {
    register_widget( 'ALVON_about_Widget' );
  }
  add_action( 'widgets_init', 'alvon_about_widget_init', 1 );
}




/*============================================================================================================================*/
/* - Footer Menu Widget
/*============================================================================================================================*/ 
if( ! class_exists( 'ALVON_footer_menu_widget_Widget' ) ) {

    //Footer About Widget
    class ALVON_footer_menu_widget_Widget extends WP_Widget {

        /*=====================================================
        // = Widget Register
        /*=====================================================*/
        function __construct() {

          $widget_ops     = array(
            'classname'   => 'alvon_footer_menu_widget_widget',
            'description' => __( 'Menu Widget.', 'alvon' )
          );

          parent::__construct( 'footer_menu_widget_widget', __( 'A::2 Footer Menu Widget', 'alvon' ), $widget_ops );

        }

        /*=====================================================
        // = Front-end Setting
        /*=====================================================*/
        function widget( $args, $instance ) {

          extract( $args ); ?>

            <?php 

              if (!empty($instance['title'])) {
                $title = $instance['title'];
              } else {
                $title = '';
              } 

              if (!empty($instance['menu_desc'])) {
                $menu_desc = $instance['menu_desc'];
              } else {
                $menu_desc = '';
              }

              if (!empty($instance['menu_location'])) {

                $menu_location = $instance['menu_location'];
                $locations = get_nav_menu_locations();
                $menu_location_name = array_search( $menu_location, $locations );

                if (!empty($instance['menu_select'])) {
                  $menu_select = $instance['menu_select'];
                } else {
                  $menu_select = '';
                } 
              } else {
                $menu_location_name = '';
              }

            echo $before_widget; 
            
          ?>
  
          <div class="footer-widget mb-30">
            <div class="fw-content">
              <div class="fw-title mb-30">
                <h5><?php echo esc_html( $title ); ?></h5>
                <span><?php echo $menu_desc ?></span>
              </div>
              <div class="fw-link">
                <?php wp_nav_menu(array(
                    'theme_location' => $menu_location_name,
                    'container'       => false,
                    'menu_class'      => '',
                    'echo'            => true,
                    'depth'             => 1,
                    'items_wrap'      => '<ul id="footer-nav-primary" class="f-left %2$s">%3$s</ul>'
                  ));
                ?>
              </div>
            </div>
          </div>

        <?php

        echo $after_widget;
        }
        /*=====================================================
        // = Widget Update Setting
        /*=====================================================*/
        function update( $new_instance, $old_instance ) {

          $instance            = $old_instance;
          $instance['title']   = $new_instance['title'];
          $instance['menu_desc']    = $new_instance['menu_desc'];
          $instance['menu_select']    = $new_instance['menu_select'];
          return $instance;
        }


        /*=====================================================
        // = Widget Form Setting
        /*=====================================================*/
        function form( $instance ) {

          //Registered Menu loop
          $menus = wp_get_nav_menus();

          if ( $menus ) {
            foreach ( $menus as $menu ) { 
              $menu_list[ $menu->term_id ] = $menu->name;
            } 
          } else {
              $menu_list[ __( 'No category found', 'alvon' ) ] = 0;
          }

          /* -------------------------------------------------
          /* - Defaults Value Seiitng Fields
          /*------------------------------------------------- */
          $instance   = wp_parse_args( $instance, array(

            'title'        => 'More Pages',
            'menu_desc'    => 'Lorem ipsum is a dummy',
            'menu_select'  => 'Download',

          ));


          /* -------------------------------------------------
          /* - Widget Title Seiitng
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['title'] );
          $text_field = array(
            'id'    => $this->get_field_name('title'),
            'name'  => $this->get_field_name('title'),
            'type'  => 'text',
            'title' => __( 'Menu Title', 'alvon' ),
          );
          echo alvon_add_element( $text_field, $text_value );

         
          /* -------------------------------------------------
          /* - All Widget Fields Seiitng
          /*------------------------------------------------- */

          /* - About widget Button Link
          /* ------------------------------------------------- */
          $menu_desc_value = esc_attr( $instance['menu_desc'] );
          $menu_desc_field = array(
            'id'    => $this->get_field_name('menu_desc'),
            'name'  => $this->get_field_name('menu_desc'),
            'type'  => 'textarea',
            'title' => __( 'Menu Description', 'alvon' ),
          );
          echo alvon_add_element( $menu_desc_field, $menu_desc_value );


          /* - About widget Button Link
          /* ------------------------------------------------- */
          $menu_select_value = esc_attr( $instance['menu_select'] );
          $menu_select_field = array(
            'id'    => $this->get_field_name('menu_select'),
            'name'  => $this->get_field_name('menu_select'),
            'type'  => 'select',
            'title' => __( 'Select Menu', 'alvon' ),
            'options'        => $menu_list,
            'default_option' => 'Select your menu',
          );
          echo alvon_add_element( $menu_select_field, $menu_select_value );

        }
    }
    // End Of Footer About Widget
}

if ( ! function_exists( 'alvon_footer_menu_widget_widget_init' ) ) {
  function alvon_footer_menu_widget_widget_init() {
    register_widget( 'ALVON_footer_menu_widget_Widget' );
  }
  add_action( 'widgets_init', 'alvon_footer_menu_widget_widget_init', 2 );
}



/*============================================================================================================================*/
/* - Newsletter Widget
/*============================================================================================================================*/ 
if( ! class_exists( 'ALVON_newsletter_widget_Widget' ) ) {

    //Footer Newsletter Widget
    class ALVON_newsletter_widget_Widget extends WP_Widget {

        /*=====================================================
        // = Widget Register
        /*=====================================================*/
        function __construct() {

          $widget_ops     = array(
            'classname'   => 'alvon_newsletter_widget_widget',
            'description' => 'Newsletter Widget.'
          );
          parent::__construct( 'newsletter_widget_widget', 'A::3 Newsletter Widget', $widget_ops );

        }

        /*=====================================================
        // = Front-end Setting
        /*=====================================================*/
        function widget( $args, $instance ) {

          extract( $args );
          echo $before_widget; ?>

            <?php 
              $title = $instance['title'];
              $desc = $instance['desc'];
              $newsletter_form_shortcode = $instance['newsletter_form_shortcode'];

            ?>

            <div class="footer-widget mb-30">
              <div class="fw-content">
                <div class="fw-title mb-30">
                  <h5><?php echo esc_html( $title ); ?></h5>
                  <span><?php echo esc_html( $desc ); ?></span>
                </div>
                <?php if (!empty($newsletter_form_shortcode)) { ?>
                <div class="footer-cta">
                  <?php echo do_shortcode( $newsletter_form_shortcode ); ?>
                </div>
                <?php } ?>
              </div>
            </div>

          <?php echo $after_widget;

        }
        /*=====================================================
        // = Widget Update Setting
        /*=====================================================*/
        function update( $new_instance, $old_instance ) {

          $instance          = $old_instance;

          $instance['title'] = $new_instance['title'];
          $instance['desc']  = $new_instance['desc'];
          $instance['newsletter_form_shortcode'] = $new_instance['newsletter_form_shortcode'];

          return $instance;

        }

        /*=====================================================
        // = Widget Form Setting
        /*=====================================================*/
        function form( $instance ) {

          /* -------------------------------------------------
          /* - Defaults Value Setting Fields
          /*------------------------------------------------- */
          $instance   = wp_parse_args( $instance, array(

            'title'   => 'Get Every Single Update',
            'desc'    => 'Lorem ipsum is a dummy',

            'newsletter_form_shortcode' => 'Shortcode',

          ));

          /* -------------------------------------------------
          /* - Widget Title Setting
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['title'] );
          $text_field = array(
            'id'    => $this->get_field_name('title'),
            'name'  => $this->get_field_name('title'),
            'type'  => 'text',
            'title' => 'Title',
          );
          echo alvon_add_element( $text_field, $text_value );


          /* -------------------------------------------------
          /* - Widget Title Setting
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['desc'] );
          $text_field = array(
            'id'    => $this->get_field_name('desc'),
            'name'  => $this->get_field_name('desc'),
            'type'  => 'textarea',
            'title' => 'Description',
          );
          echo alvon_add_element( $text_field, $text_value );

         
          /* -------------------------------------------------
          /* - All Widget Fields Seiitng
          /*------------------------------------------------- */

          /* - Contact Info 1 Title
          /* ------------------------------------------------- */
          $newsletter_form_shortcode_value = esc_attr( $instance['newsletter_form_shortcode'] );
          $newsletter_form_shortcode_field = array(
            'id'    => $this->get_field_name('newsletter_form_shortcode'),
            'name'  => $this->get_field_name('newsletter_form_shortcode'),
            'type'  => 'text',
            'title' => 'Contact Info 1 Title',
          );
          echo alvon_add_element( $newsletter_form_shortcode_field, $newsletter_form_shortcode_value );

        }
    }
    // End Of Footer About Widget
}

if ( ! function_exists( 'alvon_newsletter_widget_widget_init' ) ) {
  function alvon_newsletter_widget_widget_init() {
    register_widget( 'ALVON_newsletter_widget_Widget' );
  }
  add_action( 'widgets_init', 'alvon_newsletter_widget_widget_init', 3 );
}



/*============================================================================================================================*/
/* - Instagram Widget Widget
/*============================================================================================================================*/ 
if( ! class_exists( 'ALVON_instagram_widget_Widget' ) ) {

    //Footer Instagram Widget Widget
    class ALVON_instagram_widget_Widget extends WP_Widget {

        /*=====================================================
        // = Widget Register
        /*=====================================================*/
        function __construct() {

          $widget_ops     = array(
            'classname'   => 'alvon_instagram_widget_widget',
            'description' => 'Instagram Widget.'
          );
          parent::__construct( 'instagram_widget_widget', 'A::4 Instagram Widget', $widget_ops );

        }

        /*=====================================================
        // = Front-end Setting
        /*=====================================================*/
        function widget( $args, $instance ) {

          extract( $args );
          echo $before_widget; ?>

            <?php 
              $title = $instance['title'];
              $desc = $instance['desc'];
              $instagram_form_shortcode = $instance['instagram_form_shortcode'];

            ?>

            <div class="footer-widget mb-30">
              <div class="fw-content">
                <div class="fw-title mb-30">
                  <h5><?php echo esc_html( $title ); ?></h5>
                  <span><?php echo esc_html( $desc ); ?></span>
                </div>
                <?php if (!empty($instagram_form_shortcode)) { ?>
                <div class="footer-insta">
                 <?php echo do_shortcode( $instagram_form_shortcode ); ?>
                </div>
                <?php } ?>
              </div>
            </div>

          <?php echo $after_widget;

        }
        /*=====================================================
        // = Widget Update Setting
        /*=====================================================*/
        function update( $new_instance, $old_instance ) {

          $instance          = $old_instance;

          $instance['title'] = $new_instance['title'];
          $instance['desc']  = $new_instance['desc'];
          $instance['instagram_form_shortcode'] = $new_instance['instagram_form_shortcode'];

          return $instance;

        }

        /*=====================================================
        // = Widget Form Setting
        /*=====================================================*/
        function form( $instance ) {

          /* -------------------------------------------------
          /* - Defaults Value Setting Fields
          /*------------------------------------------------- */
          $instance   = wp_parse_args( $instance, array(

            'title'   => 'Instagram Feeds',
            'desc'    => 'Lorem ipsum is a dummy',

            'instagram_form_shortcode' => 'Shortcode',

          ));

          /* -------------------------------------------------
          /* - Widget Title Setting
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['title'] );
          $text_field = array(
            'id'    => $this->get_field_name('title'),
            'name'  => $this->get_field_name('title'),
            'type'  => 'text',
            'title' => 'Title',
          );
          echo alvon_add_element( $text_field, $text_value );


          /* -------------------------------------------------
          /* - Widget Title Setting
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['desc'] );
          $text_field = array(
            'id'    => $this->get_field_name('desc'),
            'name'  => $this->get_field_name('desc'),
            'type'  => 'textarea',
            'title' => 'Description',
          );
          echo alvon_add_element( $text_field, $text_value );

         
          /* -------------------------------------------------
          /* - All Widget Fields Seiitng
          /*------------------------------------------------- */

          /* - Contact Info 1 Title
          /* ------------------------------------------------- */
          $instagram_form_shortcode_value = esc_attr( $instance['instagram_form_shortcode'] );
          $instagram_form_shortcode_field = array(
            'id'    => $this->get_field_name('instagram_form_shortcode'),
            'name'  => $this->get_field_name('instagram_form_shortcode'),
            'type'  => 'text',
            'title' => 'Contact Info 1 Title',
          );
          echo alvon_add_element( $instagram_form_shortcode_field, $instagram_form_shortcode_value );

        }
    }
    // End Of Footer About Widget
}

if ( ! function_exists( 'alvon_instagram_widget_widget_init' ) ) {
  function alvon_instagram_widget_widget_init() {
    register_widget( 'ALVON_instagram_widget_Widget' );
  }
  add_action( 'widgets_init', 'alvon_instagram_widget_widget_init', 4 );
}




/*<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>*/
/* - Sidebar Widget
/*<><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><>*/


/*============================================================================================================================*/
/* - Recent Post Widget Widget
/*============================================================================================================================*/ 
if( ! class_exists( 'ALVON_recent_post_Widget' ) ) {
  class ALVON_recent_post_Widget extends WP_Widget {

    function __construct() {

      $widget_ops     = array(
        'classname'   => 'alvon_rp_widget',
        'description' =>  __( 'Recent Post Widget.', 'alvon' )
      );

      parent::__construct( 'recent_post_widget', __( 'A::5 Recent Post', 'alvon' ), $widget_ops );

    }

    function widget( $args, $instance ) {

      extract( $args );

      echo $before_widget;
        if (!empty($instance['footer_post'])) {
          $footer_post = $instance['footer_post'];
        } else {
          $footer_post = '';          
        }
        
        $title = $instance['title'];
        $desc = $instance['desc'];
        $post_type = $instance['post_type'];
        $posts_order = $instance['post_order'];
        $posts_per_page = $instance['post_per_page'];

        if (!empty($footer_post)) {
      ?> 

      <!-- Footer Blog List
      ========================== -->

      <div class="footer-widget mb-30">
        <div class="fw-content">
          <div class="fw-title mb-30">
            <h5><?php echo esc_html( $title ); ?></h5>
            <span><?php echo esc_html( $desc ); ?></span>
          </div>
          <div class="sidebar-rc-post">
              <ul>
                <?php
                  $the_query = new WP_Query( array(
                    'post_type' => $post_type,
                    'posts_per_page' => $posts_per_page,
                    'order' => $posts_order,
                  ) );
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>
                  <li>
                    <?php if(has_post_thumbnail()) { ?>
                    <div class="rc-post-thumb">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('alvon-thumb-80-60'); ?></a>
                    </div>
                    <?php } ?>
                    <div class="rc-post-content">
                      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <span><?php echo esc_html( get_the_date() ); ?></span>
                    </div>
                  </li>
                <?php endwhile; wp_reset_query(); ?>
              </ul>
            </div>
        </div>
      </div>
      <?php } else { ?>
      <div class="widget-title mb-20">
        <h4><?php echo esc_html( $title ); ?></h4>
        <span></span>
      </div>
      <div class="sidebar-rc-post">
        <ul>
          <?php
            $the_query = new WP_Query( array(
              'post_type' => $post_type,
              'posts_per_page' => $posts_per_page,
              'order' => $posts_order,
            ) );
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>
            <li>
              <?php if(has_post_thumbnail()) { ?>
              <div class="rc-post-thumb">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('alvon-thumb-80-60'); ?></a>
              </div>
              <?php } ?>
              <div class="rc-post-content">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <span><?php echo esc_html( get_the_date() ); ?></span>
              </div>
            </li>
          <?php endwhile; wp_reset_query(); ?>
        </ul>
      </div>
    <?php } echo $after_widget;

    }

    function update( $new_instance, $old_instance ) {

      $instance            = $old_instance;
      $instance['footer_post']   = $new_instance['footer_post'];
      $instance['title']   = $new_instance['title'];
      $instance['desc']   = $new_instance['desc'];
      $instance['post_type']    = $new_instance['post_type'];
      $instance['post_order']    = $new_instance['post_order'];
      $instance['post_per_page']    = $new_instance['post_per_page'];

      return $instance;

    }

    function form( $instance ) {

      //
      // Title Field Defaults
      // -------------------------------------------------
      $instance         = wp_parse_args( $instance, array(
        'footer_post'   => '',
        'title'         => 'Recent Post',
        'desc'          => 'Lorem ipsum is a dummy',
        'post_per_page' => '3',
        'post_type'     => 'post',
        'post_order'    => 'ASC',
      ));

      //
      // Title Field
      // -------------------------------------------------
      $footer_post_value = esc_attr( $instance['footer_post'] );
      $footer_post_field = array(
        'id'    => $this->get_field_name('footer_post'),
        'name'  => $this->get_field_name('footer_post'),
        'type'  => 'checkbox',
        'title' => __( 'Footer widget?', 'alvon' ),
      );
      echo alvon_add_element( $footer_post_field, $footer_post_value );

      //
      // Title Field
      // -------------------------------------------------
      $text_value = esc_attr( $instance['title'] );
      $text_field = array(
        'id'    => $this->get_field_name('title'),
        'name'  => $this->get_field_name('title'),
        'type'  => 'text',
        'title' => __( 'Title', 'alvon' ),
      );
      echo alvon_add_element( $text_field, $text_value );


      //
      // Title Field
      // -------------------------------------------------
      $desc_value = esc_attr( $instance['desc'] );
      $desc_field = array(
        'id'    => $this->get_field_name('desc'),
        'name'  => $this->get_field_name('desc'),
        'type'  => 'textarea',
        'title' => __( 'Description', 'alvon' ),
      );
      echo alvon_add_element( $desc_field, $desc_value );

      //
      // Post type
      // -------------------------------------------------
      $post_type_value = esc_attr( $instance['post_type'] );
      $post_type_field = array(
        'id'    => $this->get_field_name('post_type'),
        'name'  => $this->get_field_name('post_type'),
        'type'         => 'select',
        'title'        => __( 'Select Post Type', 'alvon' ),
        'options'      => array(
          'post'       => 'Default Post',
          'portfolio'  => 'Portfolio Post',
          'service'    => 'Service Post',
        ),
        'default_option' => __( 'Select post type', 'alvon' ),
      );
      echo alvon_add_element( $post_type_field, $post_type_value );

      //
      // Post Order
      // -------------------------------------------------
      $post_order_value = esc_attr( $instance['post_order'] );
      $post_order_field = array(
        'id'    => $this->get_field_name('post_order'),
        'name'  => $this->get_field_name('post_order'),
        'type'   => 'select',
        'title'  => __( 'Select Post Order', 'alvon' ),
        'options' => array(
          'ASC'  => 'Ascending Order',
          'DESC' => 'Descending Post',
        ),
        'default_option' => __( 'Select post order', 'alvon' ),
      );
      echo alvon_add_element( $post_order_field, $post_order_value );

      //
      // Post Per Page
      // -------------------------------------------------
      $post_per_page_value = esc_attr( $instance['post_per_page'] );
      $post_per_page_field = array(
        'id'    => $this->get_field_name('post_per_page'),
        'name'  => $this->get_field_name('post_per_page'),
        'type'  => 'text',
        'title' => __( 'Post Per Page', 'alvon' ),
        'info'  => __( 'How post display here', 'alvon' ),
      );
      echo alvon_add_element( $post_per_page_field, $post_per_page_value );

    }
  }
}

if ( ! function_exists( 'alvon_recent_post_widget_init' ) ) {
  function alvon_recent_post_widget_init() {
    register_widget( 'ALVON_recent_post_Widget' );
  }
  add_action( 'widgets_init', 'alvon_recent_post_widget_init', 5 );
}




/*============================================================================================================================*/
/* - Faq Widget
/*============================================================================================================================*/ 
if( ! class_exists( 'ALVON_faq_info_Widget' ) ) {

    //Footer Info Widget
    class ALVON_faq_info_Widget extends WP_Widget {

        /*=====================================================
        // = Widget Register
        /*=====================================================*/
        function __construct() {

          $widget_ops     = array(
            'classname'   => 'alvon_faq_info_widget',
            'description' => __( 'Info Widget.', 'alvon' )
          );
          parent::__construct( 'faq_info_widget', __( 'A::6 Info Widget', 'alvon' ), $widget_ops );
        }

        /*=====================================================
        // = Front-end Setting
        /*=====================================================*/
        function widget( $args, $instance ) {

          extract( $args );
          echo $before_widget; ?>

            <?php 

              if (!empty($instance['title'])) {
                $title = $instance['title'];
              } else {
                $title = '';
              } 
              if (!empty($instance['faq_info_desc'])) {
                $faq_info_desc = $instance['faq_info_desc'];
              } else {
                $faq_info_desc = '';
              } 
              if ( !empty($instance['faq_info_bg_img'])) {
                $image_id = $instance['faq_info_bg_img'];
                $attachment = wp_get_attachment_image_src( $image_id, 'full' );
                $image =($attachment) ? $attachment[0] : $image_id;
              } else {
                $image = '';
              }

            ?> 

            <div class="faq-cta align-items-center" data-background="<?php echo esc_url( $image ); ?>">
              <div class="faq-cta-content">
                <?php echo $faq_info_desc; ?>
              </div>
            </div>


          <?php echo $after_widget;
        }
        /*=====================================================
        // = Widget Update Setting
        /*=====================================================*/
        function update( $new_instance, $old_instance ) {

          $instance            = $old_instance;
          $instance['title']   = $new_instance['title'];
          $instance['faq_info_bg_img']    = $new_instance['faq_info_bg_img'];
          $instance['faq_info_desc']    = $new_instance['faq_info_desc'];

          return $instance;

        }

        /*=====================================================
        // = Widget Form Setting
        /*=====================================================*/
        function form( $instance ) {

          /* ------------------------------------------------
          /* - Defaults Value Seiitng Fields
          /*------------------------------------------------- */
          $instance   = wp_parse_args( $instance, array(
            'title'             => 'Faq Title',
            'faq_info_bg_img' => ALVON_PLG_URL. 'assets/imgs/faq_cta_bg.jpg',
            'faq_info_desc'        => '<span class="info">Make a call</span><h4>+874(784) 65 57</h4>',
          ));
                            
          /* ------------------------------------------------
          /* - Widget Title Seiitng
          /*------------------------------------------------- */
          $text_value = esc_attr( $instance['title'] );
          $text_field = array(
            'id'    => $this->get_field_name('title'),
            'name'  => $this->get_field_name('title'),
            'type'  => 'text',
            'title' => __( 'Title', 'alvon' ),
          );
          echo alvon_add_element( $text_field, $text_value );

         
          /* -------------------------------------------------
          /* - About Widget Logo Upload Field
          /* ------------------------------------------------- */
          $faq_info_bg_img_value = esc_attr( $instance['faq_info_bg_img'] );
          $faq_info_bg_img_field = array(
            'id'    => $this->get_field_name('faq_info_bg_img'),
            'name'  => $this->get_field_name('faq_info_bg_img'),
            'type'  => 'image',
            'title' => __( 'Logo Image', 'alvon' ),
            'info'  => __( 'About Widghet Logo Upload Here', 'alvon' ),
          );
          echo alvon_add_element( $faq_info_bg_img_field, $faq_info_bg_img_value );

          /* -------------------------------------------------
          /* - About widget Button Link
          /* ------------------------------------------------- */
          $faq_info_desc_value = esc_attr( $instance['faq_info_desc'] );
          $faq_info_desc_field = array(
            'id'    => $this->get_field_name('faq_info_desc'),
            'name'  => $this->get_field_name('faq_info_desc'),
            'type'  => 'textarea',
            'title' => __( 'Description', 'alvon' ),
          );
          echo alvon_add_element( $faq_info_desc_field, $faq_info_desc_value );

        }
    }
    // End Of Footer About Widget
}

if ( ! function_exists( 'alvon_faq_info_widget_init' ) ) {
  function alvon_faq_info_widget_init() {
    register_widget( 'ALVON_faq_info_Widget' );
  }
  add_action( 'widgets_init', 'alvon_faq_info_widget_init', 6 );
}