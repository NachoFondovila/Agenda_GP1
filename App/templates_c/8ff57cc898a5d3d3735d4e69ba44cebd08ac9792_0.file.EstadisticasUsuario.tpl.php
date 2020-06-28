<?php
/* Smarty version 3.1.33, created on 2020-06-28 03:19:10
  from 'C:\xampp\htdocs\TPE Flying\Agenda_GP1\App\templates\EstadisticasUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef7f00e50df14_58410270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff57cc898a5d3d3735d4e69ba44cebd08ac9792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE Flying\\Agenda_GP1\\App\\templates\\EstadisticasUsuario.tpl',
      1 => 1593307149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7f00e50df14_58410270 (Smarty_Internal_Template $_smarty_tpl) {
?><div class= "recuadrado">
    
    <h3><span>Cantidad de viajes: </span>
        <?php if ($_smarty_tpl->tpl_vars['viajes']->value != null && count($_smarty_tpl->tpl_vars['viajes']->value) != 0) {?>
        <span><?php echo count($_smarty_tpl->tpl_vars['viajes']->value);?>
</span>
        <?php } else { ?>
        <span>0</span>
        <?php }?>
    </h3>
    <h3><span>Cantidad de vuelos: </span><span><?php echo $_smarty_tpl->tpl_vars['allVuelos']->value;?>
</span></h3>
    <h3><span>Km recorridos en total: </span><span>57 km</span></h3> 
    
</div>


<?php }
}
