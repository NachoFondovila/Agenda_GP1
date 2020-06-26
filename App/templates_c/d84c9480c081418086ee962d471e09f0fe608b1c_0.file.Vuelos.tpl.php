<?php
/* Smarty version 3.1.33, created on 2020-06-26 18:07:55
  from 'C:\xampp\htdocs\App1\Templates\Vuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef61d5b420101_19231626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd84c9480c081418086ee962d471e09f0fe608b1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App1\\Templates\\Vuelos.tpl',
      1 => 1593187671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ef61d5b420101_19231626 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'vuelo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vuelo']->value) {
?>
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
        <br>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
