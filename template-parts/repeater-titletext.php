 <?php if( have_rows('halfp_titletext') ): ?>
    <?php while( have_rows('halfp_titletext') ): the_row(); ?>
    	<?php if(get_sub_field('halfp_logo')) : ?>
			<figure class="atm--repeater-logo">
				<img src="<?php the_sub_field('halfp_logo'); ?>">
			</figure>
		<?php endif; ?>
    	<section class="mol--repeater-text">
			<h3><?php the_sub_field('halfp_title')?></h3>
			<?php the_sub_field('halfp_text')?>
		</section>
    <?php endwhile; ?>
<?php endif; ?>