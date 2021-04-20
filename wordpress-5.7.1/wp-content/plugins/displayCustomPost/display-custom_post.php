<?php
/**
 * @package Custom Post Display
 */
/*

Plugin Name: Custom Post Display
Plugin URI: https://balamurugan.com/
Description: This plugin is used to display a custom type posts using a shortcode
Version: 1.1
Author: Balamurugan
Author URI: https://balamurugan.com/
 
*/

// Add the corresponding scripts

include( plugin_dir_path( __FILE__ ) . 'includes/createPostTypes.php');
include( plugin_dir_path( __FILE__ ) . 'includes/createPostShortcode.php');


function addStylesheetFiles(){
	wp_enqueue_style( 'plugin_style', plugins_url('/css/plugin_style.css', __FILE__), false, '1.0.0', 'all');
	wp_enqueue_style( 'jquery_bxslider', plugins_url('/css/jquery.bxslider.css', __FILE__), false, '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', "addStylesheetFiles");

function addInlineScript() {
	echo "<script src='".plugins_url('/js/jquery-3.1.1.min.js', __FILE__)."'></script>";
	echo "<script src='".plugins_url('/js/jquery.bxslider.js', __FILE__)."'></script>";
    echo "<script>
		$(document).ready(function(){
			$('.postbxslider').bxSlider({
				mode: 'horizontal',
				moveSlides: 1,
				slideMargin: 40,
				infiniteLoop: true,
				minSlides: 1,
				maxSlides: 1,
				speed: 800,
			});
		});
	</script>";
}
add_action( 'wp_footer', 'addInlineScript', 0 );


?>
