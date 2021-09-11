<?php
include_once './../Models/User.php';

class data
{
    public array $data = [];

    public function __construct()
    {
        array_push($this->data, new user("admin", "admin123", 0));
        array_push($this->data, new user("Misha", "1234", 1));
        array_push($this->data, new user("Bogdan", "pas", 2));
        array_push($this->data, new user("Vlad", "word", 3));
        array_push($this->data, new user("Denis", "hello", 4));
        array_push($this->data, new user("1wef", "123", 5));
    }

    public function LoginCheck($username, $password)
    {
        foreach ($this->data as $userTrue) {

            $r_u = (string)$userTrue->username;
            $r_p = (string)$userTrue->password;

            if (($r_u === (string)$username) && ($r_p === $password)) {
                setcookie("i", (string)$userTrue->id,time()+60*60*24*30,path: '/');
                return $userTrue->id;
            }
        }
        return null;
    }
}
$data = new data();
