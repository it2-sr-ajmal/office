<?php /* Smarty version 3.1.27, created on 2016-07-27 21:13:28
         compiled from "/var/www/html/FW/project/office/application/views/layout/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17830983735798d6a02fcdd2_41350421%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d0704bf90a2e3aed445965584da3fb51b1b396a' => 
    array (
      0 => '/var/www/html/FW/project/office/application/views/layout/header.tpl',
      1 => 1469634204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17830983735798d6a02fcdd2_41350421',
  'variables' => 
  array (
    'project_title' => 0,
    'SECONDARY_SCRIPTS' => 0,
    'PRIMARY_SCRIPTS' => 0,
    'RESOURCE_PATH' => 0,
    'scr' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5798d6a0411d82_96025088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5798d6a0411d82_96025088')) {
function content_5798d6a0411d82_96025088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17830983735798d6a02fcdd2_41350421';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $_smarty_tpl->tpl_vars['project_title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['SECONDARY_SCRIPTS']->value['title'];?>
</title>

        <?php
$_from = $_smarty_tpl->tpl_vars['PRIMARY_SCRIPTS']->value['script'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['scr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['scr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['scr']->value) {
$_smarty_tpl->tpl_vars['scr']->_loop = true;
$foreach_scr_Sav = $_smarty_tpl->tpl_vars['scr'];
?>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['scr']->value;?>
.js"><?php echo '</script'; ?>
>
        <?php
$_smarty_tpl->tpl_vars['scr'] = $foreach_scr_Sav;
}
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['SECONDARY_SCRIPTS']->value['script'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['scr'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['scr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['scr']->value) {
$_smarty_tpl->tpl_vars['scr']->_loop = true;
$foreach_scr_Sav = $_smarty_tpl->tpl_vars['scr'];
?>
            <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/<?php echo $_smarty_tpl->tpl_vars['scr']->value;?>
.js"><?php echo '</script'; ?>
>
        <?php
$_smarty_tpl->tpl_vars['scr'] = $foreach_scr_Sav;
}
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['PRIMARY_SCRIPTS']->value['style'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$foreach_css_Sav = $_smarty_tpl->tpl_vars['css'];
?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
.css" rel="stylesheet">
        <?php
$_smarty_tpl->tpl_vars['css'] = $foreach_css_Sav;
}
?>
        <?php
$_from = $_smarty_tpl->tpl_vars['SECONDARY_SCRIPTS']->value['style'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['css'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['css']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
$_smarty_tpl->tpl_vars['css']->_loop = true;
$foreach_css_Sav = $_smarty_tpl->tpl_vars['css'];
?>
            <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
.css" rel="stylesheet">
        <?php
$_smarty_tpl->tpl_vars['css'] = $foreach_css_Sav;
}
?>
        
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/custom.css" rel="stylesheet">


        <?php echo '<script'; ?>
>
            NProgress.start();
        <?php echo '</script'; ?>
>

    </head>
    <body class="nav-md">


        <div class="container body">


            <div class="main_container">

<?php echo $_smarty_tpl->getSubTemplate ("layout/error_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'','name'=>''), 0);

}
}
?>