<!doctype html>
<html lang="en">
{include file="header.tpl"}
<body>

    {include file="admin/nav_panel.tpl"}

    <div class="col-md-10 content-wrapper container-fluid">
        <div class="row">
            <div id="left_panel_case" class="col-lg-3 col-md-4 col-xs-12">
                {if isset($left_menu)}
                    {include file=$left_menu}
                {/if}
            </div>
            <div class="col-md-7  col-xs-12 case-wrapper">
                {include file=$file_tmp}
                {*Название кейса*}
                {*Этап кейса*}
                {*Постраничная навигация*}
            </div>
        </div>
    </div>

    <footer class="container-fluid col-md-10 page-footer font-small pt-4">footer</footer>
</body>
</html>