
	<h1><?php the_title(); ?></h1>
	<?php if (wp_count_comments(get_the_ID()) {
		echo '<p>There are '.wp_count_comments(get_the_ID()).' comments</p>';
	} else { ?>
		<p>No comments yet!</p>
	<?php } ?>