<?php 
//PAGE PRINCIPAL DE L'APPLICATION 

include("../app/Autoloader.php");
use App\Config\Route;
App\Autoloader::register();

Route::set("connexion");
Route::set("inscription");
Route::set("acceuil");


$pageInUrl = isset($_GET['p']) ? $_GET['p'] : null;
$action = isset($_GET['action']) ? $_GET['action'] : null;

Route::execute($pageInUrl,$action);

$body = "";
require "templates/authentification.php";
