<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {$css}
        <title>{$title}</title>
    </head>

    <body>

    <input type="hidden" id="user_id" value={$user['MAIL']}>

        <ul class="">
            {if ($user['USERNAME']=='')}
                <li class="nav-item">
                    <a class=" ">Visitante</a>
                </li>
            {else}    
                <li class="nav-item">
                    <a class=" ">{$user['USERNAME']}</a>
                </li>
            {/if}
        </ul>
        <div class="logo">
            {* <a href= "http://localhost/GitHub/Tpe_Web2/ver"> <h2>Inicio</h2> </a> *}
            {$Logo}
        </div>  