<?php  
/**
 * Blog Feed Block
 *
 * @package annamaes
 */

 $class_name = 'block-home-slider mt-n4 mb-5';

if ( ! empty( $block['className'] ) ) {
   $class_name .= ' ' . $block['className'];
}

$images = get_field('slides');
$award = get_field('award_logo');
$size = 'full';

$blocks = array(
    array('core/group', 
        array(
            'name' => 'core/group',
        ),
        array(
            array('core/paragraph', array(
                'content' => 'Annamaes',
            )),
        ),
    ),
);

?>

<div class="<?php echo esc_attr($class_name); ?>">
    <?php if($images): ?>
        <div class="swiper slider-container no-swiping position-relative" id="homeSlider">
            <div class="home-slider-content position-absolute top-50 start-50 translate-middle w-100">
                <div class="container-fluid ps-xl-5">
                    <InnerBlocks template="<?php echo esc_attr( wp_json_encode( $blocks ) ); ?>" />
                </div>
            </div>
            <div class="position-absolute bottom-0 end-0 m-5 award-logo">
                <?php echo wp_get_attachment_image($award, 'full'); ?>
            </div>
            <div class="swiper-wrapper">
                <?php foreach($images as $image_url): ?>
                    <div class="swiper-slide" style="background: url(<?php echo $image_url; ?>) no-repeat center/cover;">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</div>

