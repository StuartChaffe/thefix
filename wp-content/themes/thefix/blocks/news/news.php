<?php
	$featured = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => 1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
	global $wp_query;
	$tmp_query = $wp_query;
	$wp_query = null;
	$wp_query = $featured;
?>
<?php if ($featured->have_posts()) { ?>
	<div class="news__featured container">
		<h1>Latest Blog Post</h1>
		<?php while($featured->have_posts()) : $featured->the_post(); ?>
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card bkg--white">
			<span class="card__hole bkg--purple">&nbsp;</span>

		 	<div class="card__date"><p><?php the_date('d.m.Y'); ?></p></div>
			<div class="card__title"><h3><?php the_title(); ?></h3></div>
			<?php if(has_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<span class="btn btn--primary">Read this post</span>
		</a>
		<?php endwhile; wp_reset_query(); ?>
	</div>
<?php } ?>

<?php
	$bkg = get_field('bkg');
	$content = get_field('block_content');
	$posts = new WP_Query( array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
	));
	$counter = 1;
?>
<section class="news <?php echo $bkg; ?>">
<?php if($content) { ?><div class="news__content"><?php echo $content; ?></div><?php } ?>
<?php if ($posts->have_posts()) { ?>
	<div class="container">
		<?php while($posts->have_posts()) : $posts->the_post(); ?>
		<?php if($counter++ > '1') { ?>  
		<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="card">
			<span class="card__hole <?php echo $bkg; ?>">&nbsp;</span>

		 	<div class="card__date"><p><?php the_date('d.m.Y'); ?></p></div>
			<div class="card__title"><p class="lead"><?php the_title(); ?></p></div>
			<?php if(has_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<span class="btn btn--primary">Read this post</span>
		</a>
		<?php } ?>
		<?php $counter++; ?>
		<?php endwhile; wp_reset_query(); ?>
	</div>
<?php } ?>
</section>
