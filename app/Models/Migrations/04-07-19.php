<?php 
//You should manually copy it and paste into sql because i don't know for the moment what should i do for do this automatically
$req = "CREATE Table users(
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(60),
    firstname VARCHAR(60),
    email VARCHAR(80),
    password VARCHAR(80),
    PRIMARY key(id)
)";