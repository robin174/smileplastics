<?php if( have_rows('shipping_titletext') ): ?>
    <?php while( have_rows('shipping_titletext') ): the_row(); ?>

    	<section class="org--5050-shipping">
			<div class="row g-0 d-flex">
				<div class="col-12 col-md-6 align-self-start">
					<h3><?php the_sub_field('shipping_title')?></h3>
				</div>
				<div class="col-12 col-md-6 align-self-start">
					<?php the_sub_field('shipping_text')?>
				</div>
			</div>
		</section>

    <?php endwhile; ?>
<?php endif; ?>