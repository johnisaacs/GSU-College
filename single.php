<?php
/*
Single post template.
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="twelve columns">
		<?php get_template_part( 'banner-inside' ); ?>
		<div id="pagepad" class="news">
			<?php get_template_part( 'loop', 'single' ); ?>				
		</div>
	</article>
			
<?php get_footer(); ?>	