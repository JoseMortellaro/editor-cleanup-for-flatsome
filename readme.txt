=== Editor Cleanup For Flatsome: FDP add-on to clean up the Flatsome UX Builder ===
Contributors: giuse
Tags:  cleanup, flatsome, ux builder, debugging, conflicts
Requires at least: 4.6
Tested up to: 6.5
Stable tag: 0.0.5
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

FDP add-on to clean up UX Builder, the editor of Flatsome. UX Builder will be faster and without conflicts with other plugins.


== Description ==

Editor Cleanup For Flatsome is an add-on of <a href="https://wordpress.org/plugins/freesoul-deactivate-plugins/" target="_blank">Freesoul Deactivate Plugins</a> to **clean up the editor of <a href="https://flatsomebuilder.com/" target="_blank">Flatsome (UX Builder)</a>**.

It will not only clean up the assets added by other plugins, their PHP code will not run either.

The editor of Flatsome will load faster and without conflicts with other plugins.

Both Freesoul Deactivate Plugins and Flatsome must be installed and active, in another case this plugin will not run.

== How to clean up the Flatsome editor ==
* Install and activate Freesoul Deactivate Plugins if not active yet
* Install and activate Flatsome if not active yet
* Install and activate Editor Cleanup For Flatsome
* Go to Flatsome => Editor CLeanup
* Click on "Outer editor cleanup" to disable plugins that the outer editor does't need (usually no plugin needed)
* Click on "Inner editor cleanup" to disable plugins that the inner editor does't need (the inner editor is like the page on frontend, but loaded inside UX Builder)
* Click on "Editor actions cleanup" to disable the plugins that are called during any action triggered by UX Builder (updating  an element, adding an element...) (usually no plugin needed, disabling plugins here can solve conflicts with other plugins)


== Similar add-ons for cleanup ==
* <a href="https://wordpress.org/plugins/editor-cleanup-for-oxygen/">Editor Cleanup For Oxygen</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-elementor/">Editor Cleanup For Elementor</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-avada/">Editor Cleanup For Avada</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-wpbakery/">Editor Cleanup For WPBakery</a>
* <a href="https://wordpress.org/plugins/editor-cleanup-for-divi-builder/">Editor Cleanup For Divi Builder</a>


== Help ==
For any question or if something doesn't work, don't hesitate to open a thread on the <a href="https://wordpress.org/support/plugin/editor-cleanup-for-flatsome/">support forum</a>.

Read also <a href="https://freesoul-deactivate-plugins.com/editor-cleanup-for-flatsome/">How to clean up the Flatsome editor</a> for more details.


== Changelog ==


= 0.0.5 =
*Fix: settings not saved (need FDP >= v. 2.1.7)

= 0.0.4 =
*Fix: settings not saved

= 0.0.3 =
*Fix: admin submenu item not visible if FDP version < 1.9.5.2

= 0.0.2 =
*Fix: fatal error in the plugin settings page

= 0.0.1 =
*Initial release



== Screenshots ==

1. How disable plugins in the editor of Flatsome
