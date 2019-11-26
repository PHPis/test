<div class="col-md-10 header-wrapper container-fluid">
    <nav class="navbar navbar-dark bg-inverse">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link {if $nav_active == 'main'}active{/if}" href="/admin">Главная</a>
            <a class="nav-item nav-link {if $nav_active == 'cases'}active{/if}" href="/admin/cases">Кейсы</a>
            <a class="nav-item nav-link {if $nav_active == 'l2'}active{/if}" href="#">Link</a>
            <a class="nav-item nav-link {if $nav_active == 'l3'}active{/if}" href="#">Link</a>
        </div>
        <div class="pull-xs-right">
                <a href="/admin/logout" class="btn btn-light">Выход</a>
        </div>
    </nav>
</div>