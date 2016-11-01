<?php /* Smarty version 3.1.27, created on 2016-07-21 20:55:39
         compiled from "/var/www/html/FW/project/office/application/views/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20721191965790e973111e99_42684777%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db3820e2c98a2f137cd4725f264421d6a40178b2' => 
    array (
      0 => '/var/www/html/FW/project/office/application/views/templates/header.tpl',
      1 => 1469114733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20721191965790e973111e99_42684777',
  'variables' => 
  array (
    'titile' => 0,
    'RESOURCE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5790e973133cc6_07078771',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5790e973133cc6_07078771')) {
function content_5790e973133cc6_07078771 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20721191965790e973111e99_42684777';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $_smarty_tpl->tpl_vars['titile']->value;?>
 | </title>

        <!-- Bootstrap core CSS -->


        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/custom.css" rel="stylesheet">
        <link rel="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/icheck/flat/green.css" rel="stylesheet" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/floatexamples.css" rel="stylesheet" type="text/css" />

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/nprogress.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            NProgress.start();
        <?php echo '</script'; ?>
>

    </head>
    <body class="nav-md">


        <div class="container body">


            <div class="main_container"><?php }
}
?>