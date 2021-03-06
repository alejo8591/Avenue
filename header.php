<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/listing.css" media="screen" />	
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('bxslider', get_stylesheet_directory_uri() .'/js/jquery.bxSlider.min.js');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js'); 
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
wp_head(); 
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44206438-1', 'westhouseinmobiliaria.com');
  ga('send', 'pageview');

</script>

</head>
<body>



<div id="masthead">

<div id="head">

<div id="top" class="clearfix"> 
	<div id="blogname">
		<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
	</div>
	
	<div id="contactlist">
		<div class="rphone">
		<span>Comuníquese</span><br/>
		<p><?php $my_phone =get_option('aven_my_phone'); echo $my_phone ?></p>
		</div>
		<div class="rmail">
		<span>Email</span><br/>
		<p><?php $my_mail =get_option('aven_my_email'); echo $my_mail ?></p>
		</div>
	</div>

</div>

<div id="botmenu">
	<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
</div><!-- END botmenu -->
	
</div>

</div><!--end masthead-->
<div id="wrapper"> 
<div id="casing">