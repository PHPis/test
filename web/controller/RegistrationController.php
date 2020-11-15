<?php

namespace controller;

use model\UserModel;

class RegistrationController
{
    /**
     * Регистрация нового пользователя
     * route = '/'
     */
    public function registrationAction()
    {
        global $smarty;

        $userModel = new UserModel();

        $err = [];
        if (isset($_POST['submit'])) {
            //Валидация логина
            $result = $this->checkLogin($_POST['login']);
            if ($result != null) {
                $err[] = $result;
            }

            //В БД не должно быть пользователей с одинаковыми логинами
            $result = $userModel->isUserExist($_POST['login']);
            if ($result != null) {
                $err[] = $result;
            }

            if (count($err) == 0) {
                $login = $_POST['login'];
                $password = md5(md5(trim($_POST['password'])));

                $count = $userModel->saveUser($login, $password);
                if ($count == 0) {
                    $err[] = "Ошибка";
                } else {
                    header("Location: /login");
                    exit();
                }
            }
        }
        $smarty->assign('err', $err);
        $smarty->display('reg.tpl');
    }

    private function checkLogin(string $login)
    {
        if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
            return "Логин может состоять только из букв английского алфавита и цифр";
        }

        if (strlen($login) < 3 or strlen($login) > 30) {
            return "Логин должен быть не меньше 3-х символов и не больше 30";
        }

        return null;
    }
}