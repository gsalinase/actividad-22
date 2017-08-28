
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta http-equiv="<?php echo get_template_directory_uri();?>/content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta charset="UTF-8">
		<title><?php wp_title('|', true, 'right'); ?> Blue Arc Theme </title>
		<!--[if lt IE 9]>
		<script src="?>/js/html5.js"></script>
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/ie.css" type="text/css">
		<![endif]-->	

		<?php wp_head(); ?>

	</head>	

	<body>

<div id="tooplate_wrapper">
	
    <div id="tooplate_menu">
        <ul>
            <li><a href="http://localhost:8888/" class="current">Home</a></li>
            <li><a href="http://localhost:8888/about-us">About Us</a></li>
            <li><a href="http://localhost:8888/blog">Blog</a></li>
            <li><a href="http://localhost:8888/gallery">Gallery</a></li>
            <li class="last"><a href="http://localhost:8888/contact">Contact</a></li>
        </ul>    	