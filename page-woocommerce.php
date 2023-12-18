<?php
/**
* Template Name: Page - Woocommerce
* @package smileplastics
*/

get_header('shop'); ?>

<section class="templ--single-page mol--page-product">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-9">
				<?php while(have_posts()) : the_post(); ?>
					<?php the_content();?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */