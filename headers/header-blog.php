<?php
	
	/*
		@package WordPress
		@subpackage endor
	*/
	 
?>

<?php
	
	if( get_field('member_login_bar', 'options') ):
	
		if(is_user_logged_in()):
		
			$current_user = wp_get_current_user();
			$display_name = $current_user->display_name;
			$username = $current_user->user_login;
				 
			if($display_name):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>Logged in as <span>';
				 
				echo $display_name;
				 	
				echo '</span><a href="';
				
				echo wp_logout_url( home_url() );
				
				echo '">Logout</a><span></div></div></div></div></div>';
				 	
			elseif($username):
				 
				echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span>';
				 
				echo $username;
				 	
				echo '<span></div></div></div></div></div>';
				 
			else:	
				 	
			endif;
		
		else:
		
			echo '<div id="loginbar"><div class="container"><div class="row gutters"><div class="col_12"><div class="username"><span><a href="';
			
			echo home_url('wp-admin');
				
			echo '">Member Login</a><span></div></div></div></div></div>';
			
		endif;
	
	endif;
		 
?>

<?php
	
	if( has_post_thumbnail() ):
	
		echo '<header class="header_page header_page_home page_default_image blog ' . basename(get_permalink()) . '" data-stellar-background-ratio="0.9">';	
		
	else :
	
		echo '<header class="header_page header_page_home page_default_image blog ' . basename(get_permalink()) . '" data-stellar-background-ratio="0.9">';		
	
	endif;
	
?>
	
	<?php get_template_part( 'sidebars/sidebar' , 'contact-information' ); ?>
	
	<div id="nav_bar">
		
		<div class="container">
			
			<div class="row gutters">
		
				<div class="col_2 first">
				
					<?php get_template_part( 'logos/logo', 'main' ); ?>
				
				</div>
				
				<div class="col_8">
				
					<?php get_template_part( 'navs/nav', 'main' ); ?>
				
				</div>
				
				<div class="col_2 last">
				
					<?php get_template_part( 'navs/nav', 'social' ); ?>
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="page_title" data-stellar-ratio="0.75">
		
		<h1 class="heading">Latest News</h1>
		
		<h2 class="subheading">Below is our latest news entries.</h2>
		
	</div>
	
</header>

<?php
	
	if( get_field('mobile_header_image') ):
	
		echo '<header class="header_page header_page_mobile blog ' . basename(get_permalink()) . '" style="background-image: url('; 
				
		the_field('mobile_header_image');
		
		echo ');">';
	
	elseif( has_post_thumbnail() ):
	
		echo '<header class="header_page header_page_mobile blog ' . basename(get_permalink()) . '" style="background-image: url('; 
				
		the_post_thumbnail_url( 'full' );
		
		echo ');">';
		
	else :
	
		echo '<header class="header_page header_page_mobile page_default_image blog ' . basename(get_permalink()) . '">';	
	
	endif;
	
?>
	
	<?php get_template_part( 'navs/nav', 'mobile' ); ?>
	
	<div id="nav_bar">
		
		<div class="container">
			
			<div class="row gutters">
		
				<div class="col_3">
				
					<?php get_template_part( 'logos/logo', 'main' ); ?>
				
				</div>
				
				<div class="col_9">
				
					<?php get_template_part( 'navs/nav', 'main' ); ?>
				
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="page_title">
		
		<h1 class="heading">Latest News</h1>
		
		<h2 class="subheading">Below is our latest news entries.</h2>
		
	</div>
	
</header>