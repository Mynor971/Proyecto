<?php
/* Smarty version 4.0.4, created on 2022-04-01 17:42:11
  from 'C:\xampp\htdocs\ProyectoA\View\PaginaPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62471d53e5fa23_16771534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6b8024fac2597b22cf6e995c7ca4d8b3b9d195' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProyectoA\\View\\PaginaPrincipal.tpl',
      1 => 1648827728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:piepagina.tpl' => 2,
  ),
),false)) {
function content_62471d53e5fa23_16771534 (Smarty_Internal_Template $_smarty_tpl) {
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
