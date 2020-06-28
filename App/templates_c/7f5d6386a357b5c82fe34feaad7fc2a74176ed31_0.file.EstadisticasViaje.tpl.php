<?php
/* Smarty version 3.1.33, created on 2020-06-28 03:14:28
  from 'C:\xampp\htdocs\TPE Flying\Agenda_GP1\App\templates\EstadisticasViaje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef7eef4e2b8d1_27678335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f5d6386a357b5c82fe34feaad7fc2a74176ed31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE Flying\\Agenda_GP1\\App\\templates\\EstadisticasViaje.tpl',
      1 => 1593306849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef7eef4e2b8d1_27678335 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="recuadrado">
        <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Roma") {?>
            <h3><span>Distancia a recorrer: </span><span>36 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>2</span></h3>
            <h3><span>Cantidad de escalas: </span>
                <?php if ($_smarty_tpl->tpl_vars['vuelos']->value != null && count($_smarty_tpl->tpl_vars['vuelos']->value) != 0) {?>
                <span><?php echo count($_smarty_tpl->tpl_vars['vuelos']->value)-1;?>
</span>
                <?php } else { ?>
                <span>0</span>
                <?php }?>
            </h3>
        <?php } elseif ($_smarty_tpl->tpl_vars['viaje']->value == "Barcelona") {?>
            <h3><span>Distancia a recorrer: </span><span>0 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>0</span></h3>
            <h3><span>Cantidad de escalas: </span>
                <?php if ($_smarty_tpl->tpl_vars['vuelos']->value != null && count($_smarty_tpl->tpl_vars['vuelos']->value) != 0) {?>
                <span><?php echo count($_smarty_tpl->tpl_vars['vuelos']->value)-1;?>
</span>
                <?php } else { ?>
                <span>0</span>
                <?php }?>
            </h3>
        <?php } elseif ($_smarty_tpl->tpl_vars['viaje']->value == "Madrid") {?>
            <h3><span>Distancia a recorrer: </span><span>21 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>1</span></h3>
            <h3><span>Cantidad de escalas: </span>
                <?php if ($_smarty_tpl->tpl_vars['vuelos']->value != null && count($_smarty_tpl->tpl_vars['vuelos']->value) != 0) {?>
                <span><?php echo count($_smarty_tpl->tpl_vars['vuelos']->value)-1;?>
</span>
                <?php } else { ?>
                <span>0</span>
                <?php }?>
            </h3>
        <?php } else { ?>
            <h3><span>Distancia a recorrer: </span><span>0 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>0</span></h3>
            <h3><span>Cantidad de escalas: </span>
                <span>0</span>    
        <?php }?>

    </div>
    <span></span><?php }
}
