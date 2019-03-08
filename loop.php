<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		<?php get_template_part( 'breadcrumbs' ); ?>			
		<?php if (is_front_page() ) {
			?> 
				<?php the_content(); ?>	
				<div class="clearfix"></div>
			<?php } 
			else {
			?> 
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="clearfix"></div><p class="date-updated">Last updated: <?php the_modified_date( 'n/j/Y' ); ?></p>
			<?php } 
		?>		
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!-- end loop -->

