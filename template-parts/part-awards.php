<section class="org--awards">
	<div class="container">
		<div class="row">

			<?php if( have_rows('awards_repeater', 'options') ): ?>
				<?php while( have_rows('awards_repeater', 'options') ) : the_row(); ?>

					<div class="col-12 col-md-4">
						<div class="mol--stat d-flex flex-column align-items-center">
							
							<figure>
								<img src="<?php the_sub_field('awards_logo', 'options'); ?>" alt="Award Logo">
							</figure>

						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</section>