<?php if(get_field('title_heading') || get_field('title_introduction')): ?>

	<section class="org--introduction-page ut--block-margin">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10">
					<?php if(get_field('title_heading') ): ?>
						<h1 class="atm--introduction"><?php the_field('title_heading') ?></h1>
					<?php endif; ?>
					<?php if(get_field('title_introduction') ): ?>
						<p class="atm--introduction"><?php the_field('title_introduction') ?></p>
					<?php endif; ?>
					<?php if (get_field('title_cta')): ?>
						<div class="atm--button-cta">
							<?php if(get_field('title_cta_select') == 'link' ) { ?>
								<a class="button button-cta" href="<?php the_field('title_cta_link'); ?>"><?php the_field('title_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
							<?php } elseif(get_field('title_cta_select') == 'file' ) { ?>
								<a class="button button-cta" href="<?php the_field('title_cta_file'); ?>" target="_blank"><?php the_field('title_cta_command'); ?><i class="far fa-long-arrow-right"></i></a>
							<?php } ?> 
						</div> 
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>