<?php
namespace My_Controller;
/**
 * My Controller Class
 */
class Controller
{
  public function load_modal($value='')
  {
    if (is_array($value)) {
      foreach ($value as $modal) {
        $this->$modal = new $modal;
      }
    }
    if (is_string($value)) {
      $this->$value = new $value;
    }
    return $this;
  }
}
