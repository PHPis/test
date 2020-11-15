<?php
namespace controller;

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

        $smarty->assign('cafe', $result['cafe_name']);
        $smarty->assign('menu', $result['menu_dir']);
        $smarty->assign('phone',$result['phone']);
        $smarty->assign('address',$result['address']);
        $smarty->assign('time_work',$result['time_work']);
        $smarty->assign('instagram',$result['instagram']);
        $smarty->assign('ok',$result['ok']);
        $smarty->assign('file_name','home.tpl');
        $smarty->display('index.tpl');
    }

}
