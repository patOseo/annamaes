<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 * @since 1.1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark bg-dark" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
	</h2>


	<div class="container-fluid">

	<a class="main-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php if(is_front_page()) { ?><img src="/wp-content/themes/annamaes/images/annamaes-white.png" alt="Anna Mae's Logo"><?php } else { ?><img src="/wp-content/themes/annamaes/images/annamaes-white.png" alt="Anna Mae's Logo"><?php } ?></a>

		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="offcanvas"
			data-bs-target="#navbarNavOffcanvas"
			aria-controls="navbarNavOffcanvas"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Open menu', 'understrap' ); ?>"
		>
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="offcanvas offcanvas-end bg-dark text-center" tabindex="-1" id="navbarNavOffcanvas">

			<div class="offcanvas-header justify-content-end">
				<button
					class="btn-close btn-close-white text-reset"
					type="button"
					data-bs-dismiss="offcanvas"
					aria-label="<?php esc_attr_e( 'Close menu', 'understrap' ); ?>"
				></button>
			</div><!-- .offcancas-header -->

			<!-- The WordPress Menu goes here -->
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'offcanvas-body',
					'container_id'    => '',
					'menu_class'      => 'navbar-nav justify-content-end flex-grow-1 pe-3 text-uppercase',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'depth'           => 2,
					'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
				)
			);
			?>
		</div><!-- .offcanvas -->

	</div><!-- .container(-fluid) -->

</nav><!-- #main-nav -->
