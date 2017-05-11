<?php
	
	/*
		Widget support for a sidebars
	*/

	register_sidebar(array(
	  'name' => 'Contact Information (Optional)',
	  'id' => 'contact-information-sidebar',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s" class="contact_info_ul">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Announcement (Optional)',
	  'id' => 'announcement-sidebar',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Primary',
	  'id' => 'primary-sidebar',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Appointment (Optional)',
	  'id' => 'appointment-sidebar',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Blog Page Section 1',
	  'id' => 'blog-sidebar-1',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Blog Page Section 2',
	  'id' => 'blog-sidebar-2',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Contact Page',
	  'id' => 'contact-sidebar',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Footer Section 1',
	  'id' => 'footer-sidebar-1',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Footer Section 2',
	  'id' => 'footer-sidebar-2',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Footer Section 3',
	  'id' => 'footer-sidebar-3',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));
	
	register_sidebar(array(
	  'name' => 'Footer Section 4',
	  'id' => 'footer-sidebar-4',
	  'description' => 'Widgets in this area will be shown in the sidebar.',
	  'before_widget' => '<div id="%1$s">',
	  'after_widget'  => '</div>',  
	  'before_title' => '<h3>',
	  'after_title' => '</h3>'
	));

?>