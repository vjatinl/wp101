<?php


	echo 'this is from ajax call';
	$wpdb = new WP_Query('pagename=ajax1');

	while($wpdb->have_posts()) : $wpdb->the_post();

		echo the_content();

	endwhile;
	

?>