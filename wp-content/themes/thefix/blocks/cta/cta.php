<?php
	$content = get_field('content');
	$image = get_field('image');
	$form = get_field('form');
	$bkg = get_field('bkg');
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/list', 'core/image');
?>
<section class="cta <?php echo $bkg; ?>">
	<div class="container">
	<?php if($allowed_blocks) { ?>
		<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>
	<?php } ?>
	<?php if($content) { ?><?php echo $content; ?><?php } ?>

	<div class="cta__form-outer">
		<?php if($form) { ?><div class="cta__form"><?php echo $form; ?></div><?php } ?>
		<?php if($image) { ?><div class="cta__image"><img class="" src="<?php echo $image['url'];?>" alt="<?php echo $image['url'];?>" /></div><?php } ?>
	</div>
</section>