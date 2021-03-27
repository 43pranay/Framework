# Framework

This Framework based on Object Oriented Concept
Every files are categorized into different directory, following are the directory structure


<h3><center>Directory Structure 👇</center></h3>

---
###  In "/app" Directory

* **config:** *can set base url in config.php also there is helper file configuration*
* **controller:** *All the view are return from controllers folder, all the controller available in this directory*
* **database:** *database configuration are available in this directory*
* **helper:** *helper file are available in this directory*
* **models:** *all the database related task are performed here, make model available in controller and use*
* **route:** *Route is the main key for the project without routing file can't be accessible*![Important](https://img.shields.io/badge/-Important-critical)
* **storage:** *in this directory can store all the files*
* **views:** *all view file are available in this directory controller will return view from this directory*


![made-with-OOP](https://img.shields.io/badge/%23-OOP%20CONCEPTS-brightgreen)
![LIGHTWEIGHT](https://img.shields.io/badge/%23-LIGHTWEIGHT-blueviolet)
![FRAMEWORK](https://img.shields.io/badge/%23-FRAMEWORK-brightgreen)
![OPEN SOURCE](https://img.shields.io/badge/%23-OPEN%20SOURC-blue)
![ROUTE BASED](https://img.shields.io/badge/%23-ROUTE%20BASED-orange)
![PHP](https://img.shields.io/badge/%23-PHP-blueviolet)
![MIT LICENSED](https://img.shields.io/badge/%23-MIT%20LICENSED-ff69b4)
![EASY TO USE](https://img.shields.io/badge/%23-EASY%20TO%20USE-brightgreen)


---

### How to access database

  To access database in the controller use the following code in your controller at the top

&emsp;&emsp;`use System\database\Database\Database as DB;`

&emsp;&emsp;and then query to the database

**Example:**
```PHP
$query = 'select * from table';
DB::db()->query($query)->get();
```

> to fetch single record form the database use get(), for multiple record use get_all()


---

### Config
Here you can set base url for the system, to access base url in your all your file using<br>
`base_url();` function you can also access any route by passing route name inside<br>
`base_url('RouteName1');`<br><br>
OR by concat route name<br>
`base_url().RouteName1;`<br>

*Note: Do not remove or change helper file name*

---

### Database
In this directory you can set database configuration for the system

---

### Helper
In this directory you can add no of functions and use them in all your system


---

### Layout
Layout is the directory where you header and footer included

*Note: Do not change file name or remove*

---
### File Storage System

This will also provide you to store your file with single function for accessing storage system use following file in controller

&emsp;&emsp;`use System\Files\Storage;` and then <br>
&emsp;&emsp;`Storage::store($file,$path)`

> &emsp;&emsp; $file => provide file `$_FILES['name_of_the_file']` (required)<br>
&emsp;&emsp;$path => path where you want to store the file (optional)

*Note: All the files are stored in the public folder inside storage directory,<br>
if path are provided then it will stored in storage/public/path otherwise
storage path will be `storage/public/files`*

---

### Modal

**How to access modal in controller**
To access single modal then write below code in your controller file
```PHP
$variable = $his->load_modal('Modal_Name');

//After modal loaded then access that modal using it modal name
$this->Modal_Name->functionName();
```
To load multiple modal then write below code in your controller file
```PHP
$variable = $his->load_modal(array('Modal1','Modal2','Modal3'));

//After modal loaded then access that modal using it modal name
$this->Modal1->functionName1();
$this->Modal2->functionName2();
$this->Modal3->functionName3();
```
In your modal file it must be include database file<br>
`use System\database\Database\Database as DB;`


---

### View

Create view in view directory inside app directory
then in your controller load view using below code
```PHP
function functionName(){
  return VIEW:: view('view_file');
}
```
if you would like to pass some data with your view the the code will be 👇
```PHP
$data = array(
  'key1' => 'value1',
  'key2' => 'value2',
);
//and then
return VIEW:: view('view_file',$data);
```
***If you want to load view with header use following syntax***<br>
> return VIEW:: view_with_header('view_file');

OR

> return VIEW:: view('view_file');

*Note: It must need to pass data  with array as an key value pair*<br>
To access this data in your view use following syntax<br>
`echo $key1; or echo $key2;`


---

### Controller
controller is the file from where your view and modal are managed


---

### Route
Routing is the main key terms in this system without routing you can't access any controller

**Syntax for routing**
```PHP
Route::get([
  'RouteName'=>'ControllerName@FunctionName'
]);

//you can add multiple route with comma (,) seperated key value pair in get function

Route::get([
  'RouteName1'=>'ControllerName@FunctionName1',
  'RouteName2'=>'ControllerName@FunctionName2',
  'RouteName3'=>'ControllerName@FunctionName3',
]);
```
access rout in browser<br>
`http://system_path/RouteName1`

### 404 page not found

![404 Not Found](https://prime-peck.000webhostapp.com/images/404.png)

### Welcome Page

![Welcome](https://prime-peck.000webhostapp.com/images/welcome.png)


---

[![Pranay's GitHub stats](https://github-readme-stats.vercel.app/api?username=43pranay&show_icons=true&theme=dracula&disable_animations=false)](https://github.com/43pranay/Framework)

[![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=43pranay&layout=compact)](https://github.com/43pranay/Framework)

<!-- [![Walktime](https://github-readme-stats.vercel.app/api/wakatime?username=43pranay&layout=compact)](https://github.com/43pranay/Framework) -->
