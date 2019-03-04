<?php
/*
Plugin Name: Wealthcast
Plugin URI: 
Description: Ads via Wealthcast
Version: 0.1.6
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
		 * Add basescript to header
		 */
		public function basescript() {
			if(!function_exists('get_field')) return '';
			$bs_on = get_field('wc_bs_enabled','options');
			$gfp_on = get_field('wc_gfp_enabled','options');
			
			function wc_bs_basescript() {				
				global $post;
				$keywords = array();
				
				$categories = get_the_category($post->ID);
				foreach($categories as $category) {
					array_push($keywords, $category->slug);
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
				
				?>
				<!-- Wealthcast Init  -->
				<script src="https://cdn.broadstreetads.com/init-2.min.js" async></script>
				<script>
					document.addEventListener('broadstreetLoaded', function () {
						broadstreet.watch({
							keywords: [<?php if($keywords) echo '"'. implode('", "',$keywords) . '"';?>],
							softKeywords: true
						})
					});
				</script>
				<?php 
			}
			
			function wc_gfp_basescript() {
				$network_id = get_field('wc_gfp_network_id','options');
				$website_key = get_field('wc_gfp_website_key','options');
				$ads = get_field('wc_gfp_ad_units','options');
				var_dump($ads);
				print_r($ads);
				?>
				<!-- Wealthcast Init GFP -->
				<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
				<script>
				  var gptadslots = [];
				  var googletag = googletag || {cmd:[]};
				</script>
				
				<script>
					googletag.cmd.push(function() {
						<?php foreach($ads as $ad) : ?>
						gptadslots.push(
							googletag.defineSlot('/<?php echo $network_id; ?>/<?php echo $ad["code"]?>', <?php if($ad["sizes"]) echo "[" . implode($ad["sizes"],",") . "]";?>, "<?php echo $ad["unit_id"]?>")
							.addService(googletag.pubads())
						);
						<?php endforeach; ?>
					});
					
					googletag.pubads().enableSingleRequest();
					googletag.pubads().setTargeting('website', ['<?php echo $website_key; ?>']);
					googletag.pubads().collapseEmptyDivs();
					googletag.pubads().setCentering(true);
					googletag.enableServices();
				</script>
					
				<?php 
			}
			
			if($bs_on) add_action('wp_head', 'wc_bs_basescript');
			if($gfp_on) add_action('wp_head', 'wc_gfp_basescript');
			
		}
		/**
		 * Enqueue plugin assets
		 */
		public static function enqueue() {
			add_action( 'wp_enqueue_scripts', 'wc_enqueue_plugin_assets');
			function wc_enqueue_plugin_assets() {
			    wp_enqueue_style( 'wccss', plugins_url( '/style.css', __FILE__ ) );
			}
		} // end public function enqueue
		
		/**
		 * WC Display Function
		 */
		public function display_zone($location) {
			if(!function_exists('get_field')) return '';
			
			$code = '';
			
			if(get_field('wc_bs_enabled','options')) {
				$zoneid = get_field($location, 'options');
			    if($zoneid) $code .= '<div style="text-align: center;"><broadstreet-zone zone-id="'. $zoneid .'" soft-keywords="true"></broadstreet-zone></div>';
			}
			
			if(get_field('wc_gfp_enabled','options')) {
				$zone = get_field('wc_gfp_ad_units', 'options')['gfp_' . $location];
				if($zone) $code .= '<div id="'. $zone['unit_id'] .'"><script>googletag.cmd.push(function() { googletag.display('. $zone['unit_id'] .'); });</script></div>';
		    }
			
			return $code;
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
				echo '<div class="wc-popouts" style="display: none;">';
				if($po1) echo '<broadstreet-zone zone-id="'. $po1 .'" soft-keywords="true"></broadstreet-zone>';
				if($po2) echo '<broadstreet-zone zone-id="'. $po2 .'" soft-keywords="true"></broadstreet-zone>';
				echo '</div>';
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
			// require_once("settings.php");
			
		}


	} 
}

if(class_exists('WP_Plugin_Wealtcast')) {
	// Installation and uninstallation hooks
	register_activation_hook(__FILE__, array('WP_Plugin_Wealtcast', 'activate'));
	register_deactivation_hook(__FILE__, array('WP_Plugin_Wealtcast', 'deactivate'));
	
	// Get widget settings
	require_once('widget.php');
	
	// instantiate the plugin class
	$wc = new WP_Plugin_Wealtcast();
	
	// Expose display zone function to theme
	if ( ! function_exists( 'wc_zone' ) ) {
	    function wc_zone($location) {
	       return WP_Plugin_Wealtcast::display_zone($location);
	    }
	}
}
