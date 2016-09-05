<html>

<head>
	<title> Practise Theme </title>
        <?php wp_head(); ?>
    
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    
    <script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
	</script>
</head>

<body <?php body_class();?>>

<div>
    
<h1> <img src="<?php header_image(); ?>">HEADER </h1>
<hr>
<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
<hr>