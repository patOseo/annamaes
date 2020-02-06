<?php if(have_rows('menu_section')): ?>
	<section class="food-menus">
	
		<?php while(have_rows('menu_section')): the_row();
			$menutitle = get_sub_field('title');
			$menuimage = get_sub_field('menu_image');
			$desc = get_sub_field('description');
			$addinfo = get_field('additional_info');
		?>
		<div class="food-menu grid-x grid-margin-x">
			<div class="large-12 cell">
				<h2><?php echo $menutitle; ?></h2>
				<p class="food-menu-desc"><?php echo $desc; ?></p>
				<?php if( !empty( $menuimage ) ): ?>
				    <img class="menu-image" src="<?php echo esc_url($menuimage['url']); ?>" alt="<?php echo esc_attr($menuimage['alt']); ?>" />
				<?php endif; ?>
				
			</div>
			<?php if(have_rows('menu_items')): ?>
				<?php while(have_rows('menu_items')): the_row(); ?>
					<div class="large-6 cell">
						<div class="food-menu-item">
							<h3><?php the_sub_field('title'); ?></h3>
							<p class="item-desc"><?php the_sub_field('description'); ?></p>
							<p class="item-price">$<?php the_sub_field('price'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="large-12 cell">
				<p><?php the_sub_field('additional_info'); ?></p>
			</div>
		</div>
			<?php endwhile; ?>
			<?php echo $addinfo; ?>

	</section>
<?php endif; ?>