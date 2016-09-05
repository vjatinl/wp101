<h3> 
	<?php the_title(); ?> 
	<span style='font-size:14px; font-weight: 100;'> -- <?php the_time('d-M-Y'); ?>
	</span>
</h3> 
<p> <?php echo get_post_format(); ?> </p>
<div class='thumbnail-image'><?php the_post_thumbnail('thumbnail');?></div>
<p><?php the_content(); ?></p>
<br><hr><br>