<?php
namespace View;
/**
 * View Class
 */
class View
{
  public static function header()
  {
    include_once LAYOUT_PATH.'/header.php';
  }
  public static function footer()
  {
    include_once LAYOUT_PATH.'/footer.php';
  }
  public static function view($file_name,$data='')
  {
    $viewfile_path = VIEW_PATH.'/'.$file_name.'.php';
    if ($data) {
      foreach ($data as $key => $value) {
        $$key = $value;
      }
    }
    include_once $viewfile_path;
  }
  public static function view_with_header($file_name,$data='')
  {
    $viewfile_path = VIEW_PATH.'/'.$file_name.'.php';
    if ($data) {
      foreach ($data as $key => $value) {
        $$key = $value;
      }
    }
    self::header();
    include_once $viewfile_path;
    self::footer();
  }
}
