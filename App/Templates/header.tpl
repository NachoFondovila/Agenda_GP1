<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel=stylesheet href="{$base}/style.css" type="text/css" media=screen>
        <title>Flying App</title>
    </head>

    <body>

    <input type="hidden" id="user_id" value={$user['MAIL']}>

        <div class="logo">
            {if ($user['USERNAME']=='')}
                <a class=" ">Visitante</a>
            {else}    
                <h3><a class=" ">{$user['USERNAME']}</a></h3>
            {/if}
            <a href= "{$base}"> 
                <img src="{$base}FlyingApp.png">
            </a>
        </div>   