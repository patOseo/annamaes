<?php
/*
Template Name: Bakery
*/
get_header(); ?>

<?php get_template_part('template-parts/content', 'bakery'); ?>

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
</div>
<?php
get_footer();
