<?php
/**
* The template for displaying a single project
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">
	<!-- Homepage Hero -->
	<?php get_template_part('template-parts/header-hero'); ?>

	<!-- Page Introduction -->
	<?php get_template_part('template-parts/page-introduction'); ?>
	
	<!-- Block Default -->
	<?php get_template_part('template-parts/block-default'); ?>

	<!-- Page Builder -->
	<?php get_template_part ('template-parts/all-page-builder'); ?>
</section>

<?php get_footer(); // to counter php close tag issue