<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    define('ROOT', 'http://localhost/mvc/public');
    
    // database configaration
    define('DBNAME', 'farmlink');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
} else 
{
    define('ROOT', 'https://www.mywebsiatename.com');

    // database configaration
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBDRIVER', '');
}

 define('APP_NAME', "Farm Link");
 define('APP_DESC', "Farm Link Project");

//   true means show errors
//   by changing this value can show errors or not
//   true => show error 
//   false => not show error 
define('DEBUG', true);