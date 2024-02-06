<section class="org--edging-cols">
	<div class="container">
		<div class="row g-2">
			<!-- the count might need to sit outside the 'repeater' have_rows if there is an issue (came up on CT site) -->
			<?php if( have_rows('detail_edge', 'option') ): while ( have_rows('detail_edge', 'option') ) : the_row(); ?><!-- Group -->
				<?php $total_rows_edge = count(get_sub_field('repeater_detail_edge', 'option')); ?>
				<?php if( have_rows('repeater_detail_edge', 'option') ): while ( have_rows('repeater_detail_edge', 'option') ) : the_row(); ?>
					<?php if($total_rows_edge == ('3')){ ?>
						<div class="col-12 col-md-4">
							<figure class="mb-2">
								<img class="mw-100" src="<?php the_sub_field('edge_diagram', 'option'); ?>">
								<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('edge_caption', 'option');?></figcaption>
							</figure>
						</div>
					<?php } elseif($total_rows_edge == ('4')){ ?>
						<div class="col-12 col-md-6 col-lg-3">
							<figure class="mb-2">
								<img class="mw-100" src="<?php the_sub_field('edge_diagram', 'option'); ?>">
								<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('edge_caption', 'option');?></figcaption>
							</figure>
						</div>
					<?php } ?>
				<?php endwhile; endif; ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="row g-2">
			<?php if( have_rows('detail_joint', 'option') ): while ( have_rows('detail_joint', 'option') ) : the_row(); ?>
				<?php $total_rows_joint = count(get_sub_field('repeater_detail_joint', 'option')); ?>
				<?php if( have_rows('repeater_detail_joint', 'option') ): while ( have_rows('repeater_detail_joint', 'option') ) : the_row(); ?>
					<?php if($total_rows_joint == ('3')){ ?>
						<div class="col-12 col-md-4">
							<figure class="mb-2">
								<img class="mw-100" src="<?php the_sub_field('joint_diagram', 'option'); ?>">
								<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('joint_caption', 'option');?></figcaption>
							</figure>
						</div>
					<?php } elseif($total_rows_joint == ('4')){ ?>
						<div class="col-12 col-md-6 col-lg-3">
							<figure class="mb-2">
								<img class="mw-100" src="<?php the_sub_field('joint_diagram', 'option'); ?>">
								<figcaption class="atm--fc-overlaydark atm--fc-left"><i class="far fa-long-arrow-up"></i><?php the_sub_field('joint_caption', 'option');?></figcaption>
							</figure>
						</div>
					<?php } ?>
				<?php endwhile; endif; ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>