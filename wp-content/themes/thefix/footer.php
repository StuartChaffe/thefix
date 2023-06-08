<?php
	$footer = get_field('hide_footer');
?>
<?php if($footer == '0') { ?><?php get_template_part('partials/site', 'footer'); ?><?php } ?>
<?php get_template_part('partials/global', 'cookie-notice'); ?>
</div><!-- /.global-container -->
<?php wp_footer(); ?>
</body>
</html>
