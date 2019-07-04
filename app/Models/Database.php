<?php 
namespace App\Models;

use \PDO;
class Database 
{
    protected static $PDOinstance;
    public static function getPDOInstance()
    {
        //singleton pattern
        if(self::$PDOinstance == null)
        {
            self::$PDOinstance = new PDO("mysql:dbname=torohevitra; host = localhost","tinah","lifedev");
            self::$PDOinstance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        return self::$PDOinstance;
    }
    public static function add(User $newUser)
    {
        $req = self::getPDOInstance()->prepare('INSERT INTO users(name,firstname,email,password) VALUES(:name,:firstname,:email,:password)');
        $req->execute([
            ':name' => $newUser->getName(),
            ':firstname' => $newUser->getFirstName(),
            ':email' => $newUser->getEmail(),
            ':password' => $newUser->getPassword()
        ]);

    }
}