<?php
	$content = get_field('content');
	$bkg = get_field('bkg');
	$size = get_field('size');
	$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/buttons', 'core/image', 'core/list', 'core/separator', 'core/gallery', 'core/embed', 'core/spacer', 'acf/banner', 'acf/featured-programmes', 'acf/pagelinks');
?>

<?php if($allowed_blocks) { ?>

<?php if ($size == 'Full') { ?>
<section class="content-block content-block--full <?php echo $bkg; ?>">
	<div class="container">
<?php } else { ?>
<section class="content-block container">
	<div class="content-block__inner <?php echo $bkg; ?>">
<?php } ?>

<?php if($content) { ?><?php echo $content; ?><?php } ?>
<?php echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />'; ?>

	</div>
</section>

<?php } ?>