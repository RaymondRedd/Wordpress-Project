<?php 

if(have_posts() ):

	while( have_posts() ): the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php the_title('<h1>','</h1>'); ?>

			<?php if (has_post_thumbnail() ): ?>

				<div><?php the_post_thumbnail('thumbnail'); ?></div>
			<?php endif; ?>

			<small><?php the_category(' '); ?> || <?php the_tags(); ?> || <?php edit_post_link();?></small>
			<?php the_content(); ?>
			<hr>

		</article>

	<?php endwhile; 

endif;

?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>