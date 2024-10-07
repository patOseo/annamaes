<?php  
/**
 * Menus Block
 *
 * @package annamaes
 */

 $class_name = 'block-menus mb-5';

if ( ! empty( $block['className'] ) ) {
   $class_name .= ' ' . $block['className'];
}

?>

<div class="<?php echo esc_attr($class_name); ?>">
<?php if(have_rows('menu_section')): ?>
	<section class="food-menus">
	
		<?php while(have_rows('menu_section')): the_row();
			$menutitle = get_sub_field('title');
			$menuimage = get_sub_field('menu_image');
			$desc = get_sub_field('description');
			$addinfo = get_field('additional_info');
		?>
		<div class="food-menu mt-4 row">
			<div class="col-12 text-center">
				<h2 class="bg-dark text-white p-3"><?php echo $menutitle; ?></h2>
				<p class="food-menu-desc py-3"><?php echo $desc; ?></p>
				<?php if( !empty( $menuimage ) ): ?>
                    <?php echo wp_get_attachment_image($menuimage, 'full', '', array('class' => 'mb-5 w-100')); ?>
				<?php endif; ?>
			</div>
			<?php if(have_rows('menu_items')): ?>
				<?php while(have_rows('menu_items')): the_row(); ?>
					<div class="col-lg-6 mb-4 mb-lg-5">
						<div class="food-menu-item h-100 shadow-sm p-3 p-lg-4 lh-1">
							<h3 class="h4 mb-0"><?php echo get_sub_field('title'); ?></h3>
							<?php if(get_sub_field('description')): ?><p class="item-desc py-3 fs-sm"><?php echo get_sub_field('description'); ?></p><?php endif; ?>
							<?php if(get_sub_field('price')): ?><p class="item-price fw-bold mb-0">$<?php echo get_sub_field('price'); ?></p><?php endif; ?> 
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			<div class="col-12">
				<p><?php the_sub_field('additional_info'); ?></p>
			</div>
		</div>
			<?php endwhile; ?>
			<?php echo $addinfo; ?>

	</section>
<?php endif; ?>
</div>