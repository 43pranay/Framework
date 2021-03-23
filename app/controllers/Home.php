<?php
use My_Controller\Controller as My_Controller;
use System\database\Database\Database as DB;
use System\Files\Storage;
use View\View as View;

class Home extends My_Controller
{
  public function index()
  {
    return View::view('welcome');
  }
}
