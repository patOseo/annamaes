<?php
/*
Template Name: Restaurant
 */

get_header(); ?>

<section class="restaurant-hero">
	<div class="grid-container">
		<h1 class="hblock"><strong>RESTAURANT</strong></h1>
	<div class="restaurant-list list-breakfast">
		<a href="/restaurant/breakfast/" class="button large">Breakfast</a>
	</div>
	<div class="restaurant-list list-sandwiches">
		<a href="/restaurant/sandwiches/" class="button large">Sandwiches</a>
	</div>
	<div class="restaurant-list list-hotmeals">
		<a href="/restaurant/hot-meals/" class="button large">Hot Meals</a>
	</div>
	<div class="restaurant-list list-takeout">
		<a href="/restaurant/take-out/" class="button large">Take Out</a>
	</div>
	<div class="restaurant-list list-meat">
		<a href="/restaurant/meat-schedule/" class="button large">Meat Schedule</a>
	</div>
	<div class="restaurant-list list-desserts">
		<a href="/restaurant/desserts/" class="button large">Desserts & Beverages</a>
	</div>
	<div class="restaurant-list list-glutenfree">
		<a href="/restaurant/gluten-conscious-vegan-vegetarian/" class="button large">Gluten-Conscious, Vegan & Vegetarian</a>
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
