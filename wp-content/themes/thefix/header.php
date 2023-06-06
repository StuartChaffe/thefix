<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="/favicon.png">
<?php wp_head(); ?>
<?php get_template_part('partials/global', 'analytics'); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('partials/global', 'browser-notice'); ?>

<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<a id="skip-nav" class="skip-nav screen-reader-text" href="#content">Skip to main content</a>
<?php
	$bkg = get_field('bkg_colour');
	$header = get_field('show_header');
?>
<div class="global-container <?php echo $bkg; ?><?php if ( 'post' == get_post_type() ) { ?> body--purple<?php } ?>">

<?php get_template_part('partials/global', 'alert'); ?>
<?php if($header == 'True') { ?><?php get_template_part('partials/site', 'header'); ?><?php } ?>
