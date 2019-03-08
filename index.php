<?php
/*
Default page template. 
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="col-sm-9 twelve columns">
		<?php get_template_part( 'banner-inside' ); ?>
		<div id="pagepad">
			<?php get_template_part( 'loop' ); ?>				
		</div>
	</article>
			
<?php get_footer(); ?>	
	