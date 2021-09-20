<?php
/**
 * Plugin Name: Iota Pay per Content
 * Plugin URL: https://pay-per-content.com
 * Description: Links your wordpress site to pay-per-content.com
 * Version: 0.1
 * Author: pay-per-content.com
 * Author URI: https://pay-per-content.com
 * Tags: Pay per content, IOTA
 */



function paid_shortcode( $atts, $content = null ) {	

	if ( is_user_logged_in() ) {
		return $content;
	}

	global $post;

	$domain = parse_url(get_site_url())['host'];

	$slug = $post->post_name;

	ob_start();
    ?>
	<div id="iota-pay-per-content-identifier-b88797071904e355cd79c9b0a965d" style="background: lightgray;
				border-radius: 10px;
				padding: 30px;">
	<h5>This part is for paying readers only</h5>
	<h5><a href="<?php echo esc_url( 'https://pay-per-content.com/gateway/get/' . $domain . '/' . $slug . '/' ); ?>">Buy the full article</a></h5>
	<p style="font-size: 8px;">Powered by pay-per-content.com</p>
	</div>
	<?php
    return ob_get_clean();
}

add_shortcode( 'paid', 'paid_shortcode' );