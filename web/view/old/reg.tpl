{extends 'index.tpl'}

{block name="body"}
    <h1 class="m-4">Регистрация</h1>
    <a href="/login" class="btn btn-primary m-4" > Войти</a>
    <form method="POST"  class="m-4">
        Логин <input class="form-control" name="login" type="text" required><br>
        Пароль <input class="form-control" name="password" type="password" required><br>
        <input class="btn btn-primary" name="submit" type="submit" value="Зарегистрироваться">
    </form>
    <ul>
        {foreach from=$err item=error}
            <li>{$error}</li>
        {/foreach}
    </ul>
{/block}
