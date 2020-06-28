    <div class="recuadrado">
        {if $viaje == "Roma"}
            <h3><span>Distancia a recorrer: </span><span>36 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>2</span></h3>
            <h3><span>Cantidad de escalas: </span>
                {if $vuelos!=null && $vuelos|@count != 0}
                <span>{$vuelos|@count-1}</span>
                {else}
                <span>0</span>
                {/if}
            </h3>
        {else if $viaje == "Barcelona"}
            <h3><span>Distancia a recorrer: </span><span>0 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>0</span></h3>
            <h3><span>Cantidad de escalas: </span>
                {if $vuelos!=null && $vuelos|@count != 0}
                <span>{$vuelos|@count-1}</span>
                {else}
                <span>0</span>
                {/if}
            </h3>
        {else if $viaje == "Madrid"}
            <h3><span>Distancia a recorrer: </span><span>21 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>1</span></h3>
            <h3><span>Cantidad de escalas: </span>
                {if $vuelos!=null && $vuelos|@count != 0}
                <span>{$vuelos|@count-1}</span>
                {else}
                <span>0</span>
                {/if}
            </h3>
        {else}
            <h3><span>Distancia a recorrer: </span><span>0 km</span></h3>
            <h3><span>Cantidad de planes: </span><span>0</span></h3>
            <h3><span>Cantidad de escalas: </span>
                <span>0</span>    
        {/if}

    </div>
    <span></span>