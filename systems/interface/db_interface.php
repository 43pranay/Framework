<?php
namespace DBInterface\db;
/**
 * Database Interface
 */
interface db_interface
{
  public function get();

  public function get_all();

  public function query($q);
}
