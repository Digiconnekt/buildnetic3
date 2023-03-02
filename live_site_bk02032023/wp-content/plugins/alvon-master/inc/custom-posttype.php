<?php 

/*------------------------------------------------------------------------------------------------------------------*/
/*  Services Custom Post
/*------------------------------------------------------------------------------------------------------------------*/

add_action('init', 'service_init');
function service_init() {

  $labels = array(
    'name'               => _x( 'Services', 'post type general name', 'alvon' ),
    'singular_name'      => _x( 'Service', 'post type singular name', 'alvon' ),
    'menu_name'          => __( 'Services', 'alvon' ),
    'name_admin_bar'     => __( 'Service', 'alvon' ),
    'add_new'            => __( 'Add New', 'alvon' ),
    'add_new_item'       => __( 'Add New Service', 'alvon' ),
    'new_item'           => __( 'New Service', 'alvon' ),
    'edit_item'          => __( 'Edit Service', 'alvon' ),
    'view_item'          => __( 'View Service', 'alvon' ),
    'all_items'          => __( 'All Services', 'alvon' ),
    'search_items'       => __( 'Search Services', 'alvon' ),
    'parent_item_colon'  => __( 'Parent Services:', 'alvon' ),
    'not_found'          => __( 'No Service found.', 'alvon' ),
    'not_found_in_trash' => __( 'No Service found in Trash.', 'alvon' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'taxonomies'         => array( 'post_tag' ),
    'menu_icon'          => 'dashicons-hammer',
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
  );

  register_post_type('service', $args);
}


/* Service Texonomy
=====================================================*/

function create_service_taxonomies() {
  $labels = array(
    'name'                  => _x( 'Service Category', 'Taxonomy plural name', 'alvon' ),
    'singular_name'         => _x( 'Service Category', 'Taxonomy singular name', 'alvon' ),
    'search_items'          => __( 'Search Service Category', 'alvon' ),
    'popular_items'         => __( 'Popular Service Category', 'alvon' ),
    'all_items'             => __( 'All Categories', 'alvon' ),
    'parent_item'           => __( 'Parent Service Category', 'alvon' ),
    'parent_item_colon'     => __( 'Parent Service Category', 'alvon' ),
    'edit_item'             => __( 'Edit Service Category', 'alvon' ),
    'update_item'           => __( 'Update Service Category', 'alvon' ),
    'add_new_item'          => __( 'Add New Category', 'alvon' ),
    'new_item_name'         => __( 'New Service Menu Name', 'alvon' ),
    'add_or_remove_items'   => __( 'Add or remove Service Category', 'alvon' ),
    'choose_from_most_used' => __( 'Choose from most used text-domain', 'alvon' ),
    'menu_name'             => __( 'Category', 'alvon' ),
  );

  $args = array(
    'labels'            => $labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_admin_column' => true,
    'hierarchical'      => true,
    'show_tagcloud'     => true,
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'query_var'         => true,
    'capabilities'      => array(),
  );

  register_taxonomy( 'service_category', array( 'service' ), $args );
}

add_action( 'init', 'create_service_taxonomies' );


function update_service_post_slug( $args, $post_type ) {
    $project_post_slug = alvon_get_option('service_post_slug');
    if ( 'service' === $post_type ) {
        $my_args = array(
            'rewrite' => array( 'slug' => $project_post_slug, 'with_front' => false )
        );
        return array_merge( $args, $my_args );
    }
    return $args;
}
add_filter( 'register_post_type_args', 'update_service_post_slug', 10, 2 );




/*------------------------------------------------------------------------------------------------------------------*/
/*  Portfolios Custom Post
/*------------------------------------------------------------------------------------------------------------------*/

add_action('init', 'portfolio_init');
function portfolio_init() {

  $labels = array(
    'name'               => _x( 'Portfolios', 'post type general name', 'alvon' ),
    'singular_name'      => _x( 'Portfolio', 'post type singular name', 'alvon' ),
    'menu_name'          => __( 'Portfolios', 'alvon' ),
    'name_admin_bar'     => __( 'Portfolio', 'alvon' ),
    'add_new'            => __( 'Add New', 'alvon' ),
    'add_new_item'       => __( 'Add New Portfolio', 'alvon' ),
    'new_item'           => __( 'New Portfolio', 'alvon' ),
    'edit_item'          => __( 'Edit Portfolio', 'alvon' ),
    'view_item'          => __( 'View Portfolio', 'alvon' ),
    'all_items'          => __( 'All Portfolios', 'alvon' ),
    'search_items'       => __( 'Search Portfolios', 'alvon' ),
    'parent_item_colon'  => __( 'Parent Portfolios:', 'alvon' ),
    'not_found'          => __( 'No Portfolio found.', 'alvon' ),
    'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'alvon' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'taxonomies'         => array( 'post_tag' ),
    'menu_icon'          => 'dashicons-portfolio',
    'supports'           => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type('portfolio', $args);
}

/* Texonomy
=====================================================*/
function create_portfolio_taxonomies() {
  $labels = array(
    'name'                  => _x( 'Portfolio Category', 'Taxonomy plural name', 'alvon' ),
    'singular_name'         => _x( 'Portfolio Category', 'Taxonomy singular name', 'alvon' ),
    'search_items'          => __( 'Search Portfolio Category', 'alvon' ),
    'popular_items'         => __( 'Popular Portfolio Category', 'alvon' ),
    'all_items'             => __( 'All Categories', 'alvon' ),
    'parent_item'           => __( 'Parent Portfolio Category', 'alvon' ),
    'parent_item_colon'     => __( 'Parent Portfolio Category', 'alvon' ),
    'edit_item'             => __( 'Edit Portfolio Category', 'alvon' ),
    'update_item'           => __( 'Update Portfolio Category', 'alvon' ),
    'add_new_item'          => __( 'Add New Category', 'alvon' ),
    'new_item_name'         => __( 'New Portfolio Menu Name', 'alvon' ),
    'add_or_remove_items'   => __( 'Add or remove Portfolio Category', 'alvon' ),
    'choose_from_most_used' => __( 'Choose from most used text-domain', 'alvon' ),
    'menu_name'             => __( 'Category', 'alvon' ),
  );

  $args = array(
    'labels'            => $labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_admin_column' => true,
    'hierarchical'      => true,
    'show_tagcloud'     => true,
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => true,
    'query_var'         => true,
    'capabilities'      => array(),
  );

  register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );
}
add_action( 'init', 'create_portfolio_taxonomies' );


function update_portfolio_post_slug( $args, $post_type ) {
    $project_post_slug = alvon_get_option('portfolio_post_slug');
    if ( 'portfolio' === $post_type ) {
        $my_args = array(
            'rewrite' => array( 'slug' => $project_post_slug, 'with_front' => false )
        );
        return array_merge( $args, $my_args );
    }
    return $args;
}
add_filter( 'register_post_type_args', 'update_portfolio_post_slug', 10, 2 );



/*------------------------------------------------------------------------------------------------------------------*/
/*  Testimonial Custom Post
/*------------------------------------------------------------------------------------------------------------------*/

add_action('init', 'testimonial_init');
function testimonial_init() {

  $labels = array(
    'name'               => _x( 'Testimonial', 'post type general name', 'alvon' ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name', 'alvon' ),
    'menu_name'          => __( 'Testimonial', 'alvon' ),
    'name_admin_bar'     => __( 'Testimonial', 'alvon' ),
    'add_new'            => __( 'Add New', 'alvon' ),
    'add_new_item'       => __( 'Add New Testimonial', 'alvon' ),
    'new_item'           => __( 'New Testimonial', 'alvon' ),
    'edit_item'          => __( 'Edit Testimonial', 'alvon' ),
    'view_item'          => __( 'View Testimonial', 'alvon' ),
    'all_items'          => __( 'All Testimonial', 'alvon' ),
    'search_items'       => __( 'Search Testimonial', 'alvon' ),
    'parent_item_colon'  => __( 'Parent Testimonial:', 'alvon' ),
    'not_found'          => __( 'No Testimonial found.', 'alvon' ),
    'not_found_in_trash' => __( 'No Testimonial found in Trash.', 'alvon' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'taxonomies'         => array( 'post_tag' ),
    'menu_icon'        => 'dashicons-id-alt',
    'supports'           => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type('testimonial', $args);
}



/*------------------------------------------------------------------------------------------------------------------*/
/*  Team Custom Post
/*------------------------------------------------------------------------------------------------------------------*/

add_action('init', 'team_init');
function team_init() {

  $labels = array(
    'name'               => _x( 'Team', 'post type general name', 'alvon' ),
    'singular_name'      => _x( 'Team', 'post type singular name', 'alvon' ),
    'menu_name'          => __( 'Team', 'alvon' ),
    'name_admin_bar'     => __( 'Team', 'alvon' ),
    'add_new'            => __( 'Add New', 'alvon' ),
    'add_new_item'       => __( 'Add New Team', 'alvon' ),
    'new_item'           => __( 'New Team', 'alvon' ),
    'edit_item'          => __( 'Edit Team', 'alvon' ),
    'view_item'          => __( 'View Team', 'alvon' ),
    'all_items'          => __( 'All Team', 'alvon' ),
    'search_items'       => __( 'Search Team', 'alvon' ),
    'parent_item_colon'  => __( 'Parent Team:', 'alvon' ),
    'not_found'          => __( 'No Team found.', 'alvon' ),
    'not_found_in_trash' => __( 'No Team found in Trash.', 'alvon' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'taxonomies'         => array( 'post_tag' ),
    'menu_icon'          => 'dashicons-admin-users',
    'supports'           => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type('team', $args);
}



/*------------------------------------------------------------------------------------------------------------------*/
/*  Pricing Table Tab
/*------------------------------------------------------------------------------------------------------------------*/

add_action('init', 'pricing_init');
function pricing_init() {

  $labels = array(
    'name'               => _x( 'Pricing', 'post type general name', 'alvon' ),
    'singular_name'      => _x( 'Pricing', 'post type singular name', 'alvon' ),
    'menu_name'          => __( 'Pricing', 'alvon' ),
    'name_admin_bar'     => __( 'Pricing', 'alvon' ),
    'add_new'            => __( 'Add New', 'alvon' ),
    'add_new_item'       => __( 'Add New Pricing', 'alvon' ),
    'new_item'           => __( 'New Pricing', 'alvon' ),
    'edit_item'          => __( 'Edit Pricing', 'alvon' ),
    'view_item'          => __( 'View Pricing', 'alvon' ),
    'all_items'          => __( 'All Pricing', 'alvon' ),
    'search_items'       => __( 'Search Pricing', 'alvon' ),
    'parent_item_colon'  => __( 'Parent Pricing:', 'alvon' ),
    'not_found'          => __( 'No Pricing found.', 'alvon' ),
    'not_found_in_trash' => __( 'No Pricing found in Trash.', 'alvon' )
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => null,
    'taxonomies'         => array( 'post_tag' ),
    'menu_icon'          => 'dashicons-welcome-widgets-menus',
    'supports'           => array( 'title' )
  );

  register_post_type('price', $args);
}



/*------------------------------------------------------------------------------------------------------------------*/
/*  Get page list
/*------------------------------------------------------------------------------------------------------------------*/
function alvon_get_page_as_list(){

    $args = wp_parse_args(array(
        'post_type' => 'page',
        'posts_per_page' => -1,
    ));

    /**
     * Parse incoming $args into an array and merge it with $defaults
     */

    $posts = get_posts( $args);

    $post_options = array(esc_html__('-- Select Page --', 'alvon')=> '');
    if($posts){
        foreach ($posts as $post) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }
    return $post_options;
}



/*------------------------------------------------------------------------------------------------------------------*/
/*  Service post list
/*------------------------------------------------------------------------------------------------------------------*/
function alvon_get_service_as_list(){

    $args = wp_parse_args(array(
        'post_type' => 'service',
        'posts_per_page' => -1,
    ));

    /**
     * Parse incoming $args into an array and merge it with $defaults
     */

    $posts = get_posts( $args);

    $post_options = array(esc_html__('-- Select post --', 'alvon')=> '');
    if($posts){
        foreach ($posts as $post) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }
    return $post_options;
}



/*------------------------------------------------------------------------------------------------------------------*/
/*  Portfolio post list
/*------------------------------------------------------------------------------------------------------------------*/
function alvon_get_portfolio_as_list(){

    $args = wp_parse_args(array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1,
    ));

    /**
     * Parse incoming $args into an array and merge it with $defaults
     */

    $posts = get_posts( $args);

    $post_options = array(esc_html__('-- Select post --', 'alvon')=> '');
    if($posts){
        foreach ($posts as $post) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }
    return $post_options;
}
