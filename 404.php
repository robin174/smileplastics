<?php
/**
* The template for displaying 404 pages (not found)
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
* @package SMILEPLASTIC
*/
get_header(); ?>

	<section class="templ--single-page mol--page-main">
	<?php get_template_part('template-parts/header-hero'); ?>

		<section class="org--hero-page ut--block-margin">
			<div class="container">
				<div class="row g-0">
					<div class="col-12">
						<figure>
							<img class="mw-100" src="<?php the_field('404_header_image', 'options');?>">
						</figure>
					</div>
				</div>
			</div>
		</section>

		<section class="org--introduction-page ut--block-margin">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<h1 class="atm--introduction"><?php the_field('404_page_title', 'options') ?></h1>
						<p class="atm--introduction"><?php the_field('404_page_description', 'options') ?></p>
						<div class="atm--button-cta">
							<a class="button button-cta" href="<?php echo esc_url( home_url( '/' ) ); ?>">Return to Homepage<i class="far fa-long-arrow-right"></i></a>
						</div> 
					</div>
				</div>
			</div>
		</section>

	<?php get_template_part('template-parts/page-introduction'); ?>


</section>
	
<?php get_footer(); 
