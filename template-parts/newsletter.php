<section class="org--newsletter">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<div class="mol--newsletter-intro text-center">
					<h2><?php the_field('title_newsletter', 'option'); ?></h2>
					<p><?php the_field('intro_newsletter', 'option'); ?></p>
				</div>
				<div class="mol--newsletter-form d-flex">
					<input class="flex-grow-1" placeholder="<?php the_field('placeholder_newsletter', 'option'); ?>">
					<button class="newsletter--signup"><?php the_field('button_newsletter', 'option'); ?></button>
				</div>
			</div>
		</div>
	</div>
</section>