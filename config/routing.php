<?php
$route = [
    "#/profile/settings#i" => "controller\\ProfileController->settingsAction",
    "#/profile/passwd#i" => "controller\\ProfileController->changePasswordAction",
    "#/profile#i" => "controller\\ProfileController->mainAction",
    "#/login#i" => "controller\\LoginController->loginAction",
    "#/logout#i" => "controller\\LoginController->logoutAction",
    "#/$#i" => "controller\\RegistrationController->registrationAction",
];
$router = new classes\Router();
$router->run($_SERVER["REQUEST_URI"]);