<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package alvon
 */

?> 

<div class="bdetails-wrap">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="bdetails-content">
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
    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
            edit_post_link(
              sprintf(
                wp_kses(
                  /* translators: %s: Name of current post. Only visible to screen readers */
                  __( 'Edit <span class="screen-reader-text">%s</span>', 'alvon' ),
                  array(
                    'span' => array(
                      'class' => array(),
                    ),
                  )
                ),
                get_the_title()
              ),
              '<span class="edit-link">',
              '</span>'
            );
          ?>
        </footer><!-- .entry-footer -->
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