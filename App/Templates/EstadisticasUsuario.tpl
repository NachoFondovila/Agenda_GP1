<div class= "recuadrado">
    
    <h3><span>Cantidad de viajes: </span>
        {if $viajes!=null && $viajes|@count != 0}
        <span>{$viajes|@count}</span>
        {else}
        <span>0</span>
        {/if}
    </h3>
    <h3><span>Cantidad de vuelos: </span><span>{$allVuelos}</span></h3>
    <h3><span>Km recorridos en total: </span><span>57 km</span></h3> 
    
</div>


