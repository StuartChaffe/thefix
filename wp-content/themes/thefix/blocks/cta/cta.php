<?php
	$content = get_field('content');
	$bkg = get_field('bkg');
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/list', 'core/image');
?>
<section class="cta <?php echo $bkg; ?>">
	<div class="container">
	<?php if($allowed_blocks) { ?>
		<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>
	<?php } ?>
	<?php if($content) { ?><?php echo $content; ?><?php } ?>
	</div>
</section>