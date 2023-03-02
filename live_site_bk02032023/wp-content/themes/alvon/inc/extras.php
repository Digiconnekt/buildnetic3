<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package alvon
 */
add_filter( 'body_class', 'alvon_body_classes' );
add_filter('get_search_form', 'alvon_search_form');

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function alvon_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }
    return $classes;
}


function alvon_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() ) {
        return $title;
    }

    // Add the site name.
    $title .= get_bloginfo( 'name', 'display' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title = "$title $sep $site_description";
    }

    // Add a page number if necessary.
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'alvon' ), max( $paged, $page ) );
    }

    return $title;
}
add_filter( 'wp_title', 'alvon_wp_title', 10, 2 );


/**  comments from call back function.
--------------------------------------------------------------------------------------------------- */

if(!function_exists('alvon_comment')):

    function alvon_comment($comment, $args, $depth) {
        
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
            // Display trackbacks differently than normal comments.
        ?>
        <li <?php comment_class('comments-list'); ?> id="submited-comment">

            <p><?php esc_html_e( 'Pingback:', 'alvon' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'alvon' ), '<span class="edit-link">', '</span>' ); ?></p>
            <?php
            break;
            default :

            global $post;
            ?>

            <li <?php comment_class(); ?>>

                <div class="bs-example" data-example-id="media-list"> 
                    <ul class="comments media-list">
                        <li class="comment-box clearfix" id="comment-<?php comment_ID(); ?>">
                            <article>
                                <div class="single-comment mb-35">
                                    <div class="comments-avatar">
                                        <?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
                                    </div>
                                    <div class="comment-text">
                                        <div class="avatar-name mb-15">
                                            <h6><?php comment_author(); ?></h6>
                                            <span><?php echo (get_comment_date() . esc_html__( ' at ', 'alvon' ) .get_comment_time()); ?></span>

                                            <?php comment_reply_link( array_merge( $args, array( 'reply_text' => '<i class="fal fa-reply"></i>'.esc_html__( 'Reply', 'alvon'), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                                        </div>
                                        <?php comment_text(); ?>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            <?php
        break;
        endswitch; 
    }

endif;


/*------------------------------------------------------------------------------------------------------------------*/
/*  search
/*------------------------------------------------------------------------------------------------------------------*/

function alvon_search_form($form) {

    /**
     * Search form customization.
     *
     * @link http://codex.wordpress.org/Function_Reference/get_search_form
     * @since 1.0.0
     */
    $form = '<div class="ws-input sidebar-form p-relative"><form role="search" method="get" action="' .esc_url( home_url('/') ) . '">
                <input type="search" placeholder="'.esc_attr__( 'Enter Search Keywords', 'alvon' ).'" name="s">
                <button><i class="fa fa-search"></i></button>
            </form></div>';
    return $form;
}


/*------------------------------------------------------------------------------------------------------------------*/
/*   the excerpt
/*------------------------------------------------------------------------------------------------------------------*/
function alvon_excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}


/*------------------------------------------------------------------------------------------------------------------*/
/* Author Contact Method
/*------------------------------------------------------------------------------------------------------------------*/
function alvon_new_contactmethods( $contactmethods ) {

    //add Facebook
     $contactmethods['facebook'] = 'Facebook';
    // Add Twitter
     $contactmethods['twitter'] = 'Twitter';
    //add Instagram
     $contactmethods['instagram'] = 'Instagram';
    //add Behance
    $contactmethods['behance'] = 'Behance';
    //add Behance
    $contactmethods['linkedin'] = 'Linkedin';

    return $contactmethods;
}
add_filter('user_contactmethods','alvon_new_contactmethods',10,1);


/*------------------------------------------------------------------------------------------------------------------*/
/* Category List count wrap by span
/*------------------------------------------------------------------------------------------------------------------*/

add_filter('wp_list_categories', 'alvon_cat_count_span');
    function alvon_cat_count_span($links) {        
        $links = str_replace('(', '<span class="pull-right">(', $links);
        $links = str_replace(')', ')</span>', $links);
        return $links;
}

/*------------------------------------------------------------------------------------------------------------------*/
/* Archive List count wrap by span
/*------------------------------------------------------------------------------------------------------------------*/

add_filter('get_archives_link', 'alvon_archive_cat_count_span');
    function alvon_archive_cat_count_span($links) {        
        $links = str_replace('(', '<span class="pull-right">(', $links);
        $links = str_replace(')', ')</span>', $links);
        return $links;
}


/*------------------------------------------------------------------------------------------------------------------*/
/* Filter Post class
/*------------------------------------------------------------------------------------------------------------------*/
add_filter('post_class', 'set_row_post_class', 10,3);
function set_row_post_class($classes, $class, $post_id){

    //check if some meta field is set 
    $default_post_metadata = get_post_meta( get_the_ID(), '_alvon_post', true);

    if (!empty($default_post_metadata['post_format_type'] )) {
        $post_format_type = $default_post_metadata['post_format_type'];
    } else {
        $post_format_type = '';
    }

    // $profile_incomplete = get_post_meta($post_id, 'profile_incomplete', true);
    if (!empty($post_format_type)) {
        $classes[] = $post_format_type; //add a custom class to highlight this row in the table
    }
 
    // Return the array
    return $classes;
}


/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Breadcrum
/*------------------------------------------------------------------------------------------------------------------*/

add_action('alvon_breadcrum', 'alvon_breadcrum_set');
function alvon_breadcrum_set() {

    if ( has_header_image() ) {
        $bg_img = get_header_image();

        $blog_single_page_breadcrumb_title = __( 'Blog', 'alvon' );
        $blog_page_breadcrumb_title = __( 'Blog Posts', 'alvon' );
        $page_404_breadcrumb_title = __( '404 Error', 'alvon' );

    } elseif(function_exists( 'alvon_framework_init' ) ) {
        $blog_page_breadcrumb = alvon_get_option('blog_page_breadcrumb_title');
        if (!empty($blog_page_breadcrumb)) {
            $blog_page_breadcrumb_title = $blog_page_breadcrumb;
        } else {
            $blog_page_breadcrumb_title = __( 'Blog Posts', 'alvon' );
        }

        $page_404_breadcrumb_title = alvon_get_option('404_page_name');
        $bg_img_id = alvon_get_option('breatcrumb_bg_img');
        $attachment = wp_get_attachment_image_src( $bg_img_id, 'full' );
        $bg_img    = ($attachment) ? $attachment[0] : $bg_img_id;
    } else {
        $blog_page_breadcrumb_title = __( 'Blog Posts', 'alvon' );
        $page_404_breadcrumb_title = __( '404 Error', 'alvon' );
        $bg_img = '';
    }

    if (!empty($bg_img)) {
        $image_overlay = 'image-overlay';
        $breadcrumb_bg = '';
    } else {
        $image_overlay = '';
        $breadcrumb_bg = 'breadcrumb-img-none';
    }

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
        $breadcrumb_height = '';
    }

    if ( is_home() || is_front_page() ) { ?>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center <?php echo esc_attr( $image_overlay . ' ' . $breadcrumb_bg . ' ' . $breadcrumb_height ); ?>" style="background-image: url(<?php echo esc_url($bg_img); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2><?php echo esc_html( $blog_page_breadcrumb_title ); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'alvon') ?></a></li>
                                <?php 
                                    $get_bloginfo = get_bloginfo( 'name' );
                                    if (!empty($get_bloginfo)) {
                                ?>
                                <li class="breadcrumb-item active" aria-current="page"><?php alvon_meta_breadcrumbs(); ?></li>
                                <?php } ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <?php } elseif ( is_single() ) { ?>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center <?php echo esc_attr( $image_overlay . ' ' . $breadcrumb_bg . ' ' . $breadcrumb_height ); ?>" style="background-image: url(<?php echo esc_url($bg_img); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2><?php the_title(); ?></h2>
                        <nav aria-label="breadcrumb">
                            <?php alvon_meta_breadcrumbs(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <?php } elseif ( is_page() || is_archive() || is_search() || is_404() ) { ?>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center <?php echo esc_attr( $image_overlay . ' ' . $breadcrumb_bg . ' ' . $breadcrumb_height ); ?>" style="background-image: url(<?php echo esc_url($bg_img); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <h2> 
                        <?php 
                            if ( is_page() ) {
                                echo get_the_title();
                            } elseif (is_archive()) {
                                alvon_archive_page_title();
                            } elseif (is_search()) {
                                printf( esc_html__( 'Search for: %s', 'alvon' ), get_search_query() );
                            } elseif (is_404()) {
                                esc_html_e( 'Error 404', 'alvon');
                            }
                        ?>     
                        </h2>
                        <nav aria-label="breadcrumb">
                            <?php alvon_meta_breadcrumbs(); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

<?php }

}

function alvon_page_loader() {  ?>
    <!-- loading  -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="sk-double-bounce">
                    <div class="sk-child sk-double-bounce1"></div>
                    <div class="sk-child sk-double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- loading end -->
<?php }
add_action('alvon_preloading', 'alvon_page_loader');


/*------------------------------------------------------------------------------------------------------------------*/
/*  Header Style Load
/*------------------------------------------------------------------------------------------------------------------*/ 

add_action('alvon_header_style', 'alvon_header_style_load');

function alvon_header_style_load() {

    $alvon_header_settings = get_post_meta( get_the_ID(), '_custom_page_header_options', true );
    if(!empty($alvon_header_settings['header_style'])) {
        if($alvon_header_settings['header_style'] == 'style1') {
            get_template_part('headers/header', 'default' );
        } elseif ($alvon_header_settings['header_style'] == 'style2')  {
            get_template_part('headers/header', 'style2' );
        } elseif ($alvon_header_settings['header_style'] == 'style3')  {
            get_template_part('headers/header', 'style3' );
        } else {
            get_template_part('headers/header', 'default' );
        }
     } elseif(function_exists( 'alvon_framework_init' ) ) {
        $default_header_style = alvon_get_option('default_header_style');
        if($default_header_style == 'style1') {
            get_template_part('headers/header', 'default' );
        } elseif ($default_header_style == 'style2')  {
            get_template_part('headers/header', 'style2' );
        } elseif ($default_header_style == 'style3')  {
            get_template_part('headers/header', 'style3' );
        } else {
            get_template_part('headers/header', 'default' );
        }
    } else {
        get_template_part('headers/header', 'default' );
    }
}


/*------------------------------------------------------------------------------------------------------------------*/
/*  Footer Style Load
/*------------------------------------------------------------------------------------------------------------------*/ 
add_action('alvon_footer_style', 'alvon_footer_style_load');

function alvon_footer_style_load() {

    $alvon_footer_settings = get_post_meta( get_the_ID(), '_custom_page_footer_options', true );
    
    if(!empty($alvon_footer_settings['footer_style'])) {
        if($alvon_footer_settings['footer_style'] == 'style1') {
            get_template_part('footers/footer', 'default' );
        } elseif ($alvon_footer_settings['footer_style'] == 'style2')  {
            get_template_part('footers/footer', 'style2' );
        } elseif ($alvon_footer_settings['footer_style'] == 'style3')  {
            get_template_part('footers/footer', 'style3' );
        } else {
            get_template_part('footers/footer', 'default' );
        }
    } elseif(function_exists( 'alvon_framework_init' ) ) {
        $default_footer_style = alvon_get_option('default_footer_style');
         if($default_footer_style == 'style1') {
            get_template_part('footers/footer', 'default' );
        } elseif ($default_footer_style == 'style2')  {
            get_template_part('footers/footer', 'style2' );
        } elseif ($default_footer_style == 'style3')  {
            get_template_part('footers/footer', 'style3' );
        } else {
            get_template_part('footers/footer', 'default' );
        }
    } else {
        get_template_part('footers/footer', 'default' );
    }

}


/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Nav Walker
/*------------------------------------------------------------------------------------------------------------------*/ 

class Alvon_Navwalker extends Walker_Nav_Menu {
    /**
     * @see Walker::start_lvl()
     * @since 1.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    private $Alvon_megamenu_status = "";
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        if ($depth == 0 && $this->Alvon_megamenu_status == "enabled") {
            $output .= "\n$indent\n<ul class=\"mormal-menu\">\n";
        } elseif ($depth >= 1 && $this->Alvon_megamenu_status == "enabled") {
            $output .= "\n$indent<ul>\n";
        } elseif ($depth == 0 && $this->Alvon_megamenu_status != "enabled") {
            $output .= "\n$indent<ul class=\"submenu\">\n";
        } elseif ($depth >= 1 && $this->Alvon_megamenu_status != "enabled") {
            $output .= "\n$indent<ul class=\"submenu\">\n";
        } else {
            $output .= "\n$indent<ul>\n";
        }
    }
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        /**
         * Dividers, Headers or Disabled
         * =============================
         * Determine whether the item is a Divider, Header, Disabled or regular
         * menu item. To prevent errors we use the strcasecmp() function to so a
         * comparison that is not case sensitive. The strcasecmp() function returns
         * a 0 if the strings are equal.
         */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
        } else {
            $class_names = $value = '';
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;
            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            if ( $args->has_children )
                $class_names .= ' submenu-area';
            if ( in_array( 'current-menu-item', $classes ) )
                $class_names .= ' active';
            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
            $output .= $indent . '<li' . $id . $value . $class_names .'>';
            $atts = array();
            $atts['title']  = ! empty( $item->title )   ? $item->title  : '';
            $atts['target'] = ! empty( $item->target )  ? $item->target : '';
            $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';
            // If item has_children add atts to a.
            if ( $args->has_children && $depth === 0 ) {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
                $atts['data-toggle']    = 'submenu-area';
                $atts['class']          = 'dropdown-toggle';
                $atts['aria-haspopup']  = 'true';
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            }
            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
            $attributes = '';
            foreach ( $atts as $attr => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }
            $item_output = $args->before;
            /*
             * Glyphicons
             * ===========
             * Since the the menu item is NOT a Divider or Header we check the see
             * if there is a value in the attr_title property. If the attr_title
             * property is NOT null we apply it as the class name for the glyphicon.
             */
            if ( ! empty( $item->attr_title ) )
                $item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
                $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children && 0 === $depth ) ? '</a>' : '</a>';
            $item_output .= $args->after;
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }
    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @see Walker::start_el()
     * @since 2.5.0
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
            return;
        $id_field = $this->db_fields['id'];
        // Display this element.
        if ( is_object( $args[0] ) )
           $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the wp_nav_menu's fallback_cb variable
     * and a manu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the wp_nav_menu function.
     *
     */
    public static function fallback( $args ) {
        if ( current_user_can( 'manage_options' ) ) {
            extract( $args );
            $fb_output = null;
            if ( $container ) {
                $fb_output = '<' . $container;
                if ( $container_id )
                    $fb_output .= ' id="' . $container_id . '"';
                if ( $container_class )
                    $fb_output .= ' class="' . $container_class . '"';
                $fb_output .= '>';
            }
            $fb_output .= '<ul';
            if ( $menu_id )
                $fb_output .= ' id="' . $menu_id . '"';
            if ( $menu_class )
                $fb_output .= ' class="' . $menu_class . '"';
            $fb_output .= '>';
            $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">'.esc_html__( 'Add a menu', 'alvon' ).'</a></li>';
            $fb_output .= '</ul>';
            if ( $container )
                $fb_output .= '</' . $container . '>';
            echo wp_kses( $fb_output );
        }
    }
}