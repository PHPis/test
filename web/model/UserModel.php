<?php

namespace model;

class UserModel
{
    private $db;

    public function __construct()
    {
        global $db;
        $this->db = $db;
    }

    public function isUserExist(string $login)
    {
        $sql = "SELECT id FROM user WHERE login=" . $this->db->quote($login);
        $query = $this->db->query($sql)->rowCount();
        if ($query > 0) {
            return "Пользователь с таким логином уже существует в базе данных";
        }

        return null;
    }

    public function saveUser(string $login, string $password)
    {
        return $this->db->exec("INSERT INTO user SET login=" . $this->db->quote($login) . ", password=" . $this->db->quote($password));
    }

    public function getUserByLogin(string $login)
    {
        $query = $this->db->query("SELECT * FROM user WHERE login = " . $this->db->quote($login));
        if ($query) {
            return $query->fetch();
        }
        return null;
    }

    public function authorizeHash(int $id, string $hash, $ip = '')
    {
        return $this->db->exec("UPDATE user SET hash='" . $hash . "' " . $ip . " WHERE id='" . $id . "'");
    }

    public function getUser()
    {
        return $this->db->query("SELECT *, INET_NTOA(user_ip) AS user_ip FROM user WHERE id = '" . intval($_COOKIE['id']) . "' LIMIT 1")->fetch();
    }

    public function changeFIO(string $fio)
    {
        return $this->db->exec("UPDATE user SET fio=" . $this->db->quote($fio)) . " WHERE id='" . $_COOKIE['id'] . "'";
    }

    public function changePassword(string $password)
    {
        return $this->db->exec("UPDATE user SET password=" . $this->db->quote($password)) . " WHERE id='" . $_COOKIE['id'] . "'";
    }
}