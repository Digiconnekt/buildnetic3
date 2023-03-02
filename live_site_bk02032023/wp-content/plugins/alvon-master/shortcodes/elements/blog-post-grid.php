<?php 
/*------------------------------------------------------------------------------------------------------------------*/
/*  Alvon Blog Section
/*------------------------------------------------------------------------------------------------------------------*/
vc_map(array(
  'base' => 'alvon_blog_posts',
  'name' => esc_html__('Blog Posts', 'alvon'),
  'category' => esc_html__('Alvon', 'alvon'),
  'icon' => 'fal fa-edit',
  'params' => array(

    array(
      "param_name" => "posts_per_page",
      "type" => "textfield",
      "std" => esc_html__("3", "alvon"),
      "heading" => esc_html__("Posts Per Page", "alvon"),
    ),
    array(
      "param_name" => "content_expcerpt",
      "type" => "textfield",
      "heading" => esc_html__("Content Excerpt Length", "alvon"),
    ),
    array(
      'param_name' => 'posts_order',
      'type' => 'dropdown',
      'heading' => __( 'Select Post Order',  "alvon" ),
      'value' => array(
        __( 'Select Post Order',  "alvon"  ) => ' ',
        __( 'Ascending Order',  "alvon"  ) => 'ASC',
        __( 'Descending Order',  "alvon"  ) => 'DESC',
      ),
      "description" => __( "Select your post order ascending  or descending columns", "alvon" )
    ),
    array(
      'param_name' => 'blog_post_column',
      'type' => 'dropdown',
      'heading' => esc_html__( 'Please post columns',  "alvon" ),
      'value' => array(
        esc_html__( 'Select your columns',  "alvon"  ) => ' ',
        esc_html__( 'Columns 2',  "alvon"  ) => '6',
        esc_html__( 'Columns 3',  "alvon"  ) => '4',
        esc_html__( 'Columns 4',  "alvon"  ) => '3',
      ),
    ),
    array(
        "param_name" => "no_post_thumb",
        "type" => "checkbox",
        "heading" => "Post thumb no ?",
        "value" => array(
          "" => "true"
        ),
    ),
    array(
      "param_name" => "hide_post_author",
      "type" => "checkbox",
      "class" => "",
      "heading" => esc_html__( "Hide post author?", "alvon" ),
      "description" => esc_html__( "If you want to hide post author please check the box", "alvon" )
    ),
    array(
      "param_name" => "hide_post_date",
      "type" => "checkbox",
      "class" => "",
      "heading" => esc_html__( "Hide post date?", "alvon" ),
      "description" => esc_html__( "If you want to hide post date please check the box", "alvon" )
    ),
    array(
      "param_name" => "hide_post_text",
      "type" => "checkbox",
      "class" => "",
      "heading" => esc_html__( "Hide post text?", "alvon" ),
      "description" => esc_html__( "If you want to hide post text please check the box", "alvon" )
    ),
    array(
      'param_name' => 'post_style',
      'type' => 'dropdown',
      'heading' => __( 'Select Post Style',  "alvon" ),
      "std" => esc_html__("1", "alvon"),
      'value' => array(
        __( 'Select Style',  "alvon"  ) => ' ',
        __( 'Style 1',  "alvon"  ) => '1',
        __( 'Style 2',  "alvon"  ) => '2',
      ),
      "description" => __( "Select your post order ascending  or descending columns", "alvon" )
    ),
    array(
      "param_name" => "post_custom_class",
      "type" => "textfield",
      "heading" => esc_html__("Post custom class", "alvon"),
    ),
    
  ),
));


/*  Blog post grid shortcode
/*-----------------------------------------------------------------------*/

add_shortcode( 'alvon_blog_posts', 'alvon_blog_posts_shortcode' );
function alvon_blog_posts_shortcode($atts, $content = null) {
  extract( shortcode_atts(
    array(
      'posts_per_page'    => '3',
      'content_expcerpt'  => '20',
      'posts_order'       => 'ASC',
      'blog_post_column'  => '4',
      'no_post_thumb'     => '',
      'hide_post_author'  => '',
      'hide_post_date'    => '',
      'hide_post_text'    => '',
      'post_style'        => '1',
      'post_custom_class' => '',
      ), $atts )
  );
  ob_start();

if ($blog_post_column == '6') {
  $crop_img = 'alvon-blog-640-450';
} elseif ($blog_post_column == '4') {
  $crop_img = 'alvon-blog-640-450';
} elseif ($blog_post_column == '3') {
  $crop_img = 'alvon-blog-640-450';
} else {
  $crop_img = 'full';
}

?>

<div class="row">

  <?php
    $the_query = new WP_Query( array(
      'post_type' => 'post',
      'posts_per_page' => $posts_per_page,
      'order' => $posts_order,
    ) );
    while ( $the_query->have_posts() ) : $the_query->the_post();
    $content = get_the_content(get_the_ID());


    $default_post_metadata = get_post_meta( get_the_ID(), '_alvon_post', true);

    if (!empty($default_post_metadata['post_format_type'] )) {
      $post_format_type = $default_post_metadata['post_format_type'];
    } else {
      $post_format_type = '';
    }

    if (!empty($default_post_metadata['video_type'] )) {
      $video_type = $default_post_metadata['video_type'];
    } else {
      $video_type = '';
    }
    if (!empty($default_post_metadata['video_link'] )) {
      $video_link = $default_post_metadata['video_link'];
    } else {
      $video_link = '';
    }
    if (!empty($default_post_metadata['audio_link'] )) {
      $audio_link = $default_post_metadata['audio_link'];
    } else {
      $audio_link = '';
    } 
  ?>

  <div class="col-lg-<?php echo esc_attr( $blog_post_column ); ?> col-md-6">
    <?php if ( $post_style == 1 ) { ?>
    <div class="single-post mb-30 <?php echo esc_attr( $post_custom_class ); ?>">
      <?php if ($post_format_type == 'alvon-video') { 
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
      <div class="blog-thumb video-blog p-relative">
        <?php the_post_thumbnail( $crop_img );
          if (!empty($video_link)) {
        ?>
          <a href="<?php echo esc_url( $video_link ); ?>" class="popup-video"><i class="far fa-play"></i></a>
        <?php } ?>
      </div>
      <?php } 
      } elseif ($post_format_type == 'alvon-audio') { 
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
         <div class="blog-thumb embed-responsive embed-responsive-16by9">
          <iframe src="<?php echo esc_url( $audio_link ); ?>"></iframe>
        </div>
      <?php } 
      } else { 
        if(has_post_thumbnail()) {
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
        <div class="blog-thumb">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $crop_img ); ?></a>
        <?php } 
        } ?>
        </div>
      <?php } ?>

      <div class="post-content">
        <div class="post-meta">
          <ul>
            <?php if ( ! $hide_post_author == 'true') { 
              $author_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
            ?>
            <li>
              <i class="fal fa-user"></i><?php echo esc_html_e( 'By', 'alvon' ); ?> <a href="<?php echo esc_url( $author_link ); ?>"><?php the_author(); ?></a>
            </li>
            <?php } if ( ! $hide_post_date == 'true') { ?>
            <li><i class="fal fa-calendar-alt"></i> <?php echo esc_html( get_the_date() ); ?> </li>
            <?php } ?>
          </ul>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php if ( ! $hide_post_text == 'true') { ?>
        <p><?php echo alvon_excerpt( $content_expcerpt ); ?></p>
        <?php } ?>
      </div>
    </div>
    <?php } elseif ( $post_style == 2 ) { ?>
    <div class="single-post s-single-post mb-30 <?php echo esc_attr( $post_custom_class ); ?>">
      <?php if ($post_format_type == 'alvon-video') { 
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
      <div class="blog-thumb video-blog p-relative">
        <?php the_post_thumbnail( $crop_img );
          if (!empty($video_link)) {
        ?>
          <a href="<?php echo esc_url( $video_link ); ?>" class="popup-video"><i class="far fa-play"></i></a>
        <?php } ?>
      </div>
      <?php } 
      } elseif ($post_format_type == 'alvon-audio') { 
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
         <div class="blog-thumb embed-responsive embed-responsive-16by9">
          <iframe src="<?php echo esc_url( $audio_link ); ?>"></iframe>
        </div>
      <?php } 
      } else { 
        if(has_post_thumbnail()) {
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
        <div class="blog-thumb">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $crop_img ); ?></a>
        <?php } 
        } ?>
        </div>
      <?php } ?>
      <div class="post-content">
        <div class="post-meta">
          <ul>
            <?php if ( ! $hide_post_author == 'true') { 
              $author_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
            ?>
            <li>
              <i class="fal fa-user"></i><?php echo esc_html_e( 'By', 'alvon' ); ?> <a href="<?php echo esc_url( $author_link ); ?>"><?php the_author(); ?></a>
            </li>
            <?php } if ( ! $hide_post_date == 'true') { ?>
            <li><i class="fal fa-calendar-alt"></i> <?php echo esc_html( get_the_date() ); ?> </li>
            <?php } ?>
          </ul>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php if ( ! $hide_post_text == 'true') { ?>
        <p><?php echo alvon_excerpt( $content_expcerpt ); ?></p>
        <?php } ?>
      </div>
    </div>
    <?php } else { ?>
    <div class="single-post mb-30 <?php echo esc_attr( $post_custom_class ); ?>">
      <?php if ($post_format_type == 'alvon-video') { 
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
      <div class="blog-thumb video-blog p-relative">
        <?php the_post_thumbnail( $crop_img );
          if (!empty($video_link)) {
        ?>
          <a href="<?php echo esc_url( $video_link ); ?>" class="popup-video"><i class="far fa-play"></i></a>
        <?php } ?>
      </div>
      <?php } 
      } elseif ($post_format_type == 'alvon-audio') { 
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
         <div class="blog-thumb embed-responsive embed-responsive-16by9">
          <iframe src="<?php echo esc_url( $audio_link ); ?>"></iframe>
        </div>
      <?php } 
      } else { 
        if(has_post_thumbnail()) {
        if ( ! ( $no_post_thumb == 'true') ) {
      ?>
        <div class="blog-thumb">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $crop_img ); ?></a>
        <?php } 
        } ?>
        </div>
      <?php } ?>

      <div class="post-content">
        <div class="post-meta">
          <ul>
            <?php if ( ! $hide_post_author == 'true') { 
              $author_link = get_author_posts_url( get_the_author_meta( 'ID' ) );
            ?>
            <li>
              <i class="fal fa-user"></i><?php echo esc_html_e( 'By', 'alvon' ); ?> <a href="<?php echo esc_url( $author_link ); ?>"><?php the_author(); ?></a>
            </li>
            <?php } if ( ! $hide_post_date == 'true') { ?>
            <li><i class="fal fa-calendar-alt"></i> <?php echo esc_html( get_the_date() ); ?> </li>
            <?php } ?>
          </ul>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php if ( ! $hide_post_text == 'true') { ?>
        <p><?php echo alvon_excerpt( $content_expcerpt ); ?></p>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>

  <?php endwhile; wp_reset_postdata(); ?>

</div>

<!-- End Of Blog
============================================= -->

<?php
  return ob_get_clean();
}