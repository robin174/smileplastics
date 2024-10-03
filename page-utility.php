<?php
/**
* Template Name: Page - Utility
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

	<?php if(is_page('panels')) : ?>
		<?php get_template_part('template-parts/material-specifics'); ?>
	<?php endif; ?>

	<!-- Page Builder -->
	<?php get_template_part ('template-parts/all-page-builder'); ?>
</section>

<?php get_footer(); // to counter php close tag issue