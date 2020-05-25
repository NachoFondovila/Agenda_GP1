{include file="header.tpl"}
    <form action="addViaje" method="POST" class="formViaje">
        <h2 class="centrado">{$viaje}</h2>
        <textarea name="" cols="40" rows="5" class="centrado" 
            placeholder="Descripción" value=""></textarea>
        <input type="submit" class="centrado" value="Agregar">
    </form>

    <form action="addVuelo" method="POST" class="formViaje formVuelo">
        <div>
            {if $vuelos|@count != 0}
            {* {if $vuelos != null} *}
            {* si el arreglo de vuelos no está vacío.. *}
                <h3 class="centrado">Agregá una escala</h3>
            {else}
                <h2 class="centrado">Personalizá tu vuelo</h2>
            {/if}
                <ul class="listInputs">
                    <li>
                        <input type="number" placeholder="Número de vuelo">
                    </li>
                    <li>
                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Fecha de ida">
                    </li>
                    <li>
                        <input type="text" placeholder="Compañia">
                    </li>
                </ul>
                <input type="submit" class="centrado" value="Agregar">
        </div>
    </form>
    {foreach from=$vuelos item=$vuelo}
        <h2 class="centrado">{$vuelo->lugarLlegada}</h2>
        <div><h3>Número de Vuelo: {$vuelo->nroVuelo}</h3></div>
        <div><h3>Compañía: {$vuelo->compania}</h3></div>
        <div><h3>Aeropuerto de salida: {$vuelo->aeropuertoSalida}</h3></div>
        <div><h3>Aeropuerto de llegada: {$vuelo->aeropuertoLlegada}</h3></div>
        <div><h3>Lugar de salida: {$vuelo->lugarSalida}</h3></div>
        <div><h3>Fecha de regreso: {$vuelo->fechaVuelta}</h3></div>
        <div><h3>Fecha de llegada: {$vuelo->fechaIda}</h3></div>
        <div><h3>Hora de salida: {$vuelo->horaIda}</h3></div>
        <div><h3>Hora de llegada: {$vuelo->horaLlegada}</h3></div>
        <div><h3>Asiento: {$vuelo->asiento}</h3></div>
        <div><h3>código: {$vuelo->codigoReserva}</h3></div>
        <div><h3>Tiempo entre escalas: {$vuelo->escala}</h3></div>
        <div><h3>Información de la aeronave: {$vuelo->infoAeronave}</h3></div>
    {/foreach}
    
    </body>
    </html>
   {* {include "footer.tpl"} *}