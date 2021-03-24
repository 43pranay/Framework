# Framework
<link rel="stylesheet" type="text/css" media="all" href="markdown_styles.css" />

This Framework based on Object Oriented Concept
Every files are categorized into different directory, following are the directory structure
<svg style="background: #0058ff;border: 1px solid #0058ff;margin-left: 10px;padding: 0 5px;color: white;">important</svg>
<h3><center>Directory Structure 👇</center></h3>
      <strong>/app</strong>
      <ul>
        <li><strong>config: </strong><i>can set base url in config.php also there is helper file configuration</i></li>
        <li><strong>controller: </strong><i>All the view are return from controllers folder, all the controller available in this directory</i></li>
        <li><strong>database: </strong><i>database configuration are available in this directory</i></li>
        <li><strong>helper: </strong><i>helper file are available in this directory</i></li>
        <li><strong>models: </strong><i>all the database related task are performed here, make model available in controller and use</i></li>
        <li><strong>route: </strong><i>Route is the main key for the project without routing file can't be accessible</i></li><span style="background: #0058ff;border: 1px solid #0058ff;margin-left: 10px;padding: 0 5px;color: white;">important</span>
        <li><strong>storage: </strong><i>in this directory can store all the files</i></li>
        <li><strong>views: </strong><i>all view file are available in this directory controller will return view from this directory</i></li>
      </ul>
   
<span>
      
  <span>
    <span style="background: black;color: white;padding: 3px 14px;">&#x23;</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>OOP CONCEPT</b></span>
  </span>
  <span>
    <span style="background: black;color: white;padding: 3px 14px;">#</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>EASY TO USE</b></span>
  </span>
  <span>
    <span style="background: black;color: white;padding: 3px 14px;">#</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>FRAMEWORK</b></span>
  </span>
  <span>
    <span style="background: black;color: white;padding: 3px 14px;">#</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>OPEN SOURCE</b></span>
  </span>
  <span>
    <span style="background: black;color: white;padding: 3px 14px;">#</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>ROUTE BASED</b></span>
  </span>
  <span>
  <span style="background: black;color: white;padding: 3px 14px;">#</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>PHP</b></span>
  </span>
  <span>
    <span style="background: black;color: white;padding: 3px 14px;">#</span><span style="background: #12ae1b;color: white;padding: 3px 14px;"><b>MIT LICENSED</b></span>
  </span>
</span>      
### How to access database

  To access database in the controller use the following file in controller at the top

    * use System\database\Database\Database as DB;

    and then query to the database
    ** Example:
    $query = 'select * from table';
    DB::db()->query($query)->get()
    > to fetch single record form the database use get(), for multiple record use get_all()


### File Storage System

  This will also provide you to store your file with single function
  for accessing storage system use following file in controller

  * use System\Files\Storage;

  and then - <i> Storage::store($file,$path)</i>

        $file = provide file $_FILES['name_of_the_file'] (required)
        $path = path where you want to store the file (optional)

        Note: All the files are stored in the public folder inside storage directory,
        if path are provided the it will stored in storage/public/path otherwise
        storage path will storage/public/files

### 404 page not found

![alt text](https://prime-peck.000webhostapp.com/images/404.png)

### Welcome Page

![alt text](https://prime-peck.000webhostapp.com/images/welcome.png)
