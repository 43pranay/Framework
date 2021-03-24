# Framewore

This Framework based on Object Oriented Concept
Every files are categorized into different directory, following are the directory structure

<center><h5>Directory Structure 👇</h5></center>
      /app
      <ul>
        <li><strong>config: </strong><i>can set base url in config.php also there is helper file configuration</i></li>
        <li><strong>controller: </strong><i>All the view are return from controllers folder, all the controller available in this directory</i></li>
        <li><strong>database: </strong><i>database configuration are available in this directory</i></li>
        <li><strong>helper: </strong><i>helper file are available in this directory</i></li>
        <li><strong>models: </strong><i>all the database related task are performed here, make model available in controller and use</i></li>
        <li><strong>route: </strong><i>Route is the main key for the project without routing file can't be accessible</i></li>
        <li><strong>storage: </strong><i>in this directory can store all the files</i></li>
        <li><strong>views: </strong><i>all view file are available in this directory controller will return view from this directory</i></li>
      </ul>

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

  and then - *** Storage::store($file,$path)

        $file = provide file $FILES['name_of_the_file'] (required)
        $path = path where you want to store the file (optional)

        Note: All the files are stored in the public folder inside storage directory,
        if path are provided the it will stored in storage/public/path otherwise
        storage path will storage/public/files

### 404 page not found

![alt text](https://prime-peck.000webhostapp.com/images/404.png)

### Welcome Page

![alt text](https://prime-peck.000webhostapp.com/images/welcome.png)
