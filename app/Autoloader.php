<?php 
namespace App;
class Autoloader {
    public static function register()
    {
        spl_autoload_register(array(__CLASS__,'load'));
    }
    public static function load($className)
    {
        //ON NE CHARGE QUE LES CLASSES DANS LE NAMESPACE 
        
            if(strpos($className, ''.__NAMESPACE__.'//') == 0){
                $className = str_replace(__NAMESPACE__."\\", "", $className);
                $className = str_replace("\\","/",$className);
                require __DIR__."/$className.php";
            } 
    }
  
}