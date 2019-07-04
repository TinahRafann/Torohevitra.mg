<?php 
namespace App\Config;

class Page
{
    public static function getView($body,$template)
    {
        ob_start();
        require "../public/pages/".$body.".php";
        $content = ob_get_clean();
        require "../public/templates/$template.php";
    }
}