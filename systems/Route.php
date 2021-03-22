<?php
// namespace Route;
// include_once 'app/helper/helper.php';


/**
 * Route
 */
class Route
{
  public static $controller;
  public static $function;
  public static function get($path_to_the_controller)
  {
    $route = $_GET['route'];
    if ($route != '') {
      foreach ($path_to_the_controller as $key => $value) {
        if ($key == $route) {
          $explode_path = explode('@',$value);
          self::$controller  = $explode_path[0];
          self::$function    = $explode_path[1];
        }
      }
    }else {
      self::$controller  = 'Home';
      self::$function    = 'index';
    }
    // dd(self::$function);

    self::call_to_controller();
  }
  public static function call_to_controller()
  {
    if (class_exists(self::$controller)) {
      $controller = new self::$controller;
      $function_name = self::$function;
      // dd($function_name);
      echo $controller->$function_name();
      // dd('test');
    }
  }
}
