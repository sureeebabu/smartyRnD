<?php
/* Smarty version 3.1.36, created on 2020-08-02 09:42:38
  from 'D:\xampp\htdocs\smarty\demo\templates\contactus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f266e6eb00655_37156938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c3f3cae649639ad4d4d6315fb8b86569b75c22a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty\\demo\\templates\\contactus.tpl',
      1 => 1596354157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f266e6eb00655_37156938 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'ContactUs'), 0, false);
?>


<h1>Contact us</h1>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
