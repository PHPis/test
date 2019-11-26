{extends 'index.tpl'}

{block name="body"}
<div class="container-fluid home-content-wrapper">
    <div class="bg-pic-home"></div>
    <div class="bg-shadow-home"></div>
    <div class="block-wrapper container  mulled-thin">
        <div class="row">
            <div class="dropdown">
                <button class="btn-choose" style="width:200px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Выберите заведение
                </button>
                <div class="dropdown-menu" id="cafe-dropdown" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/">Альтаир</a>
                    <a class="dropdown-item" href="/ermak">Ермак</a>
                    <a class="dropdown-item" href="/bar">Бар Альтаир</a>
                </div>
            </div>
        </div>
    </div>
    <div class="block-wrapper container ">
        <div class="row justify-content-center p-4">
            <h1 id="home-h1">{$cafe}</h1>
        </div>
        <div class="row justify-content-center p-4 pb-5">
            <a class="btn-choose btn-home-menu" href="{$menu}">Открыть меню</a>
            <a class="btn-choose btn-home-menu ny-btn-menu" href="./front/menu/menu-ng.pdf">Новогоднее меню</a>
        </div>
    </div>
</div>
<div class="container-fluid home-content-wrapper">
    <div class="bg-triangle-left-home"></div>
    <div class="bg-triangle-right-home"></div>
    <div class="block-wrapper container p-4 " id="home-info-wrapper">
        <div class="container">
            <a href="tel:{$phone}"><img src="/front/pics/iphone.png" class="social-icons" alt="">{$phone}</a>
        </div>
        <div class="container">
            <img src="/front/pics/time.png" class="social-icons" alt=""> {$time_work}
        </div>
    </div>
</div>
<footer class="block-wrapper container-fluid footer-wrapper">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 footer-content p-4 mulled-thin">
                Мы в социальных сетях <br/>
                <a href="{$instagram}"><img src="/front/pics/instagram.png" class="social-icons" alt=""></a>
                <a href="{$ok}"><img src="/front/pics/ok.png" class="social-icons" alt=""></a>
            </div>
            <div class=" col-md-6 footer-content p-4 mulled-thin">
                <img src="/front/pics/pin_2.png" class="social-icons" alt="">{$address}
            </div>
        </div>
    </div>
</footer>
{/block}
