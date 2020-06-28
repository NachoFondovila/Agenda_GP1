<?php
/* Smarty version 3.1.33, created on 2020-06-28 02:29:40
  from 'C:\xampp\htdocs\TPE Flying\Agenda_GP1\App\Templates\Viajes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef7e474c65d41_06238287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1000fcf25290c940bec7bfeb06ff609f9794e7ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE Flying\\Agenda_GP1\\App\\Templates\\Viajes.tpl',
      1 => 1593302759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:EstadisticasUsuario.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ef7e474c65d41_06238287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <form action="addViaje" method="POST" class="formViaje">
            <input type="hidden" name="user_id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['MAIL'];?>
>
            <h2 class="centrado">Agrega tu viaje</h2>
            <input type="text" class="centrado" name="name" placeholder="Nombre" required>
            <textarea name="desc" cols="40" rows="5" class="centrado" placeholder="Descripción" required></textarea>
            <div class="centrado">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            <!--<input type="submit" class="centrado" value="Agregar">-->
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
        <?php $_smarty_tpl->_subTemplateRender("file:EstadisticasUsuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
    </html>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
