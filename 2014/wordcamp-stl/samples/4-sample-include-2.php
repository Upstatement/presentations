<?php
	if (file_exists('tease-book-'.get_the_ID().'.inc.php') || file_exists('tease-book.inc.php')){
		$book = $post;
		get_template_part('tease-book', get_the_ID());
	} else {
		get_template_part('tease');
	}
