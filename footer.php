<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

<footer class="footer position-fixed bottom-0 start-0 w-100 vh-100 row mx-0 gx-0">
    <div class="footer-container align-self-center">
        <div class="footer-grid text-center px-3">
        	<div class="col">
        		<div class="footer-info">
					<?php if( get_field('footer_logo', 'option') ): ?>
        			<p class="mb-4">
						<?php echo wp_get_attachment_image(get_field('footer_logo', 'option'), 'full'); ?>
					</p>
					<?php endif; ?>
        			<p><?php echo get_field('footer_details', 'option'); ?></p>
        		</div>
        	</div>
        </div>
    </div>
</footer>

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

