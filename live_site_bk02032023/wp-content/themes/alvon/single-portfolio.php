<?php
/**
 * The template for displaying all single posts.
 *
 * @package alvon
 */

get_header();

if ( has_header_image() ) {
    $bg_img = get_header_image();

} elseif(function_exists( 'alvon_framework_init' ) ) {

    $bg_img_id = alvon_get_option('breatcrumb_bg_img');
    $attachment = wp_get_attachment_image_src( $bg_img_id, 'full' );
    $bg_img    = ($attachment) ? $attachment[0] : $bg_img_id;

    $shape_img_id = alvon_get_option('breatcrumb_bg_shape_img');
    $shape_attachment = wp_get_attachment_image_src( $shape_img_id, 'full' );
    $shape_img    = ($shape_attachment) ? $shape_attachment[0] : $shape_img_id;

} else {
    $bg_img = '';
    $shape_img = '';
}

if (!empty($bg_img)) {
    $image_overlay = 'image-overlay';
    $breadcrumb_bg = '';
} else {
    $image_overlay = '';
    $breadcrumb_bg = 'breadcrumb-img-none';
}

if( function_exists( 'alvon_framework_init' ) ) {
    $alvon_portfolio_single_breadcrumb = alvon_get_option('alvon_portfolio_single_breadcrumb');
    $alvon_breadcrumb_switch = alvon_get_option('alvon_breadcrumb_switch');
} else {
    $alvon_portfolio_single_breadcrumb = 'Poprtfolio Details';
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

?>


<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg d-flex align-items-center <?php echo esc_attr( $image_overlay . ' ' . $breadcrumb_bg . ' ' . $breadcrumb_height ); ?>" style="background-image: url(<?php echo esc_url($bg_img); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap text-center">
                    <h2><?php echo esc_html( $alvon_portfolio_single_breadcrumb ); ?></h2>
                    <nav aria-label="breadcrumb">
                        <?php alvon_meta_breadcrumbs(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- portfolio-details -->
<section class="portfolio-details pt-120 pb-90">
    <div class="container">
        <div class="row">
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post(); 

                $alvon_portfolio_info = get_post_meta(get_the_ID(), '_alvon_portfolios', true);

                if (!empty($alvon_portfolio_info['portfolio_sub_title'] )) {
                    $portfolio_sub_title = $alvon_portfolio_info['portfolio_sub_title'];
                } else {
                    $portfolio_sub_title = '';
                }
                if (!empty($alvon_portfolio_info['client_name'] )) {
                    $client_name = $alvon_portfolio_info['client_name'];
                } else {
                    $client_name = '';
                } 
                if (!empty($alvon_portfolio_info['company_location'] )) {
                    $company_location = $alvon_portfolio_info['company_location'];
                } else {
                    $company_location = '';
                }
                if (!empty($alvon_portfolio_info['portfolio_date'] )) {
                    $portfolio_date = $alvon_portfolio_info['portfolio_date'];
                } else {
                    $portfolio_date = '';
                }
                if (!empty($alvon_portfolio_info['portfolio_website'] )) {
                    $portfolio_website = $alvon_portfolio_info['portfolio_website'];
                } else {
                    $portfolio_website = '';
                }

                // Galleries Code
                $portfolios_gallery_list = get_post_meta(get_the_ID(), '_alvon_portfolios_gallery', true);

                if (!empty($portfolios_gallery_list['portfolio_gallery'] )) {
                    $portfolio_gallery = $portfolios_gallery_list['portfolio_gallery'];
                } else {
                    $portfolio_gallery = '';
                }

                if ($portfolio_gallery) {
                    $ids = explode(",",$portfolio_gallery);
                } else {
                    $ids = '';
                }
            ?>
            <div class="col-lg-8">
                <div class="p-details-wrap">
                    <div class="row portfolio-d-active">

                    <?php 
                    if (!empty($ids)) {
                        foreach ($ids as $key => $value) {
                            $src = wp_get_attachment_image_src( $value, 'full' ); ?>

                        <div class="col-sm-6 grid-item">
                            <div class="p-details-img mb-30">
                                <img src="<?php echo esc_url($src[0]); ?>" alt="<?php esc_attr_e( 'single portfolio image', 'alvon' ); ?>">
                            </div>
                        </div>
                    <?php 
                        }
                    } else { ?>
                        <div class="col-sm-6 grid-item">
                            <div class="p-details-img mb-30">
                               <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php } ?> 
                    </div>
                </div>
            </div>
            <div class="col-lg-4 portfolio-pl">
                <div class="p-details-content mb-30">
                    <?php if ($portfolio_sub_title) { ?>
                    <span><?php echo esc_html( $portfolio_sub_title ); ?></span>
                    <?php } ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                    <div class="product-status">
                        <ul>
                            <?php if ($client_name) { ?>
                            <li><span><?php esc_html_e('Client:', 'alvon'); ?></span> <?php echo esc_html( $client_name ); ?></li>
                            <?php } if ($company_location) { ?>
                            <li><span><?php esc_html_e('Location:', 'alvon'); ?></span> <?php echo esc_html( $company_location ); ?></li>
                            <?php }
                            $portfolio_cats = get_the_term_list(get_the_ID(), 'portfolio_category', '', ', ', ''); 
                            if ($portfolio_cats) { ?>
                            <li><span><?php esc_html_e( 'Category:', 'alvon' ); ?></span><?php echo get_the_term_list(get_the_ID(), 'portfolio_category', '', ', ', ''); ?></li>
                            <?php } if ($portfolio_date) { ?>
                            <li><span><?php esc_html_e('Date:', 'alvon'); ?></span> <?php echo esc_html( $portfolio_date ); ?> </li>
                            <?php } if ($portfolio_website) { ?>
                            <li><span><?php esc_html_e( 'Link:', 'alvon' ); ?></span><a href="<?php echo esc_url( $portfolio_website ); ?>"><?php echo esc_html( $portfolio_website ); ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php 
                    if( function_exists( 'alvon_framework_init' ) ) {
                        $alvon_ps_social_share = alvon_get_option('alvon_ps_social_share');
                        if (!empty($alvon_ps_social_share)) { 
                    ?>
                    <div class="product-share">
                        <span><?php esc_html_e('Socials:', 'alvon'); ?></span>
                       <?php do_action( 'alvon_portfolio_social_share_media' ); ?>
                    </div>
                    <?php } 

                        $alvon_ps_link_btn = alvon_get_option('alvon_ps_link_btn');
                        $alvon_ps_link_btn_text = alvon_get_option('alvon_ps_link_btn_text');
                        $alvon_ps_link_btn_link = alvon_get_option('alvon_ps_link_btn_link');

                        if (!empty($alvon_ps_link_btn)) {
                    ?>
                    <a href="<?php echo esc_url( $alvon_ps_link_btn_link  ); ?>" class="btn portfolio-d-btn"><?php echo esc_html( $alvon_ps_link_btn_text ); ?></a>
                    <?php }
                    } ?>
                </div>
            </div>
            <?php endwhile; ?>

            <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>
        </div>
    </div>
</section>
<!-- portfolio-details-end -->


<?php 
if( function_exists( 'alvon_framework_init' ) ) {
    $alvon_ps_related_post = alvon_get_option('alvon_ps_related_post');
    if (!empty($alvon_ps_related_post)) {
        $custom_taxterms = wp_get_object_terms( $post->ID, 'portfolio_category', array('fields' => 'ids') );
        if (!empty($custom_taxterms)) {
            $related_post_title = alvon_get_option('related_post_title');
            $related_post_per_page = alvon_get_option('related_post_per_page');
?>
    <!-- releted-works -->
    <section class="releted-works light-gray pt-115 pb-120">
        <div class="container-fluid rwork-pl">
            <?php if (!empty($related_post_title)) { ?>
            <div class="row">
                <div class="col-12">
                    <div class="rwork-title mb-55">
                        <h4><?php echo esc_html( $related_post_title ); ?></h4>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row rwork-active">
                <?php 
                    // arguments
                    $args = array(
                    'post_type' => 'portfolio',
                    'post_status' => 'publish',
                    'posts_per_page' => $related_post_per_page, // you may edit this number
                    'orderby' => 'rand',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'portfolio_category',
                        'field' => 'id',
                        'terms' => $custom_taxterms
                      )
                    ),
                    'post__not_in' => array ($post->ID),
                    );
                    $related_items = new WP_Query( $args );
                    // loop over query
                    if ($related_items->have_posts()) :
                    while ( $related_items->have_posts() ) : $related_items->the_post();
                ?>
                <div class="col-xl-3">
                    <div class="single-rwork">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('alvon-420-280'); ?></a>
                    </div>
                </div>
                <?php endwhile;endif;wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <!-- releted-works-end -->
<?php }
    } 
} ?>

<?php get_footer(); ?>