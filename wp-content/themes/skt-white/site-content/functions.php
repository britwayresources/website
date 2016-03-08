<?php
/**
 * Britway Resources functions and definitions
 *
 * @package Britway Resources
 */


/**
 * Get latest company news
 * @return string
 */
function get_company_news() {
	$html = '<div class="br-page br-page-company-news">';
	$html .= '<div class="latest-news">';
/*
	$k = 0;
	global $wp_query;
	while ( $wp_query->have_posts () ) : $wp_query->the_post ();
		$k++;
		$html .= '<div class="news-box';
		$html .= $k % 4 == 0 ? 'last' : '';
		$html .= '">';
		$html .= '<div class="news">';
		
		if (has_post_thumbnail ()) {
			$large_image_url = wp_get_attachment_image_src ( get_post_thumbnail_id (), 'large' );
			$imgUrl = $large_image_url [0];
		} else {
			$imgUrl = get_template_directory_uri () . '/images/img_404.png';
		}
	
		$html .= '<a href="' . the_permalink () . '"><img alt=" " src="{$imgUrl}"></a>';
		$html .= '<h2><a href="' . the_permalink () . '">' . the_title () . '</a></h2>';
		$html .= '<div style="float:left;">' . get_the_date () . '</div>';
		$html .= '<div style="float:right;color:#cccccc;font-weight:bold;font-size:15px">';
		$html .= '<img style="width:auto;float:left;position:relative;top:3px;" src="' . get_template_directory_uri () . '/images/icon-comment.png" />&nbsp;&nbsp;';
		$html .= get_comments_number ();
		$html .= '</div><div class="clear"></div>';
		$html .= the_excerpt ();
	
		if ($k % 4 == 0) {
			$html .= '<div class="clear"></div>';
		}
	endwhile;
*/	
	$html .= '</div>';
	$html .= '</div>';
	
	return $html;
}

/**
 * shortcode for Britway Resources
 */
function shortcode_render_page($atts, $content = "") {
	$atts = shortcode_atts ( array (
			"id" => "404" 
	), $atts, "page" );
	
	$page_id = $atts ["id"];
	$page_path = get_template_directory ();
	$page_lang = get_locale ();
	
	$page_file = "{$page_path}/site-content/views/{$page_lang}/{$page_id}.html";
	
	if (file_exists ( $page_file )) {
		return file_get_contents ( $page_file );
	} else {
		return "{$page_path}/site-content/views/{$page_lang}/404.html";
	}
}
add_shortcode ( 'page', 'shortcode_render_page' );