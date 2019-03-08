<div id="pagebanner" class="mobile-hide">
	<?php dynamic_sidebar( 'Inside Page Banner' ); ?>
	<?php if (is_front_page() ) {
	?> 			
		<div id="sitename" class="bg_local"><h1><a href="<?php echo home_url()?>"><?php echo get_bloginfo('name')?></a></h1></div>
	<?php } 
	else {
	?> 
		<div id="sitename" class="bg_local"><a href="<?php echo home_url()?>"><?php echo get_bloginfo('name')?></a></div>
	<?php } 
	?>				
</div>