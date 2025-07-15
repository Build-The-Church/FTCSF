<?php get_header(); ?>

<?php while (have_posts()) {
	the_post();
	util_render_snippet('common/general-content', array(
		'content' => get_the_content()
	), false);
} ?>

<?php get_footer(); ?>