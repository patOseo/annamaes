<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<?php if(get_field('header')): ?>
	<section class="page-hero mt-n4 mb-5 text-center" style="background-image: url('<?php the_field('header_background'); ?>');">
		<h1 class="position-absolute top-50 start-50 translate-middle text-uppercase text-white bg-black px-3 py-2"><?php the_title(); ?></h1>
	</section>
	<?php endif; ?>

	<div class="" id="content" tabindex="-1">

		<main class="site-main" id="main">

			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'page' );
			}
			?>

		</main>

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
