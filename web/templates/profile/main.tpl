{extends 'index.tpl'}

{block name="body"}
    <h1>Профиль пользователя {$user['login']}</h1>
    <a href="profile/settings" class="btn btn-primary">Заполнить личные данные</a>
    <a href="profile/passwd" class="btn btn-primary">Изменить пароль</a>
    <a href="/logout" class="btn btn-primary">Выйти</a>
{/block}