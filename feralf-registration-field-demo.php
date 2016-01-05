<?php
/*
Plugin Name: FE Registration and Login Forms - Description Demo
Plugin URI:  n/a
Description: This is just a simple plugin for Front End Registration and Login Forms, may become more of a demo plugin the future
Version:     0.1
Author:      Nikhil Vimal
Author URI:  http://nik.techvoltz.com
 */

function feralf_registration_custom_field( $args ) {

	// Our argument here is the description the user will recieve when they signup
	$args['description'] = "This is someone's Bio";

	return $args;

}
// This filter is NOT in 2.0, please use this in any release above 2.0
add_filter('feralf_registration_args', 'feralf_registration_custom_field');