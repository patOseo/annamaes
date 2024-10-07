<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site bg-white" id="page">
	<?php if(get_field('notification_bar_content', 'option')): ?>
		<div class="notification-bar alert alert-dismissible bg-secondary text-white text-center fade show mb-0 rounded-0" role="alert">
		  <small><?php echo get_field('notification_bar_content', 'option'); ?></small>
		  <button type="button" class="btn-close btn-white btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link <?php echo understrap_get_screen_reader_class( true ); ?>" href="#content">
			<?php esc_html_e( 'Skip to content', 'understrap' ); ?>
		</a>

		<?php get_template_part( 'global-templates/navbar-offcanvas-bootstrap5' ); ?>

	</header><!-- #wrapper-navbar -->
