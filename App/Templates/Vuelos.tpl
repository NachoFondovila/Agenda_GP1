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
                    <input type="hidden" name="viaje" value={$viaje}>
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
        {foreach from=$vuelos item=$vuelo}
                <ul>
                    <li><h4>Número de Vuelo:</h4> <h5>{$vuelo->id_vuelo}</h5></li>
                    <li><h4>Información de la aeronave:</h4> <h5>{$vuelo->aeronave}</h5></li>
                    <li><h4>Compañía:</h4> <h5>{$vuelo->compania}</h5></li>
                    <li><h4>Aeropuerto de salida:</h4> <h5>{$vuelo->id_aer_origen}</h5></li>
                    <li><h4>Aeropuerto de llegada:</h4> <h5>{$vuelo->id_aer_destino}</h5></li>
                    <li><h4>Fecha de inicio:</h4> <h5>{$vuelo->fecha_inic}</h5></li>
                    <li><h4>Fecha de fin: </h4> <h5>{$vuelo->fecha_fin}</h5></li>
                    <li><h4>Asiento:</h4> <h5>{$vuelo->nro_asiento}</h5></li>
                    <li><h4>Código:</h4> <h5>{$vuelo->cod_reserva}</h5></li>
                </ul>
            </br></br>
        {/foreach}
        </div>

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
        {include file="EstadisticasViaje.tpl"}

    </body>
    </html>
    {include "footer.tpl"}