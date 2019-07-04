<?php 
namespace App\Models;

class User
{
    protected $id;
    protected $name;
    protected $firstName;
    protected $email;
    protected $password;

    public function __construct($name,$firstName,$email,$password)
    {
        $this->name = $name;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->password = $password;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getfirstName()
    {
        return $this->firstName;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

}