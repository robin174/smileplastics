<?php
/**
* Template Name: Page - Woocommerce
* @package smileplastics
*/

get_header('shop'); ?>

<section class="mol--page-main">

	<section>
		<div class="container">
			<div class="row g-0 d-flex">
				<div class="col-12">
					<?php while(have_posts()) : the_post(); ?>
						<?php the_content();?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>

</section>

<?php get_footer();
/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */