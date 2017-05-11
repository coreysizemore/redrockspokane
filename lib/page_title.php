<?php
	
	/*
		Custom Page Title's
	*/


	function csdd_the_title($before = '', $after = '', $echo = true) {
		$title = csdd_get_the_title();
		if ( strlen($title) > 0 ) {
			$title = apply_filters('the_title', $before . $title . $after, $before, $after);
			if ( $echo )
				echo $title;
			else
				return $title;
		}
	}
	
	function csdd_get_the_title($id = 0) {
		$post = &get_post($id);
		$title = $post->post_title;
		return $title;
	}

?>