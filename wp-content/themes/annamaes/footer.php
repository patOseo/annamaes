<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
        	<div class="large-12 cell">
        		<div class="footer-info">
        			<p><img src="/wp-content/themes/annamaes/dist/assets/images/annamaes-footer.jpg" alt="Anna Mae's"></p>
        			<p><?php the_field('footer_details', 'option'); ?></p>
        		</div>
        	</div>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
