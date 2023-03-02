<?php
defined( 'ABSPATH' ) or die();

$site_classes[] = sprintf( 'header-position-%s', nanosoft_option( 'header__position' ) );

?>

<!DOCTYPE html>
<html <?php language_attributes() ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />

		<?php wp_head() ?>
	</head>
	<body <?php body_class() ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
		<?php do_action( 'theme/above_site_wrapper' ) ?>

		<div id="site" class="site wrap <?php echo esc_attr( join( ' ', $site_classes ) ) ?>">
			<?php get_template_part( 'tmpl/header' ) ?>

			<div id="site-content" class="site-content">
				<?php do_action( 'nanosoft_content_top' ) ?>

				<div id="content-body" class="content-body">
					<div class="content-body-inner wrap">