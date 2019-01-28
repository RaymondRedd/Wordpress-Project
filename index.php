<?php 

get_header(); ?>

<div class="site-content clearfix">

<div class="main-column">
	

<?php if (have_posts()) :
	while (have_posts()) : the_post();
		
	
	endwhile;

else: 
	echo '<p>No content found</p>';

endif; ?>

</div>

</div>

<?php get_footer();

?>