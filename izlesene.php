<?php
/*
Plugin Name: İzlesene
Plugin URI: http://www.wordpress.org/plugins/izlesene/
Description: The official plugin for adding widgets and services provided by İzlesene to your WordPress-powered website.
Version: 1.0
Author: İzlesene
Author URI: http://www.izlesene.com
License: GPL2
*/

wp_oembed_add_provider( '#http://(www\.)?izlesene\.com/video/.*#i', 'http://www.izlesene.com/oembed', true );
