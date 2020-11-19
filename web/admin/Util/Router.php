<?php
namespace Admin;

class Router
{
    public function run($request_uri)
    {
        global $route;

        if (AdminController::checkAccess()) {
            $admin = new AdminController();
            $admin->indexAction();
        } else {
            foreach ($route as $key => $value) {
                if (!stristr($key, $request_uri))
                    continue;

                $arr_path = explode('->', $value);
                $controllerClass    = new $arr_path[0]();
                $func               = $arr_path[1];

                if ($arr_path[2]??null) {
                    $controllerClass->$func($arr_path[2]);
                    die;
                }
                $controllerClass->$func();
                die;

//            if (!in_array($arr_path[0], ['controller\RegistrationController', 'controller\LoginController']) ) {
//                $login = new LoginController();
//                if (!$login->checkAccess()) {
//                    header("HTTP/1.0 404 Not Found");
//                    die;
//                }
//            }
//            $controllerClass->$func();
//            die;
            }
            header("HTTP/1.0 404 Not Found");
            return;
        }
    }
}