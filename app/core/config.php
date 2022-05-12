<?php
define("WEBSITE_TITLE",'MY SHOP');
define("DB_NAME",'eshop_db');
define("DB_USER",'root');
define("DB_PASS",'');
define('THEME', 'eshop/');
define('DEBUG', true);
if (DEBUG){
    ini_set('display_errors', 1);
    //ini_set('display_startup_errors', '1');
    //ini_set('display_startup_errors', '1');
    //error_reporting(E_ALL);
}else{
    
    ini_set('display_errors', 0);
    //ini_set('display_startup_errors', '0');
}

