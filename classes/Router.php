<?php
namespace Classes;

class Router
{
    public function run($request_uri)
    {
        global $route;

        foreach ($route as $key => $value) {
            if (!preg_match($key, $request_uri)){
                continue;
            }
            $arr_path = explode('->', $value);
            $controllerClass    = new $arr_path[0]();
            $func               = $arr_path[1];
            if (isset($arr_path[2])) {
                $controllerClass->$func($arr_path[2]);
                die;
            }
            $controllerClass->$func();
            die;
        }
        return "404 404";
    }
}