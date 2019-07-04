<?php 
namespace App\Controllers;

use App\config\Page;
class Controller 
{
    /**
     * Specific function called in child class to show the page dynamicatly
     */
    public static function index()
    {
        $fullWhithNamespace = explode("\\",get_called_class());
        $calledCLassControllerOnly = $fullWhithNamespace[count($fullWhithNamespace) - 1];
        $calledClassControllerExploded = explode("Controller",$calledCLassControllerOnly);
        $pageName = $calledClassControllerExploded[0];
        echo Page::getView($pageName,self::getPageTemplate($pageName));
    }
    public static function getPageTemplate($pageName)
    {
        $pagesTemplate = require "../app/config/pagesTemplate.php";
        return $pagesTemplate[$pageName];
    }
}