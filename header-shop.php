<?php
/**
* @package smileplastics
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"><!-- What is this? -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" />	

		<!-- Font: Icon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="https://kit.fontawesome.com/8bb130beab.js" crossorigin="anonymous"></script>

		<!-- GA4: Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-XX50PJ94F7"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-XX50PJ94F7');
		</script>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="container">
			<header> 
				<?php get_template_part('template-parts/nav-walker5'); ?>
			</header>
		</div>
		<main>
