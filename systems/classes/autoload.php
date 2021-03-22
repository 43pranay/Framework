<?php
function custom_autoloader($class) {
  $file_path = CONTROLLER_PATH.'/'.$class.'.php';
  if (file_exists($file_path)) {
    include $file_path;
  }
}

spl_autoload_register('custom_autoloader');

/**
 * load all classes
 */

/**
 * [include description]Include Route File
 * @var [type]
 */
 include_once ROUTE_PATH.'/web_route.php';

 /**
  * [include description]Include Helper File for system path
  * @var [type]
  */
 include_once SYSTEM_PATH.'/helper/url_helper.php';

/**
 * [include_once description]Include Config file
 * @var [type]
 */
include_once CONFIG_PATH.'/config.php';
