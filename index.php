	<?php
get_header();
?>

<h1> CONTENT </h1>
<table>
	<tr>
		<td>
			<?php if(have_posts()){
			    
			    while(have_posts())
			    { ?>
			            <?php the_post(); ?>

			           <?php get_template_part('content', get_post_format()); ?>
			<?php    
			    }        
			}
			?>
		</td>
		<td>		
		<?php get_sidebar(); ?>
		</td>
	</tr>
</table>
<?php
get_footer();
?>