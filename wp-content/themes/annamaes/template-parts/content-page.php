<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php if(is_page_child(128) && !is_page(142) && !is_page(146)): ?>
			<?php if(get_field('restaurant_menu', 'option')): ?><div class="centered"><a class="button large" href="<?php the_field('restaurant_menu', 'option'); ?>" target="_blank">Download the Menu</a></div><?php endif; ?>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php $images = get_field('images'); $size = 'full'; $thumb = 'thumbnail'; ?>

		<?php if ($images): ?>
			<div class="image-slider">
				<?php foreach ($images as $image): ?>
					<?php echo wp_get_attachment_image($image['ID'], $size); ?>
				<?php endforeach; ?>
			</div>

			<?php 
			//$image_ids = get_field('images', false, false);
			//$shortcode = '[' . 'gallery ids="' . implode(',', $image_ids) . '"]'; 
			//
			//echo do_shortcode($shortcode);
			?>

		<script>
		$(function(){
			$('.image-slider').slick({
			  slidesToShow: 1,
			  slidesToScroll: 1,
			  arrows: true,
			  dots: true,
			  fade: true
			});

		});
		</script>
			
		<?php endif; ?>
		
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
