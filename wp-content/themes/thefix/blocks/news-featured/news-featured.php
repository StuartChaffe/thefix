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
<div class="news__featured bkg--purple">
	<div class="container txt--white">
		<h1>Latest Blog Post</h1>
		<?php while($featured->have_posts()) : $featured->the_post(); ?>
		<div class="card bkg--white txt--black">
			<span class="card__hole bkg--purple">&nbsp;</span>

		 	<div class="card__date"><p><?php the_date('d.m.Y'); ?></p></div>
			<div class="card__title"><h3><?php the_title(); ?></h3></div>
			<?php if(has_excerpt()) { ?><div class="card__excerpt"><?php the_excerpt(); ?></div><?php } ?>

			<div class="btn--group">
				<a href="<?php esc_url( the_permalink() ); ?>" title="Article: <?php the_title(); ?>" class="btn btn--primary">Read this post</a>
				<a href="/blog" class="btn">See all posts</a>
			</div>
		</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</div>
<?php } ?>