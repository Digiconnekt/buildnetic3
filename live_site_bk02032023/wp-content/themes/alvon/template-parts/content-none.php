<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package alvon
 */

if( function_exists( 'alvon_framework_init' ) ) {
?>

<section class="no-results not-found">
	<div class="search-header">
		<h1 class="blog-title"><?php echo esc_html( alvon_get_option( 'search_none_page_title' ) ); ?></h1>
	</div><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'alvon' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php echo esc_html( alvon_get_option( 'search_none_page_desc' ) ); ?></p>

		<div class="search-none-search-bar">
			<?php get_search_form(); ?>
		</div>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'alvon' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

<?php } else { ?>

<section class="no-results not-found">
	<div class="search-header">
		<h1 class="blog-title"><?php esc_html_e( 'Nothing Found', 'alvon' ); ?></h1>
	</div><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'alvon' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'alvon' ); ?></p>
		<div class="search-none-search-bar">
			<?php get_search_form(); ?>
		</div>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'alvon' ); ?></p>
			<?php get_search_form(); ?>
			
		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
<?php } ?>