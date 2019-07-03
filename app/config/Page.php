<?php 
namespace App\Config;

class Page
{
    public static function show($body,$template)
    {
        require "../public/pages/".$body.".php";
    }
}