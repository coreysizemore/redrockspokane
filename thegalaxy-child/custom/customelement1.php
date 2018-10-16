<?php
	
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
	
?>