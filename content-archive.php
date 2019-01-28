<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<?php the_title( sprintf('<h1><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>'); ?>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>,in <?php the_category(); ?></small>
	</header>

	<div>
		
		<?php if (has_post_thumbnail() ): ?>
			<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			<div>
				<?php the_excerpt(); ?>
			</div>
			<?php else: ?>

				<div>
					<?php the_excerpt(); ?>
				</div>

			<?php endif; ?>

	</div>
	
</article>