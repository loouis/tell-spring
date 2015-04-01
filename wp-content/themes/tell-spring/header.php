<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>


	<!-- favicons for all devices  -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo(template_url);?>/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo(template_url);?>/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo(template_url);?>/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo(template_url);?>/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo(template_url);?>/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/<?php bloginfo(template_url);?>/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo(template_url);?>/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo(template_url);?>/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo(template_url);?>/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo(template_url);?>/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo(template_url);?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo(template_url);?>/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo(template_url);?>/img/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo(template_url);?>/img/manifest.json">
	<meta name="msapplication-TileColor" content="#009cd6">
	<meta name="msapplication-TileImage" content="<?php bloginfo(template_url);?>/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#009cd6">


	<!-- meta tags -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	<!-- media queries -->
	<meta name="viewport" content="width=device-width">

	<!-- enqueue scripts and styles -->
	<?php wp_head(); ?>

</head>
	<body <?php body_class( $class ); ?>>

	