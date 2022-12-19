<div>
	<div class="atm--material-display">
		<figure>
			<img class="mw-100" src="<?php the_field('mat_img_flat'); ?>">
		</figure>
	</div>
	<?php /*  To do this: Have one as a background image (styled inline) and image set to opacity 0, and then hover (no transition) on top? 
	<div class="mat"><!-- figure 02 --><figure>
		<a href="" title="<?php the_title(); ?>"><img class="mw-100" src="<?php the_field('mat_img_flat'); ?>"></a>
	</figure></div> 
	*/ ?>
	<div class="d-flex flex-column justify-content-between mol--material-card">
		<h3><?php the_title(); ?></h3>
		<h4 style="position:relative"><?php echo strip_tags(get_the_term_list( $post->ID, 'collection', ' ',', ')); ?></h4>
		<div class="d-flex flex-column text-center">
			<h5>Thickness</h5>
			<ul>
				<li>5mm&nbsp;&nbsp;•&nbsp;&nbsp;12mm&nbsp;&nbsp;•&nbsp;&nbsp;20mm</li>
			</ul>
		</div>
	</div>
</div>