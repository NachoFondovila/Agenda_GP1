<?php
/* Smarty version 3.1.33, created on 2020-05-27 17:13:37
  from 'C:\xampp\htdocs\App\Templates\Vuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ece83a1dcb165_90419805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914cb08c20000eca3051723c3051ee3d626a66eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\Templates\\Vuelos.tpl',
      1 => 1590592414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ece83a1dcb165_90419805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <h2 class="centrado"><?php echo $_smarty_tpl->tpl_vars['viaje']->value;?>
</h2>
        
    <form action="<?php echo BASE_URL;?>
addVuelo" method="POST" class="formViaje formVuelo">
        <div>
            <?php if ($_smarty_tpl->tpl_vars['vuelos']->value != null && count($_smarty_tpl->tpl_vars['vuelos']->value) != 0) {?>
                            <h3 class="centrado">Agregá una escala</h3>
            <?php } else { ?>
                <h2 class="centrado">Personalizá tu vuelo</h2>
            <?php }?>
                <ul class="listInputs">
                    <input type="hidden" name="viaje" value=<?php echo $_smarty_tpl->tpl_vars['viaje']->value;?>

                    <li>
                        <input name="Nvuelo" type="number" placeholder="Número de vuelo">
                    </li>
                    <li>
                        <input type="date" name="fecha" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Fecha de ida">
                        <!-- Arreglar fecha porque en la base figura como timestamp y no lo toma si es text -->
                    </li>
                    <li>
                        <input name="compy" type="text" placeholder="Compañía">
                    </li>
                </ul>
                <input type="submit" class="centrado" value="Agregar">
        </div>
    </form>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'vuelo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vuelo']->value) {
?>
        <h2 class="centrado"><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_viaje;?>
</h2>
        <div><h3>Número de Vuelo: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_vuelo;?>
</h3></div>
        <div><h3>Compañía: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->compania;?>
</h3></div>
        <div><h3>Aeropuerto de salida: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_aer_origen;?>
</h3></div>
        <div><h3>Aeropuerto de llegada: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_aer_destino;?>
</h3></div>
        <div><h3>Fecha de inicio: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fecha_inic;?>
</h3></div>
        <div><h3>Fecha de fin: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fecha_fin;?>
</h3></div>
        <div><h3>Asiento: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->nro_asiento;?>
</h3></div>
        <div><h3>Código: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->cod_reserva;?>
</h3></div>
        <div><h3>Información de la aeronave: <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->aeronave;?>
</h3></div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </body>
    </html>
   <?php }
}