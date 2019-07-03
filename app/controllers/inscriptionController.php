<?php 
namespace App\Controllers;

use App\Config\Page;
class inscriptionController
{
    public static function index()
    {
        echo Page::show('inscription','');
    }
}