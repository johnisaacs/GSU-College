<?php get_template_part( 'breadcrumbs' ); ?>
		<h1><?php single_cat_title(); ?></h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<h6><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h6>
		<p class="post-meta"><?php the_time(get_option('date_format')); ?></p>
		<?php the_content(); ?>
		<div style="clear:both;"></div>
			<hr class="spacer">
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>	
<div class="prevnextpage"><p><?php posts_nav_link(' ', '<span class="next-post">Newer posts &gt;</span>', '<span class="prev-post">&lt; Older posts</span>'); ?></p></div>
<!-- end loop -->	