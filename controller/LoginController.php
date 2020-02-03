<?php

namespace controller;

use model\UserModel;

class LoginController
{
    private $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    /**
     * Авторизация пользователя
     * route = "/login"
     */
    public function loginAction()
    {
        $err = []; //Массив ошибок для вывода в шаблон

        if (isset($_POST['submit'])) {
            $userModel = new UserModel();//Класс для работы с БД таблицей User

            $user = $userModel->getUserByLogin($_POST['login']);

            if (($user != null) && $user['password'] === md5(md5($_POST['password']))) {
                $hash = md5($this->generateCode(10));

                $insip = '';
                if (!empty($_POST['not_attach_ip'])) { //Авторизация возможна с IP пользователя для надёжности
                    $insip = ", user_ip=INET_ATON('" . $_SERVER['REMOTE_ADDR'] . "')";
                }

                $result = $userModel->authorizeHash($user['id'], $hash, $insip); //Установка hash, который будет храниться в куках
                if ($result != 0 && $result == 1) {
                    setcookie("id", $user['id'], time() + 60 * 60 * 24 * 30, "/");
                    setcookie("hash", $hash, time() + 60 * 60 * 24 * 30, "/", null, null, true);

                    header("Location: /profile");
                    exit();
                } else {
                    $err[] = "Ошибка авторизации";
                }
            } else {
                $err[] = "Вы ввели неправильный логин\пароль";
            }
        }

        $this->smarty->assign('err', $err);
        $this->smarty->display('login.tpl');
    }

    /**
     * Выход из аккаунта пользователя (удаление cookies)
     * route = "/logout"
     */
    public function logoutAction()
    {
        setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
        setcookie("hash", "", time() - 3600 * 24 * 30 * 12, "/", null, null, true);

        header("Location: /");
        exit;
    }

    public function generateCode($length = 6)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
        $code = "";
        $clen = strlen($chars) - 1;
        while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0, $clen)];
        }
        return $code;
    }

    /**
     * Проверка доступа осуществляется для всех классов кроме
     * регистрации - 'controller\RegistrationController' и авторизации - 'controller\LoginController'
     * Если проверка не пройдена,то 404 статус ответа страницы
     * смотреть файл 'classes/Router.php'
     */
    public function checkAccess()
    {
        if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
            $userModel = new UserModel();

            $userdata = $userModel->getUser($_COOKIE['id']);
            if (($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])
                or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR']) and ($userdata['user_ip'] !== "0"))) {
                setcookie("id", "", time() - 3600 * 24 * 30 * 12, "/");
                setcookie("hash", "", time() - 3600 * 24 * 30 * 12, "/", null, null, true);
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

}
