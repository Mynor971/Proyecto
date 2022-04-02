<?php
/* Smarty version 4.0.4, created on 2022-04-02 22:37:45
  from 'C:\xampp\htdocs\Proyecto\View\PaginaPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_6248b419bad438_98549906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a66db4a7cd5a6c16f59dc95d97d57fd8ff247a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\View\\PaginaPrincipal.tpl',
      1 => 1648931685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:piepagina.tpl' => 2,
  ),
),false)) {
function content_6248b419bad438_98549906 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PAGINA PRINCIPAL</h1>
    <h2>PaginaPrincipal.tpl</h2>
    <?php $_smarty_tpl->_subTemplateRender("file:piepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:piepagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
