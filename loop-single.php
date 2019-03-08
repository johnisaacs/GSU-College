<?php get_template_part( 'breadcrumbs' ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>			
	<h1><?php the_title(); ?></h1>
	<p class="post-meta"><?php the_date(); ?></p>
	<?php the_content(); ?>
	<div class="clearfix"></div>
	<p>Posted in <?php the_category(', '); ?></p>
	<p> <?php the_tags('Tags: ', ', ', '<br />'); ?> </p>
	<p><span class="prev-post"><?php previous_post_link('%link', '&lt; Previous', TRUE); ?></span><span class="next-post"><?php next_post_link('%link', 'Next &gt;', TRUE); ?></span></p>
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_template_part( 'social' ); ?>