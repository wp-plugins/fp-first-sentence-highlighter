<?php
/*
Plugin Name: FP First Sentence Highlighter
Plugin URI: http://plugins.funkypress.com/first-sentence-highlighter/
Description: Adds new Template Tag 'fp_firstsentence ( $str , $style , $br )', which highlights the first sentence in any given content ($str) using a specified CSS style ($style). Works well with get_the_content(). Check out the readme for tricks and tips.
Tags: CSS, excerpt, content, formatting, highlight, page, post, style, template tag, text,
Version: 1.0
Author: Joss Crowcroft
Author URI: http://www.funkypress.com
*/
/* License Information:

	Copyright 2009  Joss Crowcroft & FunkyPress (email : joss@funkypress.com)

	This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. 
	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	To obtain a copy of the GNU General Public License, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301 USA
*/

/* AUTHOR REQUEST:
	You are free to do whatever you like with this code - however, if you are re-releasing this function with modifications or building on it for any other public-release purpose - or using it in your premium Wordpress Theme - please give credit in the // Comments with a link to FunkyPress.com. Let me know what you're doing with it and I'll even give you a backlink on the website. Much love, 
	Joss @ FunkyPress 
*/

function fp_firstsentence ($str, $style, $br = 1) {

	// $str = content;
	// $style = CSS styling for first sentence (e.g. "font-size:14.5px;font-weight:bold;")
	// $br = Add line breaks to new lines (default = true : if specified false = returns content as a block with no line breaks.)
 	// Like this function? Visit FunkyPress for more nice-lookin' Wordpress resources. Much love,

	$firstfullstop = stripos ( $str  , "." );

	$array = explode(".", $str, 2); //Split string into 2 chunks by first full stop (removes the stop)

	$str = '<span style="' . $style . '">' . $array[0] . '. </span>' . $array[1];

	if ( $br == true || $br == 1 ) { echo nl2br($str); }
	else { echo $str; }
}?>