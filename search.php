<?php
/*
Search Page
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="twelve columns">
		<?php get_template_part( 'banner-inside' ); ?>
		<div id="pagepad">
			<?php get_template_part( 'loop-search' ); ?>				
		</div>
	</article>
			
<?php get_footer(); ?>	
	