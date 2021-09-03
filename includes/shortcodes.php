<?php
/**
 * Shortcodes
 *
 * @package     IOTA Pay per Content
 * @subpackage  Shortcodes
 */

/**
 * Restrict access if paid
 *
 * @param array       $atts    Shortcode attributes.
 * @param string|null $content Shortcode content.
 *
 * @return string
 */
function restrict_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts( array(
		'userlevel' => 'none',
	), $atts, 'restrict' );

	if ( $atts['access'] == 'paid' ) {
		return do_shortcode( $content );
	}
	if ( $atts['access'] == 'public' ) {
		return do_shortcode( $content );
	} else {
		return '<span>Get pay-per-content url here</span>';
	}
}

add_shortcode( 'paid', 'paid_shortcode' );