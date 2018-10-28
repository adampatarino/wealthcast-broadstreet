<?php
/*
Plugin Name: Wealthcast
Plugin URI: 
Description: Ads via Wealthcast
Version: 0.1.0
Author: Adam Patarino
Author URI: http://wealthcastmedia.com
License: GPL2
GitHub Plugin URI: https://github.com/adampatarino/wealthcast-broadstreet
GitHub Branch: master
*/

if(!class_exists('WP_Plugin_Wealtcast')) {
	class WP_Plugin_Wealtcast {
		/**
		 * Construct the plugin object
		 */
		public function __construct() {
			// Initialize Settings
			$this->plugin_settings();

			// Setup Plugin
			$this->basescript();
			$this->enqueue();
			$this->feederboards();
			$this->popouts();

		} // END public function __construct

		/**
		 * Get keywords
		 */
		private static function getKeywords() {
			global $post;
			$keywords = array();
			
			$categories = get_post_categories($post->ID);
			foreach($categores as $category) {
				array_push($keywords, $category);
			}
			
			if(is_home()) {
				array_push($keywords, 'is_home_page');
			} else {
				array_push($keywords, 'not_home_page');
			}
			
			if(is_single()) {
				array_push($keywords, 'is_article_page');
			} else {
				array_push($keywords, 'not_article_page');
			}
			
			return $keywords;
		}
		
		/**
		 * Add basescript to header
		 */
		public static function basescript() {
			add_action('wp_head', 'wc_basescript');
			function wc_basescript() { ?>
				<!-- Wealthcast Init  -->
				<script src="https://cdn.broadstreetads.com/init-2.min.js" async></script>
				<script>
					document.addEventListener('broadstreetLoaded', function () {
						broadstreet.watch({
							keywords: [<?php implode(",",$this->getKeywords)?>]
						})
					});
				</script>
			<?php }
		}
		/**
		 * Enqueue plugin assets
		 */
		public static function enqueue() {
			add_action( 'wp_enqueue_scripts', 'wc_enqueue_plugin_assets');
			function wc_enqueue_plugin_assets() {
				wp_register_style( 'wc-css', plugin_dir_url(__FILE__).'styles.css', '', '1.0.0', 'all' );
			}
		} // end public function enqueue
		
		/**
		 * WC Display Function
		 */
		public static function display_zone() {
			if(!function_exists('get_field')) return '';
		    $zoneid = get_field($location, 'options');
		    if(!$zoneid) return '';
		    if($alt) return '<div style="text-align: center;"><broadstreet-zone alt-zone-id="'. $zoneid .'"></broadstreet-zone></div>';
		    return '<div style="text-align: center;"><broadstreet-zone zone-id="'. $zoneid .'" soft-keywords="true"></broadstreet-zone></div>';
		}
		
		/**
		 * Inject Zone in Posts Feed
		 */
		public static function feederboards() {
			add_action( 'loop_start', 'wc_inject_loop_start' );
			function wc_inject_loop_start( $query ) {
			    if( $query->is_main_query() ) {
			        add_action( 'the_post', 'wc_inject_the_post' );
			        add_action( 'loop_end', 'wc_inject_loop_end' );
			    }
			}
			function wc_inject_the_post(){
			    static $nr = 0;
			    if( 0 === ++$nr % 3 )
			        echo '<div class="wc_feedboard">'. wc_zone('feedboard_' . $nr) .'</div>';
			}
			function wc_inject_loop_end() {
			    remove_action( 'the_post', 'wc_inject_the_post' );   
			} 
		}
		
		/**
		 * Add Popout Zones
		 */
		public static function popouts() {
			add_action('wp_footer', 'wc_popout_zones');
			function wc_popout_zones() {
				if(!function_exists('get_field')) echo '';
			    $po1 = get_field('popout_1', 'options');
				$po2 = get_field('popout_2', 'options');
				if($po1) echo '<broadstreet-zone zone-id="'. $po1 .'" soft-keywords="true"></broadstreet-zone>';
				if($po2) echo '<broadstreet-zone zone-id="'. $po2 .'" soft-keywords="true"></broadstreet-zone>';
			}
		}

		/**
		 * Activate the plugin
		 */
		public static function activate() {
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate() {
			// Do nothing
		} // END public static function deactivate

		// Add the settings link to the plugins page
		function plugin_settings() {
			/**
			 * Register options page
			 */
			add_action('plugins_loaded', 'wc_register_settings');
			function wc_register_settings() {
			    if (function_exists('acf_add_options_page')) {
					acf_add_options_sub_page(array(
						'title' 	=> 'Wealthcast',
						'parent' 	=> 'options-general.php',
						'capability'	=> 'manage_options',
						'redirect'		=> false
					));
			    }
			}
			/**
			 * Require settings fields
			 */
			require_once("settings.php");
		}


	} 
}

if(class_exists('WP_Plugin_Wealtcast')) {
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('WP_Plugin_Wealtcast', 'activate'));
	register_deactivation_hook(__FILE__, array('WP_Plugin_Wealtcast', 'deactivate'));
	
	// Get widget settings
	require('widget');
	
	// instantiate the plugin class
	$wc = new WP_Plugin_Wealtcast();
	
	// Expose display zone function to theme
	if ( ! function_exists( 'wc_zone' ) ) {
	    function wc_zone() {
	       return $wc->display_zone();
	    }
	}
}
