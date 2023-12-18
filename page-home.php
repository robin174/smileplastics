<?php
/**
* Template Name: Page - Home
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

		<!-- Slider: Testimonials -->
		<?php get_template_part('template-parts/testimonial-slider-splide'); ?>

		<!-- Worked With -->
		<?php get_template_part('template-parts/part-workedwith'); ?>

		<!-- Quote -->
		<?php /* 
		<?php get_template_part('template-parts/blockquote-brand'); ?>
		*/ ?>
	</section>

<?php get_footer(); // to counter php close tag issue