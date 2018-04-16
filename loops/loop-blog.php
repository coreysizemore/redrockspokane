<?php
	
	/*
		@package WordPress
		@subpackage endor
	*/
	 
?>

<?php while ( have_posts() ) : the_post(); ?>

	<article class="blog_preview" id="post-<?php the_ID(); ?>">
		
		<?php if ( has_post_thumbnail() ) {
			
			echo '<div class="thumbnail">';
			
			the_post_thumbnail();
			
			echo '</div>';
			
		} ?>
                                
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 12, '...' ); ?></a></h2>
		
		<span class="date"><?php echo get_the_date(); ?></span>
	                   
		<?php the_excerpt(); ?>
		
		<span class="edit"><?php edit_post_link(); ?></span>
		
		<hr />
		
		<span class="author"><?php echo get_avatar( get_the_author_meta('ID'), 15); ?> by <?php the_author_posts_link(); ?></span>
		 
	</article>
                        
<?php endwhile; ?>