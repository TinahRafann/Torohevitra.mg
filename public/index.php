<?php 
//PAGE PRINCIPAL DE L'APPLICATION 

include("../app/Autoloader.php");
use App\Config\Route;
App\Autoloader::register();

Route::set("connexion");
Route::set("inscription");
Route::set("acceuil");
Route::set("reponses");

//Getting the page enter in URL, if not defined, "connexion" will be the default value
$pageInUrl = isset($_GET['p']) ? $_GET['p'] : "connexion";

//Getting the action enter in URL, if not defined, "index" will be the default value
$action = isset($_GET['action']) ? $_GET['action'] : "index";

Route::execute($pageInUrl,$action);


