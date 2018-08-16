<?php
		
	/*
		@package WordPress
		@subpackage thegalaxy-child
	*/
	 
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>> 
    
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="Expires" content="30" />
        
	<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
	<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
	<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
	<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->
    
	<title><?php wp_title('|',true,'right'); ?></title>
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>   
	     
</head>

<body <?php body_class(); ?>>
    
