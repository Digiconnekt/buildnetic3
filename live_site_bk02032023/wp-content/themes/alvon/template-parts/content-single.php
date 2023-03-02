<?php
/**
 * Template part for displaying single posts.
 *
 * @package alvon
 */

if( function_exists( 'alvon_framework_init' ) ) {

  $blog_single_post_admin = alvon_get_option('blog_single_post_admin');
  $blog_single_post_date = alvon_get_option('blog_single_post_date');
  $blog_single_post_comments = alvon_get_option('blog_single_post_comments');
  $blog_single_post_cats = alvon_get_option('blog_single_post_cats');
  $blog_single_post_tags = alvon_get_option('blog_single_post_tags');
  $blog_single_post_share = alvon_get_option('alvon_post_share_enable');
} else {
  $blog_single_post_admin = 'true';
  $blog_single_post_date = 'true';
  $blog_single_post_comments = 'true';
  $blog_single_post_cats = 'true';
  $blog_single_post_tags = 'true';
  $blog_single_post_share = 'false';
}

$tags_list = get_the_tags(); 
if( function_exists( 'alvon_framework_init' ) ) {
  $post_share_enable = alvon_get_option('alvon_post_share_enable');
} else {
  $post_share_enable = '';
}

if ($post_share_enable) {
  $tags_list_cols = '4';
} else {
  $tags_list_cols = '8';
}

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

<div class="inner-single-post bdetails-wrap">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-feature-data">
      <?php if ($post_format_type == 'alvon-video') { ?>
        <div class="blog-thumb video-blog p-relative">
          <?php the_post_thumbnail();
            if (!empty($video_link)) {
          ?>
            <a href="<?php echo esc_url( $video_link ); ?>" class="popup-video"><i class="far fa-play"></i></a>
          <?php } ?>
        </div>
      <?php } elseif ($post_format_type == 'alvon-audio') { ?>
        <div class="blog-thumb embed-responsive embed-responsive-16by9">
          <iframe src="<?php echo esc_url( $audio_link ); ?>"></iframe>
        </div>
      <?php } else {
        if(has_post_thumbnail()) { ?>
          <div class="blog-thumb">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>                                                                                        
      <?php } 
        } ?>
    </div>
    <div class="post-content">
        <div class="post-meta">
          <ul>
            <?php if ( $blog_single_post_admin == 'true') { ?>
              <li><i class="fal fa-user"></i><?php esc_html_e('By ', 'alvon'); ?> <?php the_author_posts_link(); ?></li>
            <?php } if ( $blog_single_post_date == 'true') { ?>
              <li><i class="fal fa-calendar-alt"></i> <?php echo esc_html( get_the_date() ); ?></li>
            <?php } if ( $blog_single_post_comments == 'true') { ?>
              <li><i class="fal fa-comments"></i> <a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></a></li>
            <?php } if ( $blog_single_post_cats == 'true') { ?>
              <li><i class="fal fa-tags"></i> <?php the_category(', '); ?></li>
            <?php } ?>
          </ul>
        </div>
        <?php 
          the_content();
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'alvon' ),
            'after'  => '</div>',
            'link_before' => '<span>',
            'link_after'  => '</span>',
          ) ); 
        ?>
    </div>
    <?php
      if(!empty($tags_list) || !empty($post_share_enable) ){ 
        $textalign = 'text-right';
        if(!empty($post_share_enable)) {
          $cols = '6';
        } else {
          $cols = '12';
        }
    ?>
    <div class="row tags-share">
      <?php 
      if ( $blog_single_post_tags == 'true') { 
        if(!empty($tags_list)){ ?>
        <div class="col-xl-<?php echo esc_attr( $cols ); ?>">
          <div class="post-tag">
            <h5><?php esc_html_e( 'Tags :', 'alvon' ) ?></h5>
            <?php the_tags( '<ul class="type"><li>', '</li> <li>', '</li></ul>' ); ?>
          </div>
        </div>
      <?php } else {
          $textalign = 'text-left';
        }
      } if(!empty($post_share_enable)) { ?>
      <div class="col-xl-6 <?php echo esc_attr( $textalign ); ?>">
        <?php do_action( 'alvon_social_share_media' ); ?>
      </div>
      <?php } ?>
    </div>
    <?php } ?>

    <?php alvon_post_nav(); ?>

    <?php if (get_the_author_meta('description')) : // Checking if the user has added any author descript or not. If it is added only, then lets move ahead ?>
    <div class="avatar-wrap text-center mb-45 mt-110">
      <div class="avatar-img">
        <?php echo get_avatar(get_the_author_meta('user_email'), '120'); ?>
      </div>
      <div class="avatar-info">
        <h5><?php esc_html(the_author_meta('display_name')); ?></h5>
        <?php
            $facebook = get_the_author_meta('facebook', $post->post_author);
            $twitter = get_the_author_meta('twitter', $post->post_author);
            $instagram = get_the_author_meta('instagram', $post->post_author);
            $behance = get_the_author_meta('behance', $post->post_author);
            $linkedin = get_the_author_meta('linkedin', $post->post_author);
        ?>
        <div class="avatar-info-social">
          <?php if(!empty($facebook)) { ?>
          <a href="<?php echo esc_url( $facebook ); ?>"><i class="fab fa-facebook-f"></i></a>
          <?php } if(!empty($twitter)) { ?>
          <a href="<?php echo esc_url( $twitter ); ?>"><i class="fab fa-twitter"></i></a>
          <?php } if(!empty($instagram)) { ?>
          <a href="<?php echo esc_url( $instagram ); ?>"><i class="fab fa-instagram"></i></a>
          <?php } if(!empty($behance)) { ?>
          <a href="<?php echo esc_url( $behance ); ?>"><i class="fab fa-behance"></i></a>
          <?php } if(!empty($linkedin)) { ?>
          <a href="<?php echo esc_url( $linkedin ); ?>"><i class="fab fa-linkedin"></i></a>
          <?php } ?>
        </div>
      </div>
      <div class="avatar-wrap-content">
          <p><?php esc_textarea(the_author_meta('description')); ?></p>
      </div>
    </div>
    <?php endif; ?>

  </article>

  <!-- blog Comment Section
  ============================== -->
  <?php // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif; 
  ?>
</div>