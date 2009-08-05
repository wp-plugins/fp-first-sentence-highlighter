=== FunkyPress First Sentence Highlighter ===
Contributors: Joss Crowcroft
Donate link: http://www.funkypress.com/first-sentence-highlighter#donate
Tags: CSS, excerpt, content, formatting, highlight, page, post, style, template tag, text,
Requires at least: 2.0.2
Tested up to: 2.8.2
Stable tag: 1.0

Adds a new Template Tag that highlights the first sentence in a string with a specified CSS style. Works well with get_the_content().

== Description ==

The FunkyPress First Sentence Highlighter adds a new Template Tag **`fp_firstsentence( $str , $style , $br )`**, which highlights the first sentence in a string/content ($str) with a specified CSS style ($style) - for example: "font-size:14.5px;font-weight:bold;color:#990000;".

Works charmingly well with **`get_the_content()`** or **`get_the_excerpt()`** to add Newspaper-style emphasis on post content.

This beautifully simple function allows you to add emphasis to the first sentence of a post without actually specifying it in the post editor, thus the post will display as normal on its single page.

Places where this function comes in handy:

* To add emphasis to each entry in an archive list.
* To create a Newspaper/Magazine-style lead-in on a featured post on the front page.
* To highlight the first sentence of posts in a certain category (i.e. Featured) when browsing archives.
* So many more possible uses! See the screenshots and [Plugin Homepage](http://www.funkypress.com/first-sentence-highlighter/ "FunkyPress First Sentence Highlighter") for examples.

NB: By default, $br = 1, meaning that the function will preserve line/paragraph breaks in the content. You can optionally specify $br = 0 to have the function echo a block of text with no breaks.

Check out the screenshots for examples, and a live demo at the [Plugin Homepage](http://www.funkypress.com/first-sentence-highlighter/ "FunkyPress First Sentence Highlighter")

Much Love,

== Installation ==

1. Upload `fp_firstsentence.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use `<?php fp_firstsentence( $str , $style , $br ); ?>` in your theme templates.

NB: The $style must be valid CSS, for example "font-size:14.5px;font-weight:bold;color:#990000;" or anything that you may have used in <span style=""> to style the text. 

$br is optional, and only needed if you are specifying false / 0.

== Frequently Asked Questions ==

= Got a question? =

Please get in touch!

= Got a suggestion? =

See above.

== Screenshots ==

1. Screenshots to be added by mid-August.

== Changelog ==

= 1.0 =
* Released as standalone plugin.

= 0.5 =
* Added $br option to echo text with preserved paragraph breaks.