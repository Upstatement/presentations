<h1><?php the_title(); ?></h1>
<?php if (get_post_thumbnail_id(get_the_ID())) {
		echo '<img src="'.wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID())).'" class="my-class" />';
} else { ?>
	<img src="/wp-content/mytheme/default-missing-image.jpg">
<?php } ?>