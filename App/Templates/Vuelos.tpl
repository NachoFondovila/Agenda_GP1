{include file="header.tpl"}
<h2 class="centrado">{$viaje}</h2>
    <form action="{BASE_URL}addVuelo" method="POST" class="formViaje formVuelo">
        <div>
            {if $vuelos!=null  && $vuelos|@count != 0}
            {* si el arreglo de vuelos no está vacío.. *}
                <h3 class="centrado</h3>">Agregá una escala 
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
                <div class="centrado">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
                <!--<input type="submit" class="centrado" value="Agregar">-->
        </div>
    </form>
    <div>
        {foreach from=$vuelos item=$vuelo}
            <ul class="datVuelos">
                <li><h3>Número de Vuelo:</h3> {$vuelo->id_vuelo}</li>
                <li><h3>Información de la aeronave:</h3> {$vuelo->aeronave}</li>
                <li><h3>Compañía:</h3> {$vuelo->compania}</li>
                <li><h3>Aeropuerto de salida:</h3> {$vuelo->id_aer_origen}</li>
                <li><h3>Aeropuerto de llegada:</h3> {$vuelo->id_aer_destino}</li>
                <li><h3>Fecha de inicio:</h3> {$vuelo->fecha_inic}</li>
                <li><h3>Fecha de fin: </h3>{$vuelo->fecha_fin}</li>
                <li><h3>Asiento:</h3> {$vuelo->nro_asiento}</li>
                <li><h3>Código:</h3> {$vuelo->cod_reserva}</li>
            </ul>
        {/foreach}
    </div>
    <h3 class="centrado">Mapa del viaje</h3>
    {if $viaje == "Roma"}
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MvUOQP1SIhbkWuUmM7EEvHcKeqcRd7vL" width="80%" height="500"></iframe>
        {/if}
        {if $viaje == "Barcelona"}
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZY8TtjctQTEvI6VTedpL6nEJvwrFPcKT" width="80%" height="500"></iframe>
        {/if}
        {if $viaje == "Madrid"}
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=11q7K5wUAyOHFPkTSAbLu0BUraOUZe2hb" width="80%" height="500"></iframe>
        {/if}
        {if $viaje == "Mar del Plata"}
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1E7IX-2bj8U77SLnVNKZh_bRm1Ul9n717" width="80%" height="500"></iframe>
        {/if}
        {if $viaje == "Paris"}
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1guJTU8YkoqK685qOuCMGR1rCpRnXKXo0" width="80%" height="500"></iframe>
        {/if}
    </body>
    </html>
    {include "footer.tpl"}