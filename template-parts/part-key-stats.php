<section class="org--stats">
	<div class="container">
		<div class="row">

			<?php if( have_rows('stats_repeater', 'options') ): ?>
				<?php while( have_rows('stats_repeater', 'options') ) : the_row(); ?>
					<div class="col-12 col-md-4">
						<div class="mol--stat d-flex flex-column align-items-center">
							<div class="atm--stat-icon d-flex justify-content-center">
								<?php the_sub_field('stats_icon_code', 'options'); ?>
							</div>
							<h2 class="atm--stat-main"><?php the_sub_field('stats_number', 'options'); ?></h2>
							<p class="atm--stat-desc"><?php the_sub_field('stats_fact', 'options'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>
</section>