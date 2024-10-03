<section class="org--columns-chart">
	<div class="container">
		<div class="mol--columns-inner">
			<div class="row g-5">
				<!-- the count might need to sit outside the 'repeater' have_rows if there is an issue (came up on CT site) -->
				<?php if( have_rows('chart_columns', 'option') ): ?>
					<?php while( have_rows('chart_columns', 'option') ): the_row(); ?>
						<?php $total_rows = count(get_field('chart_columns', 'option')); ?>
						<?php if($total_rows == ('3')){ ?>
							<div class="col-12 col-lg-4">
								<section class="org--chart-column">
									<div class="mol--chart-header">
										<?php if (get_sub_field('chart_column_title', 'option')): ?>
											<h3><?php the_sub_field('chart_column_title', 'option');?></h3>
										<?php endif; ?>
										&nbsp;
									</div>
									<?php if( have_rows('column_content', 'option') ): ?>
	    								<?php while( have_rows('column_content', 'option') ): the_row(); ?>
											<div class="mol--chart-content">
												<?php if (get_sub_field('text_title', 'option')): ?>
				    								<h4><?php the_sub_field('text_title', 'option');?></h4>
				    							<?php endif; ?>
				    							<p><?php the_sub_field('text_content', 'option');?></p>
			    							</div>
			    						<?php endwhile; ?>
			    					<?php endif; ?>
		    					</section>
							</div>
						<?php } elseif($total_rows == ('4')){ ?>
							<div class="col-12 col-lg-3">
								<section class="org--chart-column">
									<div class="mol--chart-header">
										<?php if (get_sub_field('chart_column_title', 'option')): ?>
											<h3><?php the_sub_field('chart_column_title', 'option');?></h3>
										<?php endif; ?>
										&nbsp;
									</div>
									<?php if( have_rows('column_content', 'option') ): ?>
	    								<?php while( have_rows('column_content', 'option') ): the_row(); ?>
	    									<div class="mol--chart-content">
		    									<?php if (get_sub_field('text_title', 'option')): ?>
		    										<h4><?php the_sub_field('text_title', 'option');?></h4>
		    									<?php endif; ?>
		    									<p><?php the_sub_field('text_content', 'option');?></p>
		    								</div>
	    								<?php endwhile; ?>
									<?php endif; ?>
								</section>
							</div>
						<?php } ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>