<?php 

get_header('home'); ?>
	

<?php if (have_posts()) : ?>

	<header>
		<?php 
			the_archive_title('<h1>','</h1>');
			the_archive_description('<p>','</p>');
		?>
	</header>
	<?php
	while (have_posts()) : the_post(); ?>


		<?php get_template_part('content','archive');
		
	
	endwhile;

else: 
	echo '<p>No content found</p>';

endif; ?>


<?php get_footer();

?>