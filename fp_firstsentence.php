<?php
/*
Plugin Name: Simple First Sentence Highlighter
Plugin URI: http://wordpress.org/extend/plugins
Description: Adds new Template Tag 'fp_firstsentence ( $str , $style , $br )', which highlights the first sentence in any given content ($str) using a specified CSS style ($style).
Tags: CSS, excerpt, content, formatting, highlight, page, post, style, template tag, text,
Version: 1.1
Author: Joss1
*/
/* License Information:
	This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. 
	This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	To obtain a copy of the GNU General Public License, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301 USA
*/


function fp_firstsentence ($str, $style, $br = 1) {

	// $str = content;
	// $style = CSS styling for first sentence (e.g. "font-size:14.5px;font-weight:bold;")
	// $br = Add line breaks to new lines (default = true : if specified false = returns content as a block with no line breaks.)
 	// Like this function? Visit FunkyPress for more nice-lookin' Wordpress resources. Much love,

	$firstfullstop = stripos ( $str  , "." );

	$array = explode(".", $str, 2); //Split string into 2 chunks by first full stop (removes the stop)

	$str = '<span style="' . $style . '">' . $array[0] . '. </span>' . $array[1];

	if ( $br == true || $br == 1 )
		echo nl2br($str);
	else
		echo $str;
}?>