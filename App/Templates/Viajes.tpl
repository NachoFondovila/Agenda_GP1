{include file="header.tpl"}

        <form action="addViaje" method="POST" class="formViaje">
            <input type="hidden" name="user_id" value={$user['MAIL']}
            <h2 class="centrado">Agrega tu viaje</h2>
            <input type="text" class="centrado" name="name" placeholder="Nombre">
            <textarea name="desc" cols="40" rows="5" class="centrado" placeholder="Descripción"></textarea>
            <input type="submit" class="centrado" value="Agregar">
        </form> 
        <h2 class="centrado">Mis viajes</h2>
        <ul class="list4columnas">
        {foreach from=$viajes item=$viaje}
            <li>
                <a href="{BASE_URL}showVuelos/{$viaje->id_viaje}"><div><h3>{$viaje->id_viaje}</h3></div></a>
            </li>
        {/foreach}
        </ul>


    </body>
    </html>
{include file="footer.tpl"}

    {* cada vuelo tiene una fecha y hora ida, fecha y hora de vuelta, aeropuertos de llegada y salida,
    código de reserva, escala/s si las hay, informacion sobre la aeronave

    cada viaje tiene un nombre, una descripción, una fecha de inicio y fin, y una ciudad de destino 
    
    podemos llenar para un vuelo los datos de fecha ida, nro de vuelo y compañía,
    y el resto de los datos se cargarán automaticamente por el sistema si es que existe 
    una coincidencia *}