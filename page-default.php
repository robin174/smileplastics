<?php
/**
* Template Name: Page - Default
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main">
	<?php get_template_part('template-parts/header-hero'); ?>
	
	<div class="container">
		<div class="row g-0 d-flex">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); // to counter php close tag issue