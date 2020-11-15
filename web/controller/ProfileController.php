<?php

namespace controller;

use model\UserModel;

class ProfileController
{
    private $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    /**
     * Главная страница пользователя
     * route = '/profile'
     */
    public function mainAction()
    {
        $userModel = new UserModel();
        $user = $userModel->getUser();
        $this->smarty->assign('user', $user);
        $this->smarty->display('profile/main.tpl');
    }

    /**
     * Страница настроек пользователя
     * Изменение ФИО
     * route = '/profile/settings'
     */
    public function settingsAction()
    {
        $result = '';
        $userModel = new UserModel();
        $user = $userModel->getUser();
        if (isset($_POST['submit'])) {
            $result = $userModel->changeFIO(htmlspecialchars($_POST['fio']));
            if ($result) {
                $result = "Сохранено";
                $user = $userModel->getUser();
            } else {
                $result = "Ошибка сохранения";
            }
        }

        $this->smarty->assign('result', $result);
        $this->smarty->assign('user', $user);
        $this->smarty->display('profile/settings.tpl');
    }

    /**
     * Страница изменения пароля
     * route = '/profile/passwd'
     */
    public function changePasswordAction()
    {
        $result = '';
        $userModel = new UserModel();
        $user = $userModel->getUser();
        if (isset($_POST['submit'])) {
            if ($user['password'] == md5(md5(htmlspecialchars(trim($_POST['old']))))) {
                if (trim($_POST['new1']) == trim($_POST['new2'])) {
                    $result = $userModel->changePassword(md5(md5(trim($_POST['new1']))));
                    if ($result) {
                        $result = "Сохранено";
                    } else {
                        $result = "Ошибка";
                    }
                } else {
                    $result = "Пароли не совпадают";
                }

            } else {
                $result = "Старый пароль неверен";
            }
        }

        $this->smarty->assign('result', $result);
        $this->smarty->assign('user', $user);
        $this->smarty->display('profile/changePassword.tpl');
    }
}