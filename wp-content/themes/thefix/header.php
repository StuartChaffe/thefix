<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="/favicon.png">
<?php wp_head(); ?>
<?php get_template_part('partials/global', 'analytics'); ?>
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '688064026415779');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=688064026415779&ev=PageView&noscript=1"
/></noscript>
<script type="text/javascript">
_linkedin_partner_id = "5113066";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(l) {
if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
window.lintrk.q=[]}
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})(window.lintrk);
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=5113066&fmt=gif" />
</noscript>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('partials/global', 'browser-notice'); ?>

<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<a id="skip-nav" class="skip-nav screen-reader-text" href="#content">Skip to main content</a>
<?php
	$bkg = get_field('bkg_colour');
	$header = get_field('hide_header');
?>
<div class="global-container <?php echo $bkg; ?><?php if ( 'post' == get_post_type() ) { ?> body--purple<?php } ?>">

<?php get_template_part('partials/global', 'alert'); ?>
<?php if($header == '0' || is_single()) { ?><?php get_template_part('partials/site', 'header'); ?><?php } ?>
