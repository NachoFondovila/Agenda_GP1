<?php
/* Smarty version 3.1.33, created on 2020-05-27 22:25:09
  from 'C:\xampp\htdocs\App\Templates\Viajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ececca544e608_42540969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3075f2c42754a1caa4c56ceb1edd908b2d33a11c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\Templates\\Viajes.tpl',
      1 => 1590610842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ececca544e608_42540969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form action="addViaje" method="POST" class="formViaje">
            <input type="hidden" name="user_id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['MAIL'];?>

            <h2 class="centrado">Agrega tu viaje</h2>
            <input type="text" class="centrado" name="name" placeholder="Nombre">
            <textarea name="desc" cols="40" rows="5" class="centrado" placeholder="Descripción"></textarea>
            <input type="submit" class="centrado" value="Agregar">
        </form> 
        <h2 class="centrado">Mis viajes</h2>
        <ul class="list4columnas">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['viajes']->value, 'viaje');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['viaje']->value) {
?>
            <li>
                <a href="<?php echo BASE_URL;?>
showVuelos/<?php echo $_smarty_tpl->tpl_vars['viaje']->value->id_viaje;?>
"><div><h3><?php echo $_smarty_tpl->tpl_vars['viaje']->value->id_viaje;?>
</h3></div></a>
            </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>


    </body>
    </html>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
