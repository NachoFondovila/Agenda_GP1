<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel=stylesheet href="{$base}/style.css" type="text/css" media=screen>
        <title>Flying App</title>
    </head>

    <body>

    <input type="hidden" id="user_id" value={$user['MAIL']}>

        <div class="logo">
            <a class=" ">{$user['USERNAME']}</a>
            <a href= "{$base}"> 
                <img src="{$base}FlyingApp.png">
            </a>
        </div>   