=== Fixed Widget and Sticky Elements for WordPress ===
Contributors: webzunft, max-bond, advancedads
Tags: fixed widget, sticky widget, sidebar, ads, widget, fixed, sticky, floating, sticky block, adsense
Requires at least: 5.0
Tested up to: 5.9
Stable tag: 6.0.7

More attention and a higher ad performance with fixed sticky widgets.

== Description ==

Use Fixed Widget to create sticky widgets, sticky blocks, and other elements that stay in the visible screen area when a user scrolls the page up or down.

Sticky widgets are more visible than unfixed widgets and therefore have a significantly higher click-through rate.

That's why this option is worthwhile for ads or other elements that visitors should interact with. Meanwhile, Google also allows the integration of [sticky AdSense ads](https://wpadvancedads.com/google-adsense-sticky-ads/).

* [Manual and demo](https://wpadvancedads.com/fixed-widget-wordpress/)

= Changes in version 6.0.0 =

Version 6.0.0 is a full rewrite of the frontend script. It fixes many edge cases like jumping, reloading, or resizing widgets.
The rewrite also resolves bad Cumulative Layout Shifts.

Enable "Test new version" under Appearance > Fixed Widget Options.

- the frontend script does not need jQuery anymore
- removed unneeded options that previously helped resolving edge cases
- "Stop Elements" and "Custom Fixed Elements" now accept any selector, including IDs, Class, and Type selectors.
- works with the widget block editor introduced in WordPress 5.8
- added "stop" option to widget blocks

Please test and [let us know](https://wordpress.org/support/plugin/q2w3-fixed-widget/) if you discover any issues.

= Features =

All the features are free.

* **Sticky Widgets** Use the Fixed Widget option on any widget and blocks in the sidebar
* **Sticky Elements** Choose any element on your site and make it sticky
* **Margin Top** allows you to stop sticky elements to cover floating menu bars
* **Margin Bottom** pushes sticky elements up before they reach a certain distance towards the bottom window
* **Stop Elements** push sticky elements up when they are scrolling into view
* **Stop Blocks** defines blocks in your sidebar that push fixed blocks out of the page
* **Minimum Screen Width** and **Minimum Screen Height** allow you to disable sticky behavior on small screens

= Compatibility = 

Theme requirements:

* `wp_head()` and `wp_footer()` functions in `header.php` and `footer.php` files
* JavaScript errors could break sticky widgets

== Installation ==

1. Follow the standard WordPress plugin installation procedure
2. Activate the plugin through the plugins menu in WordPress
3. Go to Appearance -> Widgets, enable the "Fixed Widget" option on any active widget
4. Fine tune plugin parameters on Appearance -> Fixed Widget Options page

== Frequently Asked Questions ==

= Why is the Fixed Widget plugin not working? =

There are several reasons:

1. Javascript errors on the page. Commonly caused by buggy plugins. Check javascript console of your browser. If you find errors, try to locate and fix its source. 
2. No `wp_head()` and `wp_footer()` functions in template. Check header.php and footer.php files of your active theme.
3. Conflicts with other plugins and scripts
4. CSS incompatibility

= Is it possible to fix multiple widgets? =

Yes, it is possible to fix more than one widget even if they are located in different sidebars.

= How to prevent overlapping with the footer? =

Go to WP admin area, Appearance -> Fixed Widget Options. Here you can define the top and bottom margins. Set bottom margin value >= footer height. Check the result, please.
If your footer height is changing from page to page it is better to use the `Stop ID` option. Here you need to provide the HTML tag ID. The position of that HTML element will determine the margin bottom value. For example, let's take the Twenty Sixteen default theme. The theme's footer container has an ID="colophon". In the `Stop Element Selectors` option I need to enter `#colophon`.

= How to disable the plugin on mobile devices? = 

Use the options `Minimum Screen Width` and `Minimum Screen Height` to disable sticky features when the browser window is too small. You can also use the [visitor conditions of Advanced Ads](https://wpadvancedads.com/manual/visitor-conditions/) to target specific devices.

== Screenshots ==

1. A fixed widget and a stop widget in action
2. Fixed Widget plugin options
3. Fixed Widget options for blocks in the widget editor
3. Fixed Widget option for legacy widgets

== Changelog ==

= 6.0.7 =

- Improvement: Compatibility with relative padding values

= 6.0.6 =

- Improvement: Compatibility with dynamically loaded content pages, i.e., infinite scroll
- Improvement: Compatibility with widgets that have large offsets
- Fix: Prevent padding from increasing on scroll

= 6.0.5 =

- Fix: Prevent overlapping of fixed widgets with non-fixed widgets when scrolling up

= 6.0.4 =

- Fix: Prevent fixed widgets overlapping non-fixed elements in certain themes
- Fix: Class selectors saved under the Custom Elements were wrongly prefixed with '#'

= 6.0.3 =

- Improvement: Check lazy elements and stop elements for changing their size and recalculate fixed position
- Improvement: Lower check interval from 1000 to 500 ms

= 6.0.2 =

- Improvement: Fall back to previous version when the theme does not support the new script – mainly because of using float instead of flex
- Improvement: Stop Elements work also when they are in a different column or sidebar than the fixed element
- Improvement: Recalculate Fixed Widget height on scroll

= 6.0.1 =

- Fix: use the previous Stop ID value in the new Stop Elements section

= 6.0.0 =

Version 6.0.0 is a full rewrite of the frontend script. It fixes many edge cases like jumping, reloading, or resizing widgets.
The rewrite also resolves bad Cumulative Layout Shifts.

Most changes are available when you enable "Test new version" under Appearance > Fixed Widget Options.

Please test and [let us know](https://wordpress.org/support/plugin/q2w3-fixed-widget/) if you discover any issues.

- added new (and optional) script version that uses `position: sticky` instead of `position: fixed`
- the frontend script does not need jQuery anymore
- removed unneeded options that previously helped resolving edge cases
- "Stop Elements" and "Custom Fixed Elements" now accept any selector, including IDs, Class, and Type selectors.
- fixed blocks in sidebars as introduced in WordPress 5.8
- define stop blocks in sidebars that move up fixed blocks on scrolling
- improved option descriptions on the admin page
- improved behavior for elements higher than the screen – they first stick at the top and scroll to the bottom later
- removed duplicating widget code

= 5.3.0 =

- fixed option not saving when using the Gutenberg plugin to edit sidebars with block editor
- disabled scripts and output on AMP pages since sticky widgets are not part of the AMP standard
- removed explicit translation files since all translations are handled through https://translate.wordpress.org/projects/wp-plugins/q2w3-fixed-widget/

= 5.2.0 =

- Added `q2w3-fixed-widget-sidebar-options` filter for widget options in the frontend.

= 5.1.9 =

* Fixed JavaScript events which were not called in some setups.

= 5.1.8 =

* Fixed JavaScript bug that caused jumping / flickering of fixed widgets.

= 5.1.7 =

* Fixed "a.target.className.indexOf is not a function" bug

= 5.1.6 =
* linguistic corrections
* cleanup of the options page 

= 5.1.5 =
* author change

= 5.1.4 =
* Added filter "q2w3-fixed-widgets". It allows to filter array of widgets marked as fixed.

= 5.1.3 =
* Now compatible with WP Page Widget plugin

= 5.1.2 =
* Now works fine with Shortcodes Ultimate widgets!

= 5.1.1 =
* Resolves problems with Margin Bottom and Stop ID from version 5.1!

= 5.1 =
* New options load method!
* Tested with WordPress 4.9

= 5.0.4 =
* Compatibility patch for Better Wordpress Minify plugin.

= 5.0.3 =
* Improved solution for "q2w3_sidebar_options is not defined" error.

= 5.0.2 =
* Plugin javascript optimization
* To resolve "q2w3_sidebar_options is not defined" error `wp_add_inline_script` function is used. WordPress 4.5 required for this fix!
* Added option `Disable MutationObserver`. Use this option only as a backup to restore version 4 behavior!

= 5.0.1 =
* Fixed problem in multiple sidebars layout

= 5.0 =
* Optimized client side performance. Detection of page changes is now based on MutationObserver API. Widget parameters recount is fired only when needed! Refresh interval option used only for campatibility with old browsers (no MutationObserver API support).
* Improved compatibility with caching plugins (W3TC, Autoptimize and etc.). No need to exclude jQuery and plugin files from cache!
* Async/Defer script load method support
* Added `Disable Width` and `Disable Height` options
* Note for cache plugins users: don't forget to clear cache after upgrading to version 5! Options format has been changed!

= 4.1 =
* Added `Stop ID` option. Use it when you cannot specify `Margin Bottom` value. Solution provided by [Julian_Kingman](https://wordpress.org/support/profile/julian_kingman)!
* Now the plugin is aware of the Wordpress admin bar presence!
* Fixed destruction of `jQuery(window).load` hook. There should be no problems with other jQuery plugins now!
* Added German translation
* Updated internationalization support

= 4.0.6 =
* A small [bug fix](http://wordpress.org/support/topic/widget-gets-wider-when-it-reaches-the-top)
* Added French translation

= 4.0.5 =
* New option "Inherit widget width from the parent container" to better support responsive layouts.
* Javascript optimization.

= 4.0.4 =
* Added option "Auto fix widget id". It is on by default. If the plugin is working with this option switched off - leave it in off position!  

= 4.0.3 =
* Optimized code to resolve [plugin crash after 4.0.1 update](http://wordpress.org/support/topic/the-plugin-crash-after-401-update) problem
* Minified javascript code

= 4.0.1 =
* Hotfix! Removes problem with duplicated widget code.

= 4.0 =
* Resolved [widget jumping](http://wordpress.org/support/topic/widgets-below-fixed-widgets-jump-up)
* Added code to automatically fix "widget id problem"
* Added new compatibility option (plugin priority)
* Added complete uninstall (uninstall script launched automatically when you DELETE plugin)
* Added Spanish translation
* Removed depricated options

= 3.0 =
* This version brings you a long waited capability to stick widgets located in different sidebars! Enjoy!
* Fixed conflict with WP Page Widget plugin 
* A few small bugs cleaned 
* Warning! "Disable plugin on mobile devices" and "Disable plugin on tablet devices" options now are depricated and will be removed in the next release. Use "Screen Max Width" option instead!

= 2.3 =
* Now user can disable plugin, when browser window width is less then specified value (check plugin options). 

= 2.2.4 =
* This version compatible with jQuery 1.9 and 1.10 

= 2.2.3 =
* Little internal improvments
* Mobile Detect updated to version 2.6.0

= 2.2.2 =
* Fixed PHP [Error](http://wordpress.org/support/topic/breakes-with-php-53)
* Mobile Detect updated to version 2.5.8

= 2.2.1 =
* Fixed PHP [Warning](http://wordpress.org/support/topic/error-with-the-new-update-22)

= 2.2 =
* Now the plugin is able to reflect dynamic page content changes (infinite scroll, ajax basket and other javascript stuff)!!!
* Added new option to plugin settings: Refresh interval. Recommended values between 500 - 2000 milliseconds. Note: setting have impact on the site performance (client side). If you don't have dynamic content, set Refresh interval = 0. 
* Mobile Detect class updated to version 2.5.7

= 2.1 =
* New option to define custom widget IDs for static sidebars and etc.
* New option to disable plugin on mobile devices.
* Fixed javascript error when no sidebars exists on a page.

= 2.0 =
* Fixed footer overlapping problem! Now users can customize top and bottom margins for the fixed widgets from the admin area (Appearance -> Fixed Widget Options).
* Added localization support

= 1.0.3 =
* Normalized plugin behavior when sidebar is longer then main content. Note: possible overlapping with footer is still exists.

= 1.0.2 =
* Fixed problem with widgets displayed only on certain pages.
* Optimized javascript code.

= 1.0.1 =
* Improved compatibility with Webkit based browsers (like Chrome and Safari).
* Removed unnecessary CSS.

= 1.0 =
* First public release.

== Upgrade Notice ==

= 6.0.0 =

Major rewrite of the frontend JavaScript with fixes for a lot of edge cases. Does not need jQuery anymore. See more details in the Changelog.
