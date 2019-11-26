<?php
/* Smarty version 3.1.34-dev-7, created on 2019-11-26 16:15:12
  from '/var/www/html/view/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ddd4f903813e9_02763103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '826d15d84a851e72285a258ea3c4994382ec3be8' => 
    array (
      0 => '/var/www/html/view/index.tpl',
      1 => 1574784872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ddd4f903813e9_02763103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4721440215ddd4f9033cc06_22045873', "body");
?>

</body>

</html>
<?php }
/* {block "body"} */
class Block_4721440215ddd4f9033cc06_22045873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4721440215ddd4f9033cc06_22045873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "body"} */
}
