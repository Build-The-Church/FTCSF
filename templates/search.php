<?php 

get_header();

$search_query = get_search_query();
$args = array(
	's' => $search_query,
	'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
$the_query = new WP_Query($args);

$frontpage_id = get_option('page_on_front');
$frontpage = get_post($frontpage_id);
$image_id = get_post_thumbnail_id($frontpage);
$image_src = $image_id ? wp_get_attachment_image_src($image_id, 'full', false)[0] : false;
$image_alt = $image_id ? get_post_meta($image_id, '_wp_attachment_image_alt', true) : 'View Search Results';

util_render_snippet('common/hero', array(
	'desktop_src' => $image_src,
	'image_alt' => $hero_image['alt'],
	'caption' => 'Showing ' . $the_query->found_posts . ' Results For "' . $the_query->query['s'] . '"',
	'opacity' => get_post_meta($post->ID, 'hero_opacity', true),
	'background' => get_post_meta($post->ID, 'hero_background', true),
	'text_color' => get_post_meta($post->ID, 'hero_text', true),
	'hero_height' => get_post_meta($post->ID, 'hero_height', true),
), false);

util_render_snippet('layout/search/search-page', array(
	'the_query' => $the_query
), false);


get_footer();