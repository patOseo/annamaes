<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php  
$images = get_field('slides');
$size = 'full';
?>

<header class="front-hero" role="banner">
	<div class="front-slider">
		<?php if ($images): ?>
			<?php foreach ($images as $image): ?>
				<div class="slide-content" style="background-image: url('<?php echo $image; ?>');"></div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
<h2>The Full<br><span>Mennonite Experience</span></h2>
<img class="tripadvisor" src="/wp-content/themes/annamaes/dist/assets/images/tripadvisor.png" alt="2019 Traveller's Choice Award by TripAdvisor">
</header>

<?php while ( have_posts() ) : the_post(); ?>
<div class="site-content">
	<section class="intro" role="main">
	
			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</div>
	
	</section>
</div>
<?php endwhile; ?>

<?php get_template_part('template-parts/content', 'bakery'); ?>

<section class="food-hero">
	<div class="grid-container">
		
	</div>
</section>

<!-- <div class="section-divider">
	<hr />
</div> -->

<script>
$(document).ready(function(){
	$('.front-slider').slick({
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		pauseOnHover: false
	});
});
</script>

<?php get_footer();
