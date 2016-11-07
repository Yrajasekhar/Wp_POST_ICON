<?php
/*
*Plugin name: ADD Image
*
*version: 1.0 | Author: Rajasekhar | Description: This plugin helps you to integrate an imageIcon to all your posts.
*
*Plugin URI: http://rchitchat.blogspot.in/
*/

function addImage($post){
					/* Here you  have to specify the path of your image */
	$imagewithtext = '<img src="http://localhost/wp/wp-content/themes/twentysixteen/img/ph-1.jpg" style="padding:5px;" height="70px" width="70px" align="left">';
	$imagewithtext.=$post;
	return $imagewithtext;
}


add_filter("the_content","addImage");
?>
