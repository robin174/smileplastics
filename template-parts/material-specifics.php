<section class="org--material-specifics ut--block-margin">
	<div class="container">
		<div class="row g-0 d-flex">
			<div class="col-12 col-lg-6">
				<div class="d-flex justify-content-center justify-content-lg-end">
					<figure>
						<img class="mw-100" src="<?php the_field('panel_image_file'); ?>">
						<?php if( get_field('panel_caption_position') == 'overlaylight' && get_field('panel_caption_position_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-overlaylight atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } elseif( get_field('panel_caption_position') == 'overlaylight' && get_field('panel_caption_position_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-overlaylight atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } elseif( get_field('panel_caption_position') == 'overlaydark' && get_field('panel_caption_position_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } elseif( get_field('panel_caption_position') == 'overlaydark' && get_field('panel_caption_position_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-overlaydark atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } elseif( get_field('panel_caption_position') == 'rotated' ) { ?>
							<figcaption class="atm--fc-rotated"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } elseif( get_field('panel_caption_position') == 'default' && get_field('panel_caption_position_lr') == 'captionleft' ) { ?>
							<figcaption class="atm--fc-default atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } elseif( get_field('panel_caption_position') == 'default' && get_field('panel_caption_position_lr') == 'captionright' ) { ?>
							<figcaption class="atm--fc-default atm--fc-right"><i class="far fa-long-arrow-up"></i><?php the_field('panel_image_caption'); ?></figcaption>
						<?php } ?>
					</figure>
				</div>
			</div>
			<div class="col-10 col-lg-6 align-self-center">
				<section class="mol--5050-content">
					<div class="mol--material-specs">
						<?php if( have_rows('panel_specifics') ): ?>
							<?php while( have_rows('panel_specifics') ): the_row(); ?>
								<?php if( have_rows('pm_specifics_repeater') ): ?>
									<h3>Panel Specifics</h3>
									<?php while( have_rows('pm_specifics_repeater') ): the_row(); ?>
										<?php get_template_part('template-parts/repeater-panel-specifics'); ?>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if (get_sub_field('pm_add_note')): ?>
									<div class="mol--material-add">
										<h5><i class="far fa-exclamation-triangle"></i>Note</h5>
										<p><?php the_sub_field('pm_specifics_note'); ?></p>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>		
						<?php endif; ?>
					</div>
					<div class="mol--material-specs">
						<?php if( have_rows('panel_sizes') ): ?>
							<?php while( have_rows('panel_sizes') ): the_row(); ?>
								<?php if( have_rows('pm_sizes_repeater') ): ?>
									<h3>Panel Sizes</h3>
									<?php while( have_rows('pm_sizes_repeater') ): the_row(); ?>
										<?php get_template_part('template-parts/repeater-panel-sizes'); ?>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if (get_sub_field('pm_add_note')): ?>
									<div class="mol--material-add">
										<h5><i class="far fa-exclamation-triangle"></i>Note</h5>
										<p><?php the_sub_field('pm_sizes_note'); ?></p>
									</div>
									<hr>
								<?php endif; ?>
							<?php endwhile; ?>		
						<?php endif; ?>
						<?php if( have_rows('panel_thicks') ): ?>
							<?php while( have_rows('panel_thicks') ): the_row(); ?>
								<?php if( have_rows('pm_thicks_repeater') ): ?>
									<?php while( have_rows('pm_thicks_repeater') ): the_row(); ?>
										<?php get_template_part('template-parts/repeater-panel-thicks'); ?>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if (get_sub_field('pm_add_note')): ?>
									<div class="mol--material-add">
										<h5><i class="far fa-exclamation-triangle"></i>Note</h5>
										<p><?php the_sub_field('pm_thicks_note'); ?></p>
									</div>
								<?php endif; ?>
							<?php endwhile; ?>		
						<?php endif; ?>
					</div>
					<div>
						<?php if (get_field('panel_cta_add')): ?>
							<?php if( have_rows('panel_button') ): ?>
								<?php while( have_rows('panel_button') ): the_row(); ?>
									<div class="atm--button-cta">
										<a class="button button-cta" href="<?php the_sub_field('panel_button_link'); ?>"><?php the_sub_field('panel_button_command'); ?><i class="far fa-long-arrow-right"></i></a>
									</div>
								<?php endwhile; ?>		
							<?php endif; ?>
						<?php endif; ?>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>