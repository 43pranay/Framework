<?php
namespace System\Files;
/**
  *File Storage System
 */
class Storage
{
  private $special_char;
  private $string;
  private $string1;
  private $string2;
  private $number;

  public static function store($file,$path='')
  {
    if ($file['name']) {
      if ($path) {
        if (substr($path, -1) != '/') {
          die("Please provide backslash '/' at the end of path directory");
        }
        if (!file_exists(STORAGE_PUBLIC_PATH.$path) && !is_dir(STORAGE_PUBLIC_PATH.$path)) {
          die("directory not created! Please create directory");
        }
        $target_dir = STORAGE_PUBLIC_PATH.$path;
      }else {
        $target_dir = STORAGE_PATH;
      }
      $imageFileType = strtolower(pathinfo($file['name'],PATHINFO_EXTENSION));
      $randomString = (new self)->random_string();
      $filename = $randomString.'.'.$imageFileType;
      $target_file = $target_dir . basename($filename);
      try {
        $status = move_uploaded_file($file["tmp_name"], $target_file);
      } catch (\Exception $e) {
        throw new \Exception($e->getMessage());
      }

      if ($status) {
        return $filename;
      }else {
        die("Please try again!");
      }
    }else {
      die("Please provide file");
    }
  }
  private function random_string()
  {
    $this->string       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $this->string1      = 'fjdsfjfshkFSFSDFewqHGJiGHJeGiouSDFSDeiwqSDFSDu66569814526FSDFd';
    $this->string2      = 'fdgfdgdfgDqeqtyrtyERTIOUIGHJGHJewqHGJiGH7878GFDGdgdfg4526FSDFd';
    $this->number       = '00002121454789754542121324567897895454121212124454796454665546';
    $this->special_char = '!@$~^$~&^&!$_@~^^)^&$^~!_~$@!~!@^@~$^$^&^()(~&^&^$@)!@~$%^&()_';

    $characters = $this->special_char.$this->string.$this->number.$this->string1.$this->string2;
    $charactersLength = strlen($characters);
    $length = 21;
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    mt_srand(time());
    $mt_rand = mt_rand();
    $concat_string = time().$randomString.$mt_rand;
    $final_string = str_shuffle($concat_string);
    return $final_string;
  }
}
