<?php
/* Smarty version 3.1.36, created on 2020-08-02 09:46:37
  from 'D:\xampp\htdocs\smarty\demo\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f266f5d2a8729_93870649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224f76c90c6072223a954e11831d58f242b6d5f1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty\\demo\\templates\\header.tpl',
      1 => 1596354394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5f266f5d2a8729_93870649 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css"  >
        <link rel="stylesheet" href="css/custom.css"  >
    </head>

    <body bgcolor="#ffffff">

    <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
<?php }
}
