 <?php if( have_rows('halfp_titletext') ): ?>
    <?php while( have_rows('halfp_titletext') ): the_row(); ?>
    	<section class="mol--repeater-text">
			<h3><?php the_sub_field('halfp_title')?></h3>
			<?php the_sub_field('halfp_text')?>
		</section>
    <?php endwhile; ?>
<?php endif; ?>