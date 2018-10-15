<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	
	if( get_field('secondary_navigation') ):
	
		if ( has_nav_menu( 'secondary_nav' ) ):
		
	    	echo get_template_part( 'misc/secondarynav' );
	    	    	
	    endif;
    
    endif;
    
    if ( is_active_sidebar( 'attention-sidebar-1' ) ):
	 
		get_template_part( 'sidebars/sidebar' , 'attentiontop' );
	
	endif;

	if( get_field('display_call_out_boxes') ):
	
		get_template_part( 'misc/calloutboxes' );
	
	endif;

	echo '<div id="main" class="';
	
	echo basename(get_permalink());
	
	echo '">';
	
	if( get_field('default_editor')):
	
		echo '<div class="default_editor"><div class="container"><div class="row gutters">';
	
		if( get_field('sidebar_selection') == 'right' ):
	
			echo '<div class="col_8"><div class="content">';
	
			get_template_part( 'loops/loop', 'page' );

			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;

			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;

			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;

			echo '</div></div><div class="col_4">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			echo '</div>';
		
		endif;
	
		if( get_field('sidebar_selection') == 'none' ):
		
			echo '<div class="col_12"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
			
			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;
			
			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;
		
			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
		
			echo '</div></div>';
		
		endif;
		
		if( get_field('sidebar_selection') == 'left' ):
		
			echo '<div class="col_4">';
			
			get_template_part( 'sidebars/sidebar' , 'primary' );
			
			echo '</div><div class="col_8"><div class="content">';
			
			get_template_part( 'loops/loop', 'page' );
		
			if( get_field('gallery') ):
			
				get_template_part( 'misc/gallery' );
				
			endif;
			
			if( get_field('accordion') ):
			
				get_template_part( 'misc/accordion' );
				
			endif;
		
			if( get_field('tabs') ):
			
				get_template_part( 'misc/tabs' );
				
			endif;
			
			echo '</div></div>';
		
		endif;
		
		echo '</div></div></div>';
	
	endif;
	
	if(is_user_logged_in()):
	
		echo '<div class="edit_button"><span class="edit">';
		
		edit_post_link();
		
		echo '</span></div>';
	
	endif;
	
	echo '</div>';

	if( have_rows('services_home') ):
	
		$items = get_field('services_home');
	
		echo '<div class="services_home"><div class="container"><div class="row gutters">';
		
		foreach( $items as $serv ):
		
			echo '<div class="col_4"><div class="services_home_item content">';
			
			$image = $serv['image'];
			
			if ($image):
			
				echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
			
			endif;
			
			if ( $serv['content'] ):
			
				echo $serv['content'];
				
			endif;
			
			echo '</div></div>';
		
		endforeach;
			
		echo '</div></div></div>';
		
	endif;
	
	get_template_part( 'misc/parallax' );

	if( get_field('attention_bottom' )):
	
		if ( is_active_sidebar( 'attention-sidebar-2' ) ):
	 
			get_template_part( 'sidebars/sidebar' , 'attentionbottom' );
		
		endif;
		
	endif;
?>