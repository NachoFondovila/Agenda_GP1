{include file="header.tpl"}

        <form action="addViaje" method="POST" class="formViaje">
            <input type="hidden" name="user_id" value={$user['MAIL']}
            <h2 class="centrado">Agrega tu viaje</h2>
            <input type="text" class="centrado" name="name" placeholder="Nombre" required>
            <textarea name="desc" cols="40" rows="5" class="centrado" placeholder="Descripción" required></textarea>
            <div class="centrado">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
            <!--<input type="submit" class="centrado" value="Agregar">-->
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

