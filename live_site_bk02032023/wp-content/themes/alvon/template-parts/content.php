<?php
/**
 * Template part for displaying posts.
 *
 * @package alvon
 */

if( function_exists( 'alvon_framework_init' ) ) {
  $content_excerpt = alvon_get_option('blog_post_excerpt_length');
  $blog_post_col_layout = alvon_get_option('blog_post_col_layout');
  $blog_post_admin = alvon_get_option('blog_post_admin');
  $blog_post_comments = alvon_get_option('blog_post_comments');

  if ( $blog_post_col_layout == 'col_2' ) {
    $col_layout = '6';
  } elseif ( $blog_post_col_layout == 'col_3' ) {
    $col_layout = '4';
  } elseif ( $blog_post_col_layout == 'col_4' ) {
    $col_layout = '3';
  } else {
    $col_layout = '12';
    $post_title_class = 'big-title';
  }
} else {
  $col_layout = '12';
  $blog_post_admin = 'true';
  $blog_post_comments = 'true';
  $post_title_class = 'big-title';
  $content_excerpt = '50';
}

if ($col_layout == '6') {
  $crop_img = 'alvon-450-350';
} elseif ($col_layout == '4') {
  $crop_img = 'alvon-450-350';
} elseif ($col_layout == '3') {
  $crop_img = 'alvon-450-350';
} else {
  $crop_img = 'full';
}

$post_title = get_the_title();
$post_content = get_the_content();

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

<div class="col-lg-<?php echo esc_attr( $col_layout ); ?>">
                                                                                                                              
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-post inner-single-post mb-30 <?php echo esc_attr( $post_format_type ); ?>">

      <?php if ($post_format_type == 'alvon-video') { ?>
        <div class="blog-thumb video-blog p-relative">
          <?php the_post_thumbnail();
            if (!empty($video_link)) {
          ?>
            <a href="<?php echo esc_url( $video_link ); ?>" class="popup-video"><i class="far fa-play"></i></a>
          <?php } ?>
        </div>
        <div class="post-content">
            <div class="post-meta">
                <ul>
                  <?php if ( $blog_post_admin == 'true') { ?>
                    <li><i class="fal fa-user"></i><?php esc_html_e('By ', 'alvon'); ?> <?php the_author_posts_link(); ?></li>
                  <?php } if ( $blog_post_comments == 'true') { ?>
                    <li><i class="fal fa-comments"></i> <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></li>
                  <?php } ?>
                </ul>
            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php if (!empty($post_content)) { ?>
              <p><?php echo alvon_excerpt( $content_excerpt ); ?></p>
            <?php } ?>
        </div>

      <?php } elseif ($post_format_type == 'alvon-audio') { ?>

        <div class="blog-thumb embed-responsive embed-responsive-16by9">
          <iframe src="<?php echo esc_url( $audio_link ); ?>"></iframe>
        </div>
        <div class="post-content">
          <div class="post-meta">
            <ul>
              <?php if ( $blog_post_admin == 'true') { ?>
                <li><i class="fal fa-user"></i><?php esc_html_e('By ', 'alvon'); ?> <?php the_author_posts_link(); ?></li>
              <?php } if ( $blog_post_comments == 'true') { ?>
                <li><i class="fal fa-comments"></i> <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php if (!empty($post_content)) { ?>
            <p><?php echo alvon_excerpt( $content_excerpt ); ?></p>
          <?php } ?>
        </div>

      <?php } else { ?>

        <?php if(has_post_thumbnail()) { ?>
          <div class="blog-thumb">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $crop_img ); ?></a>
          </div>                                                                                        
        <?php } ?>
        <div class="post-content">
          <div class="post-meta">
            <ul>
              <?php if ( $blog_post_admin == 'true') { ?>
                <li><i class="fal fa-user"></i><?php esc_html_e('By ', 'alvon'); ?> <?php the_author_posts_link(); ?></li>
              <?php } if ( $blog_post_comments == 'true') { ?>
                <li><i class="fal fa-comments"></i> <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php if (!empty($post_content)) { 
            if ($post_format_type != 'alvon-quote') {
          ?>
            <p><?php echo alvon_excerpt( $content_excerpt ); ?></p>
          <?php } 
          } ?>
        </div>

      <?php } ?>
      
    </div>
  </article>

</div>