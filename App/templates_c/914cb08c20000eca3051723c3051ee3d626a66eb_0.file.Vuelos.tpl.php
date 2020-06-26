<?php
/* Smarty version 3.1.33, created on 2020-06-27 00:28:26
  from 'C:\xampp\htdocs\App\Templates\Vuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef6768a945eb7_89996855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '914cb08c20000eca3051723c3051ee3d626a66eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\Templates\\Vuelos.tpl',
      1 => 1593210485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ef6768a945eb7_89996855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <h2 class="centrado"><?php echo $_smarty_tpl->tpl_vars['viaje']->value;?>
</h2>


    <form action="<?php echo BASE_URL;?>
addVuelo" method="POST" class="formViaje formVuelo">

        <div>
            <?php if ($_smarty_tpl->tpl_vars['vuelos']->value != null && count($_smarty_tpl->tpl_vars['vuelos']->value) != 0) {?>
                            <h3 class="centrado</h3>">Agregá una escala 
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

                    </li>
                    <li>
                        <input name="compy" type="text" placeholder="Compañía">
                    </li>
                </ul>
                <div class="centrado">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
                <!--<input type="submit" class="centrado" value="Agregar">-->
        </div>
    </form>
    <div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'vuelo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vuelo']->value) {
?>
            <ul class="datVuelos">
                <li><h3>Número de Vuelo:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_vuelo;?>
</li>
                <li><h3>Información de la aeronave:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->aeronave;?>
</li>
                <li><h3>Compañía:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->compania;?>
</li>
                <li><h3>Aeropuerto de salida:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_aer_origen;?>
</li>
                <li><h3>Aeropuerto de llegada:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_aer_destino;?>
</li>
                <li><h3>Fecha de inicio:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fecha_inic;?>
</li>
                <li><h3>Fecha de fin: </h3><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fecha_fin;?>
</li>
                <li><h3>Asiento:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->nro_asiento;?>
</li>
                <li><h3>Código:</h3> <?php echo $_smarty_tpl->tpl_vars['vuelo']->value->cod_reserva;?>
</li>
            </ul>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
            <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Roma") {?>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1v_X1Xw28SzM17loWfHExTmb8fAddadMr" width="80%" height="500"></iframe>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Barcelona") {?>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZY8TtjctQTEvI6VTedpL6nEJvwrFPcKT" width="80%" height="500"></iframe>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Madrid") {?>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=11q7K5wUAyOHFPkTSAbLu0BUraOUZe2hb" width="80%" height="500"></iframe>
            <?php }?>
    </body>
    </html>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
