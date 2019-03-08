<?php
/*
Template Name: Home Page - Alternate Layout
*/
?>

<?php get_header(); ?>
	<?php get_template_part( 'navigation' ); ?>
	
	<article id="content" class="col-sm-9 twelve columns">
		<?php get_template_part( 'banner-inside' ); ?>
		<div id="pagepad">
			<?php get_template_part( 'loop' ); ?>				
		</div>
	
	<section id="fp_featurewrap" class="row">
		<div class="col-sm-4 four columns fp_feature">
			<div class="fp_featurepad">
			<?php dynamic_sidebar( 'Home Bottom Left' ); ?>	
			</div>
		</div> <!-- /feature -->
		<div class="col-sm-4 four columns fp_feature">
			<div class="fp_featurepad">
			<?php dynamic_sidebar( 'Home Bottom Middle' ); ?>
			</div>
		</div> <!-- /feature -->
		<div class="col-sm-4 four columns fp_feature">
			<div class="fp_featurepad">	
			<?php dynamic_sidebar( 'Home Bottom Right' ); ?>
			</div>	
		</div> <!-- /feature -->
	</section>	
	</article>
	<div style="clear:both;"></div>
	
	<?php get_footer(); ?>	