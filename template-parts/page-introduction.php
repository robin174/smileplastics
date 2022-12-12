<section class="org--introduction-home">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<h1><?php the_field('title_heading') ?></h1>
				<p><?php the_field('title_introduction') ?></p>
				<?php if (get_field('title_cta')): ?>
					<div class="atm--button-cta d-flex justify-content-center">
						<a class="button button-cta" href="<?php the_field('title_cta_link'); ?>"><?php the_field('title_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>