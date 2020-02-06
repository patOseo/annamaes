<?php
/*
Template Name: History
*/
get_header(); ?>

<div class="site-content">
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'custom' ); ?>
				<?php endwhile; ?>
			</main>
		</div>
	</div>

<section class="history">
	<div class="grid-container">
		<div class="grid-x">
			<div class="history-slider">
				<?php if (have_rows('history_tabs')): ?>
					<?php while (have_rows('history_tabs')): the_row(); ?>
						<div class="history-slide">
							<h2 class="hblock"><?php the_sub_field('date'); ?><br><?php the_sub_field('heading'); ?></h2>
								<p><?php the_sub_field('content'); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
</div>
<script>
$(document).ready(function(){
	$('.history-slider').slick({
		arrows: false,
		dots: true,
		fade: true
	});
});
</script>
<?php get_footer();
