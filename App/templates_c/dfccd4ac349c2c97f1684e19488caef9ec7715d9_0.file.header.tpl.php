<?php
/* Smarty version 3.1.33, created on 2020-06-26 18:49:34
  from 'C:\xampp\htdocs\App\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef6271e8c9808_43997634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfccd4ac349c2c97f1684e19488caef9ec7715d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\App\\templates\\header.tpl',
      1 => 1593139328,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef6271e8c9808_43997634 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel=stylesheet href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/style.css" type="text/css" media=screen>
        <title>Flying App</title>
    </head>

    <body>

    <input type="hidden" id="user_id" value=<?php echo $_smarty_tpl->tpl_vars['user']->value['MAIL'];?>
>

        <div class="logo">
            <?php if (($_smarty_tpl->tpl_vars['user']->value['USERNAME'] == '')) {?>
                <a class=" ">Visitante</a>
            <?php } else { ?>    
                <a class=" "><?php echo $_smarty_tpl->tpl_vars['user']->value['USERNAME'];?>
</a>
            <?php }?>
            <a href= "<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
"> 
                <img src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
FlyingApp.png">
            </a>
        </div>   <?php }
}
