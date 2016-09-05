<?php
get_header();
?>

<h1> Ajax Page... </h1>

<input type="button" id="ajax1" name="ajax call!" value="Ajax Call !">


<div id="ajax_content"></div>


<?php
get_footer();
?>

<script>

$(document).ready(function(){

	$('#ajax1').click(function(){
		
		$.ajax({
			type:'POST',
			url:ajaxurl,
			data:{
            	action:'ajax_call',
            	post_id:24395,          
       		 },
       		dataType: 'html',			
			success:function(data){
				$('#ajax_content').html(data);
			},
		});
	});

});

</script>