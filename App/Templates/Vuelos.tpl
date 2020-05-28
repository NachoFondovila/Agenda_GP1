{include file="header.tpl"}
        <h2 class="centrado">{$viaje}</h2>


    <form action="{BASE_URL}addVuelo" method="POST" class="formViaje formVuelo">

        <div>
            {if $vuelos!=null  && $vuelos|@count != 0}
            {* si el arreglo de vuelos no está vacío.. *}
                <h3 class="centrado">Agregá una escala</h3>
            {else}
                <h2 class="centrado">Personalizá tu vuelo</h2>
            {/if}
                <ul class="listInputs">
                    <input type="hidden" name="viaje" value={$viaje}
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
                <input type="submit" class="centrado" value="Agregar">
        </div>
    </form>
    {foreach from=$vuelos item=$vuelo}
        <div><h3>Número de Vuelo: {$vuelo->id_vuelo}</h3></div>
        <div><h3>Compañía: {$vuelo->compania}</h3></div>
        <div><h3>Aeropuerto de salida: {$vuelo->id_aer_origen}</h3></div>
        <div><h3>Aeropuerto de llegada: {$vuelo->id_aer_destino}</h3></div>
        <div><h3>Fecha de inicio: {$vuelo->fecha_inic}</h3></div>
        <div><h3>Fecha de fin: {$vuelo->fecha_fin}</h3></div>
        <div><h3>Asiento: {$vuelo->nro_asiento}</h3></div>
        <div><h3>Código: {$vuelo->cod_reserva}</h3></div>
        <div><h3>Información de la aeronave: {$vuelo->aeronave}</h3></div>
        <br>

    {/foreach}
    
    </body>
    </html>
    {include "footer.tpl"}