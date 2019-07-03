<?php 
namespace App\Controllers;

use App\Config\Page;
class connexionController{
    public static function index()
    {
        echo Page::show('connexion','');
    }
}