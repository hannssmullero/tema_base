<!DOCTYPE html>
<html lang="en">
	<html <?php language_attributes(); ?> prefix="og:http://ogp.me/ns#">
<head>
	<?php if ( is_home() ) {?>
		<title><?php bloginfo('name') ?></title>
	<?php } else { ?>	
		<title><?php wp_title('|',true,'right'); ?> <?php bloginfo('name') ?> </title>
	<?php }	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name=”title” content=”<?php wp_title('|',true,'right'); ?>  <?php bloginfo('name') ?> ” />
	<meta name="description" content= "" />
	<meta name="keywords" content="">
	<meta name="robots" content="Index,Follow">
	<meta name="Author" content="">
	<meta name="Generator" content="Wordpress">
	<meta name="Lenguage" content="Es">
	<script src="//cdn.rawgit.com/matthieua/WOW/master/dist/wow.min.js"></script>
	<script>
	  new WOW().init();
	</script>
	<link href='https://fonts.googleapis.com/css?family=Montserrat|Roboto+Condensed|Raleway|Open+Sans+Condensed:300|Open+Sans'>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "e59586f4-8b71-47b4-b888-02a6fd8fecea", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

	
	<?php wp_head() ?>
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->

	<!-- [if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

		<!-- Preloader -->
		<script type="text/javascript">
		    //<![CDATA[
		       /* $(window).load(function() { // makes sure the whole site is loaded
		            $('#status').fadeOut(); // will first fade out the loading animation
		            $('#preloader').delay(500).fadeOut('slow'); // will fade out the white DIV that covers the website.
		            $('body').delay(500).css({'overflow':'visible'});
		            $('.controls').delay(600).css({'display':'block'});
		        })*/
		    //]]>
		</script>
</head>
<!--<div style="color:#fff; background:#000; font-weight:bold; font-size:197%; z-index: 90000; position:fixed; padding:7px 10px; -moz-border-radius-bottomright: 10px/*{cornerRadius}*/; -webkit-border-bottom-right-radius: 10px/*{cornerRadius}*/; -khtml-border-bottom-right-radius: 10px/*{cornerRadius}*/; border-bottom-right-radius: 10px/*{cornerRadius}*/;">BETA<br/>Version</div>-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
