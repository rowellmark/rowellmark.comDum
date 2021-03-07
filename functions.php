<?php
/**
 * Controllers.
 *
 * @since 1.0.0
 *
*/
namespace Headless\Theme;
define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_DIR', realpath( get_template_directory() ) . DIRECTORY_SEPARATOR);
require 'FileLoader.php';
$fileLoader = new FileLoader();
$fileLoader->load_directory('app');