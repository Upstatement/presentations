<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</h2>

<?php endwhile; endif; ?>