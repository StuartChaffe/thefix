<?php get_header(); 
$button = get_field('posts_back', 'options');
?>

<?php while ( have_posts() ) : the_post(); ?>
	<article id="content">
		<div class="container">
			<div class="card bkg--white">
				<span class="card__hole bkg--purple">&nbsp;</span>
				<div class="card__date"><p><?php the_date('d.m.Y'); ?></p></div>
				<div class="card__title"><h1 class="heading-3"><?php the_title(); ?></h1></div>
				<?php the_content(); ?>
			</div>
			<?php if($button) { ?><a href="<?php echo $button['url'];?>" class="btn"><?php echo $button['title'];?></a><?php } ?>
		</div>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
