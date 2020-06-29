<?php
namespace Main;

use Main\Login;

class App
{
    const DIR = '/bebras/ol/public/';
    const VIEW_DIR = './../view/';
    const URL = 'http://localhost/bebras/ol/public/';
    private static $params = [];

    private static $guarded = ['slaptas-1', 'slaptas-2'];

    public static function start()
    {
        session_start();
        $param = str_replace(self::DIR, '', $_SERVER['REQUEST_URI']);
        self::$params = explode('/', $param);

        if (self::$params[0] == 'doLogin') {

            $login = new Login;

            if ($login->result()) {
                self::redirect('slaptas-1');
            }
            else {
                self::redirect('login');
            }
        }

        if (in_array(self::$params[0], self::$guarded)) {
            if (!Login::auth()){
                self::redirect('login');
            }
        }


        if (file_exists(self::VIEW_DIR.self::$params[0].'.php')) {
            require(self::VIEW_DIR.self::$params[0].'.php');
        }

    }

    public static function getUriParams()
    {
        return self::$params;
    }

    public static function redirect($param)
    {
        header('Location: '.self::URL.$param);
        die();
    }


}