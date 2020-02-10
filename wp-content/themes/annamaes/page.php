<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php

if(get_field('header')): ?>
<section class="page-hero" style="background-image: url('<?php the_field('header_background'); ?>');">
	<h1><?php the_title(); ?></h1>
</section>
<?php endif; ?>
<div class="site-content">
	<div class="main-container">
		<div class="main-grid">
			<main class="main-content-full-width">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				<?php endwhile; ?>
				<?php if($post->post_parent=='128' || is_page(12)): ?>
					<?php if(is_page(12)): ?>
						<?php if(get_field('group_meals_menu', 'option')): ?><div class="centered"><a class="button large" href="<?php the_field('group_meals_menu', 'option'); ?>" target="_blank">Download the Menu</a></div><?php endif; ?>
					<?php endif; ?>
					<?php get_template_part('template-parts/menus'); ?>
				<?php endif; ?>
				<?php if(is_page(16)): ?>
					<?php get_template_part('template-parts/businesses', ''); ?>
				<?php endif; ?>
			</main>
		</div>
	</div>
</div>
<?php
get_footer();
