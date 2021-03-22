<?php
use My_Controller\Controller as My_Controller;
use System\database\Database\Database as DB;
use System\Files\Storage;
use View\View as View;

class Home extends My_Controller
{
  public function index()
  {
    // dd(new Storage);
    // $sql = "insert into test (data) values ('New Entry')";
    $sql = "SELECT * FROM test ORDER BY ID DESC LIMIT 1";
    $result = DB::getInstance()->query($sql)->get();
    $mydata = [
      'firstname' => 'Pranay',
      'lastname'  => 'Tabhane',
      'data' => $result->get
    ];
    return View::view('my_view',$mydata);
  }
  public function login()
  {
    return View::view('login');
  }
  public function fileUpload()
  {
    $path = 'images/';
    $file = Storage::store($_FILES['my_file']);
    $sql = "insert into test (data) values ('$file')";
    $result = DB::getInstance()->query($sql);
    dd($file);
  }
}
