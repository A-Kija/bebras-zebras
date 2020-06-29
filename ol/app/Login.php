<?php
namespace Main;

class Login
{
    
    private $loginResult = false;

    public function __construct()
    {
        
        $data = [
            ['name' => 'Petras', 'pass' => md5('123')],
            ['name' => 'AloYzas', 'pass' => md5('123')],
        ];
        
        if (!empty($_POST)) {
            foreach ($data as $user) {
                if ($user['name'] === $_POST['user'] &&
                $user['pass'] === md5($_POST['password'])) {
                    $_SESSION['login'] = 1;
                    $this->loginResult = true;
                }
            }
        }
    }

    public function result()
    {
        return $this->loginResult;
    }

    public static function auth()
    {
        return (isset($_SESSION['login']) && $_SESSION['login'] == 1);
    }

}



