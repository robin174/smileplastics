<?php
/**
* Template Name: Page - Fluent Form
* @package smileplastics
*/
get_header(); ?>

<section class="templ--single-page mol--page-main fluent-forms">

	<div class="container">
		<div class="row g-0 justify-content-center">
			<div class="col-11 col-md-8 col-lg-6">
				<?php the_field('form_shortcode'); ?>
			</div>
		</div>
	</div>

</section>



<?php get_footer(); // to counter php close tag issue