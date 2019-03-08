<?php get_template_part( 'breadcrumbs' ); ?>
	<h1>Search Results for &quot;<em><?php the_search_query(); ?></em>&quot;</h1>	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>		
		<?php the_excerpt(); ?>
		<div style="clear:both;"></div>
			<hr class="spacer">
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
<div class="prevnextpage"><p><?php posts_nav_link(' ', '<span class="next-post">Newer posts --></span>', '<span class="prev-post"><-- Older posts</span>'); ?></p></div>
<!-- end loop -->	