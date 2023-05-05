<div class="site-footer__outer">
<footer class="site-footer bkg--dark-grey">
	<div class="site-footer__inner">
		<h3 class="heading-1 txt--white">Explore</h3>
		<nav class="site-footer__nav">
			<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
		</nav>

		<ul class="social-links">
		<?php if(get_field('twitter', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('twitter', 'options'); ?>" class="social-links__link"><?php echo get_icon('twitter'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('facebook', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('facebook', 'options'); ?>" class="social-links__link"><?php echo get_icon('facebook'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('instagram', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('instagram', 'options'); ?>" class="social-links__link"><?php echo get_icon('instagram'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('youtube', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('youtube', 'options'); ?>" class="social-links__link"><?php echo get_icon('youtube'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('linkedin', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('linkedin', 'options'); ?>" class="social-links__link"><?php echo get_icon('linkedin'); ?></a></li>
		<?php endif; ?>
		<?php if(get_field('patreon', 'options')): ?>
			<li class="social-links__item"><a href="<?php the_field('patreon', 'options'); ?>" class="social-links__link"><?php echo get_icon('patreon'); ?></a></li>
		<?php endif; ?>
		</ul>
	</div>
</footer>
</div>
