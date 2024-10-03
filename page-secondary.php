<?php
/**
* Template Name: Page - Secondary
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">
	<!-- Homepage Hero -->
	<?php get_template_part('template-parts/header-hero'); ?> 

	<?php /*
	<!-- Page Introduction -->
	<?php get_template_part('template-parts/page-introduction'); ?>
	*/ ?>

	<!-- Page Builder -->
	<?php get_template_part ('template-parts/all-page-builder'); ?>
</section>

<?php get_footer(); // to counter php close tag issue