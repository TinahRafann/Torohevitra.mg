<?php 
//use this for testing class or other things

include("../app/Autoloader.php");
use App\Config\Route;
App\Autoloader::register();

use App\Models\Database;
use App\Models\User;


Database::add(new User("Fanomezantsoa","Tinah","Tinah@gmail.com","lifedev"));