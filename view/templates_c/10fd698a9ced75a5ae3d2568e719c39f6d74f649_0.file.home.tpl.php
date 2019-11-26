<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-26 16:27:52
  from '/var/www/html/view/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddd52886dbb31_54975103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10fd698a9ced75a5ae3d2568e719c39f6d74f649' => 
    array (
      0 => '/var/www/html/view/home.tpl',
      1 => 1574785668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddd52886dbb31_54975103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15286393915ddd52886d8570_14294506', "body");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'index.tpl');
}
/* {block "body"} */
class Block_15286393915ddd52886d8570_14294506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15286393915ddd52886d8570_14294506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
            <h1 id="home-h1"><?php echo $_smarty_tpl->tpl_vars['cafe']->value;?>
</h1>
        </div>
        <div class="row justify-content-center p-4 pb-5">
            <a class="btn-choose btn-home-menu" href="<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
">Открыть меню</a>
            <a class="btn-choose btn-home-menu ny-btn-menu" href="./front/menu/menu-ng.pdf">Новогоднее меню</a>
        </div>
    </div>
</div>
<div class="container-fluid home-content-wrapper">
    <div class="bg-triangle-left-home"></div>
    <div class="bg-triangle-right-home"></div>
    <div class="block-wrapper container p-4 " id="home-info-wrapper">
        <div class="container">
            <a href="tel:<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"><img src="/front/pics/iphone.png" class="social-icons" alt=""><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</a>
        </div>
        <div class="container">
            <img src="/front/pics/time.png" class="social-icons" alt=""> <?php echo $_smarty_tpl->tpl_vars['time_work']->value;?>

        </div>
    </div>
</div>
<footer class="block-wrapper container-fluid footer-wrapper">
    <div class="container">
        <div class="row">
            <div class=" col-md-6 footer-content p-4 mulled-thin">
                Мы в социальных сетях <br/>
                <a href="<?php echo $_smarty_tpl->tpl_vars['instagram']->value;?>
"><img src="/front/pics/instagram.png" class="social-icons" alt=""></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
"><img src="/front/pics/ok.png" class="social-icons" alt=""></a>
            </div>
            <div class=" col-md-6 footer-content p-4 mulled-thin">
                <img src="/front/pics/pin_2.png" class="social-icons" alt=""><?php echo $_smarty_tpl->tpl_vars['address']->value;?>

            </div>
        </div>
    </div>
</footer>
<?php
}
}
/* {/block "body"} */
}
