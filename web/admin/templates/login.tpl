{extends 'index.tpl'}

{block name="body"}
    <h1 class="m-4">Авторизация</h1>

    <a href="/" class="btn btn-primary m-4" > Зарегистрироваться</a>
    <form method="POST" class="m-4">
        Логин <br>
        <input class="form-control" name="login" type="text" required><br>
        Пароль <input class="form-control" name="password" type="password" required><br>
        Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>
        <input name="submit" type="submit" value="Войти">
    </form>
    <ul>
        {foreach from=$err item=error}
            <li>{$error}</li>
        {/foreach}
    </ul>
{/block}