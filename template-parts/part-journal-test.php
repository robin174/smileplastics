<div class="masonry-brick col-12 col-md-6 col-lg-4 col-xxl-3">
	<section class="org--journal">
		<section class="mol--journal-image">
			<figure>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="mw-100" src="<?php the_field('featured_image'); ?>" alt="<?php the_title(); ?>"></a>
			</figure>
		</section>
		<section class="mol--journal-content">
			<p class="atm--journal-category"><?php the_category(' / '); ?></p>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div class="atm--button-cta">
				<a class="button button-cta" href="<?php the_permalink(); ?>">Read more<i class="far fa-long-arrow-right"></i></a>
			</div>
		</section>
	</section>
</div>