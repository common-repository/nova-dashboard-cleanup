<?php
/**
 * Plugin Name: Nova Dashboard Cleanup
 * Plugin URI: http://www.novadigitalmedia.com
 * Description: A simple plugin that removes unused and unwanted dashboard widgets
 * Version: 1.2
 * Author: Conor Lyons
 * Author URI: http://www.conorlyonsuk.com
 * License: GPL2
 */
 
 /*  Copyright 2013  Conor Lyons  (email : c.lyons@novadigitalmedia.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/************* DASHBOARD WIDGETS *****************/

// disable default dashboard widgets
function disable_default_dashboard_widgets() { 
	remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'core' ); 
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'core' );  
	remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' );     
	remove_meta_box('dashboard_quick_press', 'dashboard', 'core' );     
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'core' );   
	remove_meta_box( 'dashboard_primary', 'dashboard', 'core' );         
	remove_meta_box( 'dashboard_secondary', 'dashboard', 'core' );       
	remove_meta_box( 'dashboard_stats', 'dashboard', 'core' ); 

	// removing plugin dashboard boxes
	remove_meta_box( 'yoast_db_widget', 'dashboard', 'normal' );         
	remove_meta_box( 'cpdDashboardWidget', 'dashboard', 'normal' );   
	remove_meta_box( 'wpam_dashboard_widget', 'dashboard', 'normal' );
	remove_meta_box( 'woocommerce_dashboard_sales', 'dashboard', 'normal' );
    remove_meta_box( 'woocommerce_dashboard_recent_reviews', 'dashboard', 'normal' );
    remove_meta_box( 'woocommerce_dashboard_recent_orderst', 'dashboard', 'normal' );
    remove_meta_box( 'woocommerce_dashboard_right_now', 'dashboard', 'normal' );
    
}

// RSS Dashboard Widget
function nova_rss_dashboard_widget() {
	if ( function_exists( 'fetch_feed' ) ) {
		include_once( ABSPATH . WPINC . '/feed.php' );               
		$feed = fetch_feed( 'http://www.novadigitalmedia.com/feed/' );        
		$limit = $feed->get_item_quantity(20);                      
		$items = $feed->get_items(0, $limit);                      
	}
	if ($limit == 0) echo '<div>The RSS Feed is either empty or unavailable.</div>';  
	else foreach ($items as $item) { ?>


	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date( __( 'j F Y @ g:i a', 'nova' ), $item->get_date( 'Y-m-d H:i:s' ) ); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<div style="padding-bottom:5px;"></div>
	<?php }
}

function nova_custom_dashboard_widgets() {
	wp_add_dashboard_widget( 'nova_rss_dashboard_widget', __( 'Recently From Nova Digital Media', 'nova' ), 'nova_rss_dashboard_widget' );
}

add_action( 'admin_menu', 'disable_default_dashboard_widgets' );

add_action( 'wp_dashboard_setup', 'nova_custom_dashboard_widgets' );

?>