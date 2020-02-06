<?php
/*
Template Name: Restaurant
 */

get_header(); ?>

<section class="restaurant-hero" style="background-size:cover;background-repeat:no-repeat;">
	<div class="grid-container">
		<h2 class="hblock"><strong>RESTAURANT</strong></h2>
	<div class="bakery-list">
		<a href="/restaurant/breakfast/" class="button large">Breakfast</a>
	</div>
	<div class="bakery-list">
		<a href="/restaurant/sandwiches/" class="button large">Sandwiches</a>
	</div>
	<div class="bakery-list">
		<a href="/restaurant/hot-meals/" class="button large">Hot Meals</a>
	</div>
	<div class="bakery-list">
		<a href="/restaurant/meat-schedule/" class="button large">Meat Schedule</a>
	</div>
	<div class="bakery-list">
		<a href="/restaurant/desserts/" class="button large">Desserts</a>
	</div>
	<div class="bakery-list">
		<a href="/restaurant/gluten-free-vegan-vegetarian/" class="button large">Gluten-Free, Vegan & Vegetarian</a>
	</div>
</section>

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
