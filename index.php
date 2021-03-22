<?php
header('Access-Control-Allow-Origin: *');
require_once 'vendor/autoload.php';
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
/**
 * [$app_path description]Path to the app folder
 * @var string
 */
 $app_path = 'app/';
/**
 * [ description]Path to the controller
 * @var [type]$controller_path
 */
 $controller_path  = 'controllers';

/**
 * [ description]Path to the system
 * @var [type]
 */
 $system_path = 'systems';

/**
 * [ description]Path to the view  folder
 * @var [type]
 */
 $view_path = 'views';

/**
 * [ description]Path to the Model folder
 * @var [type]
 */
 $model_path = 'models';

/**
 * [$route_path description]Path to the Route folder
 * @var string
 */
 $route_path = 'route';

/**
 * [$config_path description]Path to the config folder
 * @var string
 */
$config_path = 'config';

/**
 * [$layout_path description]Path To the layout folder
 * @var string
 */
$layout_path = 'layout';

/**
 * [$storage_path description]Path To he Storage folder
 * @var string
 */
$storage_path = 'storage/public/files/';

/**
 * [$storage_path description]Storage Public Path;
 * @var string
 */
$storage_public_path = 'storage/public/';
/**
 * [define description]Define all path
 * @var [type]
 */
define('BASEPATH',__DIR__);
define ('SITE_ROOT', realpath(dirname(__FILE__)));
define('APP_PATH',$app_path);
define('SYSTEM_PATH',$system_path);
define('CONTROLLER_PATH',APP_PATH.$controller_path);
define('MODELS_PATH',APP_PATH.$model_path);
define('VIEW_PATH',APP_PATH.$view_path);
define('ROUTE_PATH',APP_PATH.$route_path);
define('CONFIG_PATH',APP_PATH.$config_path);
define('LAYOUT_PATH',APP_PATH.$layout_path);
define('STORAGE_PATH',SITE_ROOT.'/'.APP_PATH.$storage_path);
define('STORAGE_PUBLIC_PATH',SITE_ROOT.'/'.APP_PATH.$storage_public_path);


include_once SYSTEM_PATH.'/system.php';
