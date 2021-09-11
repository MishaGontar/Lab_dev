<?php

class user
{
    public string $username;
    public string $password;
    public int $id;

    public function __construct($username, $password, $id,)
    {
        $this->username = $username;
        $this->password = $password;
        $this->id = $id;
    }
}