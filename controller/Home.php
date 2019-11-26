<?php
namespace controller;

class Home
{
    public function indexAction($cafe = 'altair') {
        global $smarty, $db;

        $sql = "SELECT cafe_name, menu_dir, phone,
                address, time_work, instagram, ok 
                FROM cafe WHERE alter_name='{$cafe}'";
        $result = $db->query($sql)->fetch_array();

        $smarty->assign([
            'cafe' => $result['cafe_name'],
            'menu' => $result['menu_dir'],
            'phone' => $result['phone'],
            'address' => $result['address'],
            'time_work' => $result['time_work'],
            'instagram' => $result['instagram'],
            'ok' => $result['ok'],
        ]);
        $smarty->display('home.tpl');
    }

}
