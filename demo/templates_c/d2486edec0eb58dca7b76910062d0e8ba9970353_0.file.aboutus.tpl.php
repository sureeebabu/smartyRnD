<?php
/* Smarty version 3.1.36, created on 2020-08-02 09:40:25
  from 'D:\xampp\htdocs\smarty\demo\templates\aboutus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f266de9ee12c3_38803377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2486edec0eb58dca7b76910062d0e8ba9970353' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty\\demo\\templates\\aboutus.tpl',
      1 => 1596354025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f266de9ee12c3_38803377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'AboutUs'), 0, false);
?>


<h1>Aboutus</h1>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
