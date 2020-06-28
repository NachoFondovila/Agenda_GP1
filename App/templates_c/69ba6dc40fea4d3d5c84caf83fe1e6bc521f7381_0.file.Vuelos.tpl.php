<?php
/* Smarty version 3.1.33, created on 2020-06-28 03:47:33
  from 'C:\xampp\htdocs\TPE Flying\Agenda_GP1\App\Templates\Vuelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef7f6b5539307_00804810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ba6dc40fea4d3d5c84caf83fe1e6bc521f7381' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE Flying\\Agenda_GP1\\App\\Templates\\Vuelos.tpl',
      1 => 1593308851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:EstadisticasViaje.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ef7f6b5539307_00804810 (Smarty_Internal_Template $_smarty_tpl) {
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
>
                    <li>
                        <input name="Nvuelo" type="number" placeholder="Número de vuelo" required>
                    </li>
                    <li>
                        <input type="date" name="fecha" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Fecha de ida" required>

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

        <div class= "datVuelos">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vuelos']->value, 'vuelo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vuelo']->value) {
?>
                <ul>
                    <li><h4>Número de Vuelo:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_vuelo;?>
</h5></li>
                    <li><h4>Información de la aeronave:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->aeronave;?>
</h5></li>
                    <li><h4>Compañía:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->compania;?>
</h5></li>
                    <li><h4>Aeropuerto de salida:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_aer_origen;?>
</h5></li>
                    <li><h4>Aeropuerto de llegada:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->id_aer_destino;?>
</h5></li>
                    <li><h4>Fecha de inicio:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fecha_inic;?>
</h5></li>
                    <li><h4>Fecha de fin: </h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->fecha_fin;?>
</h5></li>
                    <li><h4>Asiento:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->nro_asiento;?>
</h5></li>
                    <li><h4>Código:</h4> <h5><?php echo $_smarty_tpl->tpl_vars['vuelo']->value->cod_reserva;?>
</h5></li>
                </ul>
            </br></br>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

    </div>
    <h3 class="centrado">Mapa del viaje</h3>
    <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Roma") {?>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MvUOQP1SIhbkWuUmM7EEvHcKeqcRd7vL" width="80%" height="500"></iframe>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Barcelona") {?>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZY8TtjctQTEvI6VTedpL6nEJvwrFPcKT" width="80%" height="500"></iframe>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Madrid") {?>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=11q7K5wUAyOHFPkTSAbLu0BUraOUZe2hb" width="80%" height="500"></iframe>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Mar del Plata") {?>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1E7IX-2bj8U77SLnVNKZh_bRm1Ul9n717" width="80%" height="500"></iframe>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['viaje']->value == "Paris") {?>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1guJTU8YkoqK685qOuCMGR1rCpRnXKXo0" width="80%" height="500"></iframe>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender("file:EstadisticasViaje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
    </html>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
