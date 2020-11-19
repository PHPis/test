<?php
namespace Admin;


class AdminController
{
    private $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    public function indexAction()
    {
        $this->smarty->assign('err', []);
        $this->smarty->display('login.tpl');
    }

    public static function checkAccess(): bool
    {
        return true;
    }
}