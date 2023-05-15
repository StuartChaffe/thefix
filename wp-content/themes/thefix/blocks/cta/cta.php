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
		<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
    <form action="https://thefixcopywriting.us14.list-manage.com/subscribe/post?u=b40d8ff30b827df1c04f595d2&amp;id=9460ffd2a4&amp;f_id=002789e0f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
        <div id="mc_embed_signup_scroll">
        <h2></h2>
        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" required>
	<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b40d8ff30b827df1c04f595d2_9460ffd2a4" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
		<?php if($form) { ?><div class="cta__form"><?php echo $form; ?></div><?php } ?>
		<?php if($image) { ?><div class="cta__image"><img class="" src="<?php echo $image['url'];?>" alt="<?php echo $image['url'];?>" /></div><?php } ?>
	</div>
</section>