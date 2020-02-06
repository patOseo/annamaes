<?php if(have_rows('businesses')): ?>
	<?php while(have_rows('businesses')): the_row(); ?>
		<?php $url = get_sub_field('website'); ?>
		<div class="business grid-x grid-margin-x">
			<?php if(get_sub_field('image_logo')): $image = get_sub_field('image_logo'); ?>
			<div class="large-3 cell">
				<?php echo wp_get_attachment_image($image, 'full'); ?>
			</div>
			<?php endif; ?>
			<div class="large-auto cell">
				<?php if(get_sub_field('name')): ?><?php if($url) { ?><a href="<?php echo $url; ?>" target="_blank"><?php } ?><h3 class="hblock"><strong><?php the_sub_field('name'); ?></strong></h3><?php if($url) { ?></a><?php } ?><?php endif; ?>
				<?php if(get_sub_field('email')): ?><p><a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p><?php endif; ?>
				<?php if(get_sub_field('phone_number')): ?><p><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></p><?php endif; ?>
				<?php if(get_sub_field('description')): ?><p><?php the_sub_field('description'); ?></p><?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>