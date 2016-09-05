<?php
get_header();
?>

<h1> FAQ... </h1>


<?php 

	if($var = get_fields()) {
			
			foreach($var as $v=>$k)
			{
				print_r($v);
				print_r($k);
			}
	}

?>



<?php
get_footer();
?>