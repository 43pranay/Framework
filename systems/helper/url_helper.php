<?php
require_once './app/config/config.php';
$GLOBALS['config'] = $config;;
if (!function_exists('base_url')) {
  function base_url($path=''){
    $base_url = $GLOBALS['config']['base_url'].$path;
    return $base_url;
  }
}
