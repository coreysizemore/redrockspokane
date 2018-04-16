<?php
	
	/*
		@package WordPress
		@subpackage endor
	*/
	 
?>

<div class="main coloredbg <?php echo basename(get_permalink()); ?>">
	
	<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="container"><div class="row gutters"><div class="col_12"><div class="breadcrumb_wrapper"><span class="breadcrumbs">','</span></div></div></div></div>');} ?>
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_12">
				
				<div class="content">
	
					<?php get_template_part( 'loops/loop', 'blog' ); ?>
					
				</div>
				
			</div>
			
		</div>
	
	</div>
	
</div>

<?php get_template_part( 'sidebars/sidebar' , 'blog' ); ?>
	
	