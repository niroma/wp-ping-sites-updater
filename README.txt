=== WP Ping Sites Updater ===
Contributors: nir0ma
Donate link: https://www.niroma.net/
Tags: ping, ping list, ping sites, up to date, updater
Requires at least: 3.0.1
Tested up to: 5.2.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WP Ping Sites Updater keeps your website's ping list up to date !

== Description ==

WP Ping Sites Updater keeps your website's ping list up to date by downloading a fresh list once a day from our repository or your own one !

Your list can contain some variables :
**#WEBSITE_NAME#** -> replaced by sanitize_title_with_dashes(get_bloginfo('name'))
**#WEBSITE_URL#** -> replaced by get_site_url()

== Installation ==

1. Upload `wp-ping-sites-updater.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress and you are all done
1. If you want to load your own list just go to Settings > Ping Sites Updater, change the Ping List Url field and hit the save settings button

== Changelog ==

= 1.0 =
* Initial release
`<?php code(); // goes in backticks ?>`