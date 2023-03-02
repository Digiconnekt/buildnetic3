<?php

if( function_exists( 'alvon_framework_init' ) ) {
    $alvon_breadcrumb_switch = alvon_get_option('alvon_breadcrumb_switch');
} else {
    $alvon_breadcrumb_switch = '';
}
if( function_exists( 'alvon_framework_init' ) ) {
  if ($alvon_breadcrumb_switch == true) {
      $breadcrumb_height = 'breadcrumb_height';
  } else {
      $breadcrumb_height = 'breadcrumb_menu_height';
  }
} else {
    $breadcrumb_height = 'breadcrumb_height';
}
if (display_header_text()==true) {
  $auto_class = ' have-site-desc';
} else {
  $auto_class = ' none-site-desc';
} 

?>

<!-- header -->
<header id="header-sticky" class="transparent-header <?php echo esc_attr( $breadcrumb_height.$auto_class ); ?> header2">
  <div class="container-fluid container-p">
    <div class="row align-items-center">
      <div class="col-xl-2 col-lg-2">
          <div class="logo">
            <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              if ( has_custom_logo() ) {
                  echo '<a href="'.esc_url(home_url('/')).'" class="navbar-brand-logo"><img src="'. esc_url( $logo[0] ) .'" alt="'.esc_attr__( 'Alvon logo', 'alvon' ).'"></a>';
              $auto_class = 'customizer-logo';
              } elseif(function_exists( 'alvon_framework_init' ) ) {
                $site_logo_id = alvon_get_option('alvon_logo_img');
                $attachment = wp_get_attachment_image_src( $site_logo_id, 'full' );
                $site_logo    = ($attachment) ? $attachment[0] : $site_logo_id;
                if (!empty($site_logo )) {
                  echo'<a href="'.esc_url(home_url('/')).'" class="navbar-brand-logo"><img alt="'.esc_attr__( 'Alvon logo', 'alvon' ).'" src="'.esc_url( $site_logo ).'"></a>';
                $auto_class = 'option-logo';
                } else {
                  echo '<a href="'.esc_url(home_url('/')).'" class="default-logo">'. esc_html__( 'Alvon', 'alvon' ) .'</a>';
                  $auto_class = 'text-logo';
                }
              } else {
                $auto_class = 'text-logo';
                echo '<a href="'.esc_url(home_url('/')).'" class="default-logo">'. get_bloginfo( 'name' ) .'</a>';
              } 
            ?>
        </div>  
         <?php 
          if (display_header_text()==true) {
            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <div class="site-description"><?php echo esc_attr($description); ?></div>
            <?php endif; 
          }
        ?>
      </div>
      <?php 
        if(function_exists( 'alvon_framework_init' ) ) { 
          $menu_language_button = alvon_get_option('menu_language_button');
          $menu_language_button_shortcode = alvon_get_option('menu_language_button_shortcode');
          $menu_get_quote_btn = alvon_get_option('menu_get_quote_btn');
          if ( !empty($menu_language_button) && !empty($menu_get_quote_btn) ) {
            $menu_col = '7';
            $sc_col = '3';
          } elseif ( !empty($menu_language_button) ) {
            $menu_col = '9';
            $sc_col = '1';
          } elseif ( !empty($menu_get_quote_btn) ) {
            $menu_col = '8';
            $sc_col = '2';
          } else {
            $menu_col = '10';
            $sc_col = '0';
          }

          $quote_btn_text = alvon_get_option('quote_btn_text');
          $quote_btn_link = alvon_get_option('quote_btn_link');
        } else {
          $quote_btn_text = '';
          $quote_btn_link = '';
          $menu_col = '10';
          $sc_col = '0';
          $menu_language_button_shortcode = '';
        }
      ?>
      <div class="col-xl-<?php echo esc_attr( $menu_col ); ?> col-lg-10">
          <div class="menu-area">
              <nav id="mobile-menu">
                <?php if ( has_nav_menu( 'primary' ) ) { 
                  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'       => false,
                    'menu_class'      => '',
                    'echo'            => true,
                    'depth'             => 3,
                    'items_wrap'      => '<ul class="alvon-main-menu">%3$s</ul>',
                    'walker' => new Alvon_Navwalker()
                  ));
                } else {
                  echo '<ul id="menu" class="fallbackcd-menu-item"><li><a class="fallbackcd" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__( 'Add a menu', 'alvon' ) . '</a></li></ul>';
                } ?>
              </nav>
          </div>
      </div>
      <?php if ( !empty($menu_language_button) || !empty($menu_get_quote_btn) ) { ?>
      <div class="col-xl-<?php echo esc_attr( $sc_col ); ?> d-none d-xl-block">
          <div class="header-btn text-right">
            <?php if (!empty($menu_language_button)) { 
              echo do_shortcode( $menu_language_button_shortcode );
            } if ( !empty($menu_get_quote_btn) ){ ?>
              <a href="<?php echo esc_url( $quote_btn_link ); ?>" class="btn"><?php echo esc_html( $quote_btn_text ); ?> <i class="far fa-arrow-right"></i></a>
            <?php } ?>
          </div>
      </div>
      <?php } ?>
      <div class="col-12">
        <div class="mobile-menu home-one-menu"></div>
      </div>
    </div>
  </div>
</header>
<!-- header-end -->

<div class="menu-stricky-height-fix <?php echo esc_attr( $breadcrumb_height ); ?>"></div>