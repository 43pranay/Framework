<?php
include BASEPATH.'/systems/Route.php';
// use Route\Route;

Route::get([
  'check'=>'CheckController@test',
  'test'=>'Testontroller@test',
  'work'=>'Testontroller@test',
  'login'=>'Home@login',
  'fileUpload'=>'Home@fileUpload'
]);
