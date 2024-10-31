=== Plugin Name ===
Contributors: spike2828
Donate link: http://novadigitalmedia.com/
Tags: Dashboard, Cleanup, Dashboard Cleanup, Dashboard Clean Up, Clean up, Clean-ip, Nova Digital Media, Nova Dashboard Cleanup
Requires at least: 3.0.1
Tested up to: 3.6.1
Stable tag: 4.3
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Nova Dashboard Cleanup removes all those unwanted dashboard Widgets.

== Description ==
<h3>Welcome to the Nova Digital Media Dashboard Cleanup Plugin</h3>
<br />
<h3>This plugin removes the following widgets from your dashboard:</h3>
<ul>

<li>Recent Comments</li>
<li>Incoming Links</li> 
<li>Plugins</li>  
<li>Quick Press</li>   
<li>Recent Drafts</li>
<li>Primary</li>
<li>Secondary</li>
<li>yoast</li>

</ul>

<h3>v1.1</h3>

<ul>
<li>Stats</li>
<li>woo commerce sales</li>
<li>woo commerce recent reviews</li>
<li>woo commerce recent orders</li>
<li>woo commerce right now</li>

</ul>


Big Thanks to some of <a href="http://www.novadigitalmedia.com" alt="The local marketing experts In Essex">The Best local marketing experts In Essex</a> <a href="http://www.novadigitalmedia.com" alt="The local marketing experts In Essex">Nova Digital Media</a>

== Installation ==

1. Extract and Upload the Dashboard cleanup folder to the `/wp-content/plugins/` directory </br>
2. Activate the plugin through the 'Plugins' menu in WordPress </br>
3. And Enjoy the plugin </br>

== Frequently Asked Questions ==

= What if i dont want the plugin to remove one of the dashboard widgets? =

You can re-enable the dashboard widget by editing the PHP file for the plugin...</br>

Plugins > Editor > Dashboard Cleanup > nova-dashboard-cleanup.php </br>

You will find a section that looks like this # remove_meta_box( '############', 'dashboard', '####' ); # </br>

If you delete the one you want to re-enable and hit save it will re-enable that dashboard widget </br>

E.g. If i wanted to re-enable the "Quick Press" Dashboard Widget I will remove the following code... </br>

remove_meta_box('dashboard_quick_press', 'dashboard', 'core' );     </br>

If you see it says "dashboard_quick_press" this is related to the widget name... </br>


== Screenshots ==

No Screenshots needed

== Changelog ==

1.0
*Added The Core Dashboard Widgets

1.1
*Added more unwanted Dashboard Widgets

1.2
*fixed common bugs

== Upgrade Notice ==

2.0 Plans
*Obtain list of unwanted Dashboard Widgets that are commonly found
*Add to Plugin
