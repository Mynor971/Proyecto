<?php
/* Smarty version 4.0.4, created on 2022-03-30 15:49:14
  from 'C:\xampp\htdocs\Proyecto\View\Sass.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62445fda2defc9_20386429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3367098894d6d9878a46c11a743edba6d780a6db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyecto\\View\\Sass.tpl',
      1 => 1647450032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Encabezados/Encabezado.tpl' => 1,
    'file:Encabezados/PiePagina.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_62445fda2defc9_20386429 (Smarty_Internal_Template $_smarty_tpl) {
?>
        
<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="center">sass</h1>

    <?php if ((isset($_smarty_tpl->tpl_vars['dato']->value))) {?>
      <h2 class="center">Info recibida: <?php echo $_smarty_tpl->tpl_vars['dato']->value;?>
</h2>

      <br>

      <table>
        <tr>
          <td>info</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </table>

      <br><br>

        <table>
        <tr>
          <td>nombre</td>
          <td>apellido</td>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuario']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['us']->value;?>
</td>
            
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </table>


    <?php }?>

   <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/PiePagina.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
