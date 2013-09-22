=== oik-batchmove ===
Contributors: bobbingwide
Donate link: http://www.oik-plugins.com/oik/oik-donate/
Tags: category, republish, add, update, delete
Requires at least: 3.5.1
Tested up to: 3.6.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
This plugin enables you to filter posts in a particular category and then apply mass updates to selected posts.

Actions supported:

* Update to selected category - Delete the currently filtered category and set a new Target Category for the selected posts
* Add selected category - Adds the Target Category to the selected posts
* Delete selected category - Deletes the currently filtered category from the selected posts
* Republish - update the post date to the current time stamp.
* Republish - alter the post date by adding or subtracting defined amounts


== Installation ==
1. Upload the contents of the oik-batchmove plugin to the `/wp-content/plugins/oik-batchmove' directory
1. Activate the oik-batchmove plugin through the 'Plugins' menu in WordPress
1. Visit Posts > Batch move or Oik options > Batch move to start changing post's categories or publication dates.


== Frequently Asked Questions ==
= How do I use it? = 
1. Visit Posts > Batch move
1. Use the Selection criteria to list the posts you may want to alter and click on Filter.
1. Select the posts to change.
1. Select the target category, choose the Action to perform, click on Apply changes.


= oik-batchmove may not be fully functional =
I get a message that says:
*oik-batchmove may not be fully functional*. Please install and activate the required version of this plugin: oik version 2.0

This message is asking you to install and activate the oik base plugin. There should be a link:
 
* Install oik - this means that oik is not installed. Click on the link to download the latest version of oik
* Activate oik base plugin - this means that the oik base plugin is not activated. Click on the link to activate the installed version of oik
* Upgrade oik - this means that the activated version of oik is not at or higher than the required level. Click on the link to update to the latest version of oik

If you do not perform the action then the plugin won't work properly.

= Why do I need oik? =
The oik base plugin provides APIs (Application Programming Interfaces) which deliver 90% of the functionality that makes this plugin work.
oik provides a lot of stuff, which is mostly dormant until you really need it.

= Which version of oik do I need? =
The oik-batchmove plugin is dependent upon oik (v2.0 or higher) for date filter logic

= Are there similar plugins? = 
Yes. This plugin was sponsored by Howard Popeck for Our Listeners Club - for the music loving audiophile
Before developing oik-batchmove I tried these plugins. They didn't satisfy the requirements. 

* [Batch-Move wp plugin](http://wordpress.org/plugins/batchmove/)
* [Bulk Move](http://wordpress.org/plugins/bulk-move/)

== Screenshots ==
1. Selection criteria: Choose the posts to alter
2. Selected posts
3. Target category and Action
4. Result reporting
5. Redisplaying a republished post

== Upgrade Notice ==
= 1.0 =
First version for WordPress.org. Dependent upon oik v2.0 and above

= 0.1.0625 =
Now dependent upon PHP 5.3 for date adjustment and oik v2.0

= 0.1.0305 =
Now dependent upon oik v2.0-alpha - to use the date filter logic

= 0.1.0221 = 
This plugin is dependent upon the oik base plugin.
The minimum version supported is oiv v1.17.
The date filter logic is dependent upon oik v1.18 or higher.

= 0.1.0218 =
This plugin is dependent upon the oik base plugin v1.17

== Changelog ==
= 1.0 =
* Changed: Removed call to oik_register_plugin_server() for publication on WordPress.org

= 0.1.0625 =
* Added: Can now filter All categories - for when you want to filter and republish based on date alone
* Changed: Date filter now allows selection of a single day
* Changed: Plugin initialisation when file loaded now implemented as a function oik_batchmove_plugin_loaded()

= 0.1.0625 =
* Added: Date adjustments can now be applied when using "republish". e.g. +2 years

= 0.1.0305 =
* Changed: Post ID's in the select list are now links. This makes it a bit easier to decide whether or not to select it
 
= 0.1.0221 =
* Added: Code to enable the select all check box
* Changed: Renamed some internal functions to prepare for future transition

= 0.1.0218 =
* Added: New code supports listing of posts and actions to add a category, remove a category or update (replace) or to republish a post

== Further reading ==
If you want to read more about the oik plugins then please visit the
[oik plugin](http://www.oik-plugins.com/oik) 
**"the oik plugin - for often included key-information"**

