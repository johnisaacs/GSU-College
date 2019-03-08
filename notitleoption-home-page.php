<?php
/*
Template Name: Home Page - No Site Title on Banner Image
*/
?>

<?php get_header(); ?>
	<section class="row remove-bottom">
		<?php get_template_part( 'banner-notitle' ); ?>
		<nav class="one-third column omega">
			<div id="fp_menu">
				<div id="fp_menuheader" class="bg_local"><h1><?php echo get_bloginfo('name')?></h1></div>
				<!-- Hide corner shadows to allow text to wrap down to next line <img src="http://cms.georgiasouthern.edu/~gsu/web_templates/CORE/images/fp_menuheadershadow.png" alt="" id="fp_menuheadershadow" class="mobile-hide" />-->
				<div class="row top">
					<?php dynamic_sidebar( 'Home Menu One' ); ?>
					<?php dynamic_sidebar( 'Home Menu Two' ); ?>
				</div>
				<div class="row">
					<?php dynamic_sidebar( 'Home Menu Three' ); ?>
					<?php dynamic_sidebar( 'Home Menu Four' ); ?>
				</div>
				<div id="ql_callout" class="row remove-bottom">
					<?php dynamic_sidebar( 'Home Menu Five' ); ?>					
					<div id="callout" class="half column">
						<?php dynamic_sidebar( 'Home Menu Six' ); ?>
					</div>
				</div>
			</div><!-- #fp menu -->
		</nav>	
	</section>
	<div style="clear:both;"></div>
	<section id="fp_featurewrap" class="row remove-bottom">
		<div class="one-third column fp_feature">
			<div class="fp_featurepad">
			<?php dynamic_sidebar( 'Home Bottom Left' ); ?>	
			</div>
		</div> <!-- /feature -->
		<div class="one-third column fp_feature">
			<div class="fp_featurepad">
			<?php dynamic_sidebar( 'Home Bottom Middle' ); ?>
			</div>
		</div> <!-- /feature -->
		<div class="one-third column fp_feature">
			<div class="fp_featurepad">	
			<?php dynamic_sidebar( 'Home Bottom Right' ); ?>
			</div>	
		</div> <!-- /feature -->
	</section>	
	<?php get_footer(); ?>	