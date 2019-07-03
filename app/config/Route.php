<?php 
namespace App\Config;
class Route
{
    const controllerNamespace = "App\Controllers\\";
    private static $pages = [];
    public static function set($page)
    {
        self::$pages[$page] = $page . "Controller";
    }
    public static function get()
    {
        return self::$pages;
    }
    public static function execute($pageInUrl,$action)
    { 
        if($pageInUrl != null){
            $pageExist = false;
            foreach(self::get() as $route){
                $route = explode("Controller",$route);
                $pageInRoute = $route[0];
                if($pageInRoute == $pageInUrl)
                {
                    $pageExist = true;
                    self::setController(Route::controllerNamespace.$pageInUrl,$action);
                }
            }
        }else 
        {
            echo "Erreur 404, page introuvable";
        }
        if(!$pageExist){
            echo " ato Erreur 404, page introuvable";
        }
       
       
    }
    protected static function setController($pageInUrl,$action)
    {
        $controller = $pageInUrl."Controller";
        $reflectionClass = new \ReflectionClass($controller);
        if($reflectionClass->hasMethod($action))
        {
            $controller::$action();
        }else 
        {
            echo "action introuvable";
        }
        
    }
}