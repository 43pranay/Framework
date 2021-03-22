<?php
namespace system;

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class System
{
  private static $db_array;
  function __construct($array)
  {
    self::$db_array = $array;
  }
  public static function ConfigureDatabase()
  {
    $array = self::$db_array;
    if ($array['host'] && $array['username'] && $array['database'] || $array['password']) {
      $mysqli = 'mysqli';
      $conn = new $mysqli($array['host'], $array['username'], $array['password'],$array['database']);
    }else {
      $conn = false;
    }
    if ($conn) {
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      return $conn;
    }
  }
}

include_once 'classes/autoload.php';
