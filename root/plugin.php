<?php
/**
 * Plugin Name: {%= title %}
 * Plugin URI:  {%= homepage %}{%= prefix %}
 * Description: {%= description %}
 * Version:     0.1.0
 * Author:      {%= author_name %}
 * Author URI:  {%= author_url %}
 * License:     GPLv2+
 * Text Domain: {%= prefix %}
 * Domain Path: /languages
 */

/**
 * Copyright (c) {%= grunt.template.today('yyyy') %} {%= author_name %}
 *
 *                 _____________
 *                /      ____   \
 *          _____/       \   \   \
 *         /\    \        \___\   \
 *        /  \    \                \
 *       /   /    /          _______\
 *      /   /    /          \       /
 *     /   /    /            \     /
 *     \   \    \ _____    ___\   /
 *      \   \    /\    \  /       \
 *       \   \  /  \____\/    _____\
 *        \   \/        /    /    / \
 *         \           /____/    /___\
 *          \                        /
 *           \______________________/
 *
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 * Built using grunt-wp-plugin
 * Copyright (c) 2013 10up, LLC
 * https://github.com/10up/grunt-wp-plugin
 */

// Load the plugin class
require_once 'includes/plugin.class.php';

/**
 * Class {%= plugin_class %}
 */
Class {%= plugin_class %} extends {%= plugin_class %}_Plugin {

	public function __construct() {
		$this->setup( '{%= prefix %}', 'plugin' );
	}

}
${%= plugin_class %} = new {%= plugin_class %}();