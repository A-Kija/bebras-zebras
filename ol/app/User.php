<?php
namespace Main;

class User
{
    public static function createNew()
    {
        return ['name' => $_POST['user'], 'pass' => md5($_POST['password'])];
    }
}

