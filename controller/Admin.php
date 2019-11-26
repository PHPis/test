<?php

namespace controller;

class Admin
{
    private $user_role;
    private $user_case_access;
    public function indexAction()
    {
        global $smarty;
        session_start();
        if ((isset($_SESSION['pass']) && ($this->_checkAccess())
            || (isset($_POST['login']) && $this->_passwordVerify($_POST['login'])) )) {
            $smarty->assign('nav_active', 'main');
            $smarty->assign('file_tmp', 'admin/home_content.tpl');
            $smarty->display('admin/index.tpl');
        } else {
            $smarty->display('admin/login.tpl');
        }
    }

    public function caseAction()
    {
        global $smarty;
        $this->_checkAccess();
        $smarty->assign('file_tmp', 'admin/all_cases.tpl');
        $smarty->assign('left_menu', 'admin/cases/left_menu.tpl');
        $smarty->display('admin/index.tpl');
    }

    public function _logout(){
        global $smarty;

        session_start();
        session_destroy();
        header('Location: /admin/');
        $smarty->display('admin/login.tpl');
    }

    private function _checkAccess()
    {
        if (!isset($_SESSION)){
            session_start();
        }
        if ($_SESSION['ra'] == $_SERVER['REMOTE_ADDR'] && isset($_SESSION['pass'])) {
            $this->user_role = $_SESSION['user_role'];
            $this->user_case_access = $_SESSION['case_access'];
            return 1;
        }
        return 0;
    }
    private function _passwordVerify($login)
    {
        global $db;
        $sql = "SELECT * FROM users WHERE login = '{$login}'";
        $result = $db->query($sql)->fetch();
        if (md5($_POST['password']) == $result['password']) {
            $this->user_role = $result['role'];
            $this->user_case_access = $result['case_manager'];
            $_SESSION['ra']             = $_SERVER['REMOTE_ADDR'];
            $_SESSION['pass']           = md5($_POST['password']);
            $_SESSION['case_access']    = $this->user_case_access;
            $_SESSION['user_role']      = $this->user_role;
            return 1;
        }
        return 0;
    }
}