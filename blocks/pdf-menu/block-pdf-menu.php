<?php  
/**
 * PDF Menu Block
 *
 * @package annamaes
 */

$btn_text = get_field('button_text');
$pdf = get_field('upload_pdf');

?>

<div class="text-center mb-4"><a class="btn btn-md btn-primary rounded-0 text-white text-uppercase" href="<?= $pdf; ?>" target="_blank"><?= $btn_text; ?></a></div>