<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$images = get_field('images');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php
		the_content();
		?>

		<?php if(have_rows('businesses')): ?>
			<div class="container">
				<?php while(have_rows('businesses')): the_row(); ?>
					<?php $url = get_sub_field('website'); ?>
					<div class="business mb-4 mb-lg-5 p-4 shadow-sm row">
						<?php if(get_sub_field('image_logo')): $image = get_sub_field('image_logo'); ?>
						<div class="col-lg-3">
							<?php echo wp_get_attachment_image($image, 'full'); ?>
						</div>
						<?php endif; ?>
						<div class="col-lg">
							<?php if(get_sub_field('name')): ?><?php if($url) { ?><a class="text-decoration-none" href="<?php echo $url; ?>" target="_blank"><?php } ?><h3 class="text-uppercase p-3 bg-dark text-white fw-light"><?php the_sub_field('name'); ?></h3><?php if($url) { ?></a><?php } ?><?php endif; ?>
							<?php if(get_sub_field('email')): ?><p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p><?php endif; ?>
							<?php if(get_sub_field('phone_number')): ?><p><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></p><?php endif; ?>
							<?php if(get_sub_field('description')): ?><p><?php the_sub_field('description'); ?></p><?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>


		<?php if (have_rows('history_tabs')): ?>
		<section class="history">
			<div class="container">
				<div class="row">
					<div class="history-slider">
						<?php while (have_rows('history_tabs')): the_row(); ?>
							<div class="history-slide">
								<h2 class="hblock"><?php the_sub_field('date'); ?><br><?php the_sub_field('heading'); ?></h2>
									<p><?php the_sub_field('content'); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

		<?php if($images): ?>
    	    <div class="image-gallery container">
				<div class="swiper slider-container no-swiping position-relative" id="gallerySlider">
					<div class="swiper-wrapper">
						<?php foreach($images as $image_url): ?>
							<div class="swiper-slide" style="background: url(<?php echo $image_url['url']; ?>) no-repeat center/contain;">
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
				
			</div>
    	<?php endif; ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
