<section class="org--workedwith">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-11 col-md-10 col-lg-8">

				<h1 class="text-center"><?php the_field('workedwith_title','options'); ?></h1>

				<?php if( have_rows('workedwith_repeater', 'options') ): ?>
					<?php while( have_rows('workedwith_repeater', 'options') ) : the_row(); ?>

						<?php if( get_sub_field('workedwith_select', 'options') == 'columns2' ) { ?>
							<?php if( have_rows('workedwith_repeater_2cols', 'options') ): ?>
								<div class="row mol--workedwith justify-content-center">
									<?php while( have_rows('workedwith_repeater_2cols', 'options') ) : the_row(); ?>
										<div class="col-12 col-md-6 d-flex justify-content-center">
											<figure>
												<img class="mw-100" src="<?php the_sub_field('workedwith_logo', 'options'); ?>" alt="Logo">
											</figure>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php } elseif( get_sub_field('workedwith_select', 'options') == 'columns3' ) { ?>
							<?php if( have_rows('workedwith_repeater_3cols', 'options') ): ?>
								<div class="row mol--workedwith justify-content-center">
									<?php while( have_rows('workedwith_repeater_3cols', 'options') ) : the_row(); ?>
										<div class="col-12 col-md-4 d-flex justify-content-center">
											<figure>
												<img class="mw-100 d-flex align-items-center justify-content-center" src="<?php the_sub_field('workedwith_logo', 'options'); ?>" alt="Logo" style="height:80px;">
											</figure>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php } elseif( get_sub_field('workedwith_select', 'options') == 'columns4' ) { ?>
							<?php if( have_rows('workedwith_repeater_4cols', 'options') ): ?>
								<div class="row mol--workedwith justify-content-center">
									<?php while( have_rows('workedwith_repeater_4cols', 'options') ) : the_row(); ?>
										<div class="col-6 col-md-3 d-flex justify-content-center">
											<figure>
												<img class="mw-100" src="<?php the_sub_field('workedwith_logo', 'options'); ?>" alt="Logo">
											</figure>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php } elseif( get_sub_field('workedwith_select', 'options') == 'columns5' ) { ?>
							<?php if( have_rows('workedwith_repeater_5cols', 'options') ): ?>
								<div class="row mol--workedwith justify-content-center">
									<?php while( have_rows('workedwith_repeater_5cols', 'options') ) : the_row(); ?>
										<div class="col-6 col-md-15 d-flex justify-content-center">
											<figure>
												<img class="mw-100" src="<?php the_sub_field('workedwith_logo', 'options'); ?>" alt="Logo">
											</figure>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						<?php } ?>
						
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>

	</div>
</section>