<?php
	$posts = new WP_Query( array(
		'post_type' => 'guest',
		// 'taxonomy' => 'event_category',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
	));
?>

<?php if ($posts->have_posts()) { ?>
<section>
	<div class="container">
	<div class="guests">
	<?php while($posts->have_posts()) : $posts->the_post();
		$subtitle = get_field('subtitle', get_the_id());
		$desc = get_field('description', get_the_id());
		$image = get_field('photo', get_the_id());
		$link = get_field('video', get_the_id());
	?>
		<div class="guests-item bkg--grey">
			<?php if($image) { ?><div class="guests-item__image"><img class="" src="<?php echo $image['url'];?>" alt="<?php echo $image['url'];?>" /></div><?php } ?>
			<p class="lead"><strong><?php the_title(); ?></strong></p>
			<?php if($subtitle) { ?><p class="lead"><?php echo $subtitle; ?></p><?php } ?>
			<?php if($desc) { ?><p></p><?php echo $desc; ?></p><?php } ?>
			<?php if($link) { ?><a href="<?php echo $link['url'];?>" target="<?php echo $link['target'];?>" class="btn btn--primary"><?php echo $link['title'];?></a><?php } ?>
		</div>
	<?php endwhile; wp_reset_query(); ?>
	</div>
	</div>
</section>
<?php } ?>
