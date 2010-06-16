=== Simple First Sentence Highlighter ===
Contributors: Joss1
Tags: CSS, excerpt, content, formatting, highlight, page, post, style, template tag, text,
Requires at least: 2.0.2
Tested up to: 2.8.2
Stable tag: 1.1

Highlight the first sentence in a string with a specified CSS style. (Plugin no longer supported)

== Description ==

* NB: This plugin is no longer supported.

Adds a new Template Tag **`fp_firstsentence( $str , $style , $br )`**, which highlights the first sentence in a string/content ($str) with a specified CSS style ($style) - for example: "font-size:14.5px;font-weight:bold;color:#990000;".

NB: By default, $br = 1, meaning that the function will preserve line/paragraph breaks in the content. You can optionally specify $br = 0 to have the function echo a block of text with no breaks.

== Installation ==

1. Upload `fp_firstsentence.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use `<?php fp_firstsentence( $str , $style , $br ); ?>` in your theme templates.

NB: The $style must be valid CSS, for example "font-size:14.5px;font-weight:bold;color:#990000;" or anything that you may have used in <span style=""> to style the text. 

$br is optional, and only needed if you are specifying false / 0.

== Frequently Asked Questions ==

N/A

== Screenshots ==

N/A

== Changelog ==

= 1.1 =
* No longer supported.

= 1.0 =
* Released as standalone plugin.

= 0.5 =
* Added $br option to echo text with preserved paragraph breaks.