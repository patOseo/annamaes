<?php  
/**
 * Page Header Block
 *
 * @package annamaes
 */

 $class_name = 'block-page-header';

if ( ! empty( $block['className'] ) ) {
   $class_name .= ' ' . $block['className'];
}

$bg = get_field('background_image');

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <section class="page-header-hero align-items-center row d-block mx-0 mt-n4 py-5" style="background-image: url('<?php echo wp_get_attachment_image_url($bg, 'full'); ?>');">
    	<div class="col py-5">
    		<div class="container py-5">
                <h1 class="hblock text-uppercase"><strong><?php echo get_field('heading'); ?></strong></h1>
                <?php if(have_rows('list_of_pages')): ?>
                    <?php while(have_rows('list_of_pages')): the_row(); ?>
                        <div class="restaurant-list mb-3">
                            <a href="<?php echo get_sub_field('link'); ?>" class="btn btn-md btn-primary border-0 text-uppercase text-white rounded-0"><?php echo get_sub_field('title'); ?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>