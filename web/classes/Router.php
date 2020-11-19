<?php
namespace Classes;

class Router
{
    public function run($request_uri)
    {
        global $route, $smarty;

        foreach ($route as $key => $value) {
            if (!stristr($key, $request_uri))
                continue;

            $arr_path = explode('->', $value);
            $controllerClass    = new $arr_path[0]();
            $func               = $arr_path[1];

            if ($arr_path[2]??null) {
                $controllerClass->$func($arr_path[2]);
                return;
            }
            $controllerClass->$func();
            return;
        }
        header("HTTP/1.0 404 Not Found");
        $smarty->display('404.tpl');
        return;
    }
}