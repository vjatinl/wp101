<h3> Aside
	<?php the_title(); ?> 
	<span style='font-size:14px; font-weight: 100;'> -- <?php the_time('d-M-Y'); ?>
	</span>
</h3> 
<p> <?php echo get_post_format(); ?> </p>
<p><?php the_content(); ?></p>
<br><hr><br>