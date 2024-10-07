<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<?php if(is_home()): ?>
				<h1 class="mt-5 hblock">Media <strong>Coverage</strong></h1>
			<?php endif; ?>
			
			<div class="row">
				<div class="col-md-8 content-area" id="primary">
					<main class="site-main" id="main">
						<?php
						if ( have_posts() ) {
							// Start the Loop.
							while ( have_posts() ) {
								the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'loop-templates/content', get_post_format() );
							}
						} else {
							get_template_part( 'loop-templates/content', 'none' );
						}
						?>
					</main>
					<?php
					// Display the pagination component.
					understrap_pagination();
					?>
				<?php
				// Do the right sidebar check and close div#primary.
				get_template_part( 'global-templates/right-sidebar-check' );
				?>
			</div>

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
