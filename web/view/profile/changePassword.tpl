{extends 'index.tpl'}

{block name="body"}
    <h1 class="m-4">Смена пароля </h1>
    <a href="/profile" class="btn btn-primary m-4">Главная</a>
    {$result}
    <form action="" method="POST" class="m-4">
        <label for="old">Старый пароль</label>
        <input type="password" id="old" class="form-control" name="old">
        <label for="new1">Новый пароль</label>
        <input type="password" class="form-control" name="new1">
        <label for="new2">Повторите новый пароль</label>
        <input type="password" class="form-control" name="new2">
        <input name="submit" class="btn btn-primary mt-3" type="submit" value="Сохранить">
    </form>
{/block}