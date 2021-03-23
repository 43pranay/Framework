<?php
namespace System\database\Database;

include_once './app/database/db_config.php';
use system\System as System;
use DBInterface\db\db_interface as DBInerface;
/**
 *
 */
class Database extends System implements DBInerface
{
  private static $_instance = null;
  protected $result;
  public $get;
  public static function db($array='')
  {
    if (self::$_instance === null) {
      self::$_instance = new self($array);
    }
    return self::$_instance;
  }

  private function __construct($array)
  {
    parent::__construct($array);
  }
  public function query($q)
  {
    $this->result = self::ConfigureDatabase()->query($q);
    return $this;
  }
  public function get()
  {
    $this->get = $this->result->fetch_assoc();
    return $this;
  }
  public function get_all()
  {
    $this->get = $this->result->fetch_all();
    return $this;
  }
  public function insert()
  {
    // code...
  }
}
Database::db($database_array);
