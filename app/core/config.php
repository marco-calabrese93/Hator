<?php
define("WEBSITE_NAME", "Hator");
/*set database variables*/

define('DB_TYPE', 'mysql');
define('DB_NAME', 'hator_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

/*protocal type http or https*/
define('PROTOCAL', 'http');

/*root and asset paths*/

$path = str_replace("\\", "/", PROTOCAL . "://" . $_SERVER['SERVER_NAME'] . __DIR__ . "/");
$path = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));



// ***** DURANTE LE FASI DI SVILUPPO LO LASCIAMO A TRU MA QUANDO
// IL SITO SARÀ PRONTO VA IMPOSTATO A FALSE ***** 
define("DEBUG", true);

if(DEBUG) {
    ini_set('display_errors', 1);
   
} else {
    ini_set('display_errors', 0);
  
}


/*set to true to allow error reporting
set to false when you upload online to stop error reporting*/