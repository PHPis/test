{extends 'index.tpl'}

{block name="body"}
    <h1 class="m-4">Настройка профиля</h1>
    <a href="/profile" class="btn btn-primary m-4">Главная</a>
    {$result}
    <form action="" method="POST" class="m-4">
        <label for="">ФИО</label>
        <input type="text" class="form-control" name="fio" placeholder="FIO" value="{$user['fio']}">
        <input name="submit" class="btn btn-primary mt-3" type="submit" value="Сохранить">
    </form>
{/block}