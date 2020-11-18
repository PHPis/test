<?php
namespace Controller;

class Home
{
    public function indexAction($cafe = 'Альтаир') {
        global $smarty, $db;

        if ($cafe == 'bar') {
            $cafe = 'Бар Альтаир';
        } elseif ($cafe == 'ermak') {
            $cafe = 'Ермак';
        }
        $sql = "SELECT * FROM cafe WHERE cafe_name='{$cafe}'";
        $result = $db->query($sql)->fetch();

        $smarty->assign([
            'cafe' => $result['cafe_name'],
            'menu' => $result['menu_dir'],
            'phone' => $result['phone'],
            'address' => $result['address'],
            'time_work' => $result['time_work'],
            'instagram' => $result['instagram'],
            'ok' => $result['ok'],
            'file_name' => 'home.tpl',
        ]);
        $smarty->display('index.tpl');
    }

}
