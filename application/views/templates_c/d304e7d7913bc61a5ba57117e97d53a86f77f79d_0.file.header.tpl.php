<?php /* Smarty version 3.1.27, created on 2016-07-21 20:18:49
         compiled from "application/views/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12600585325790e0d1d73585_02490715%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd304e7d7913bc61a5ba57117e97d53a86f77f79d' => 
    array (
      0 => 'application/views/templates/header.tpl',
      1 => 1469110549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12600585325790e0d1d73585_02490715',
  'variables' => 
  array (
    'titile' => 0,
    'RESOURCE_PATH' => 0,
    'project_name' => 0,
    'ROOT_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5790e0d1d96193_34599096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5790e0d1d96193_34599096')) {
function content_5790e0d1d96193_34599096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12600585325790e0d1d73585_02490715';
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titile']->value;?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/styles.css" rel="stylesheet">

        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/select/bootstrap-select.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/forms.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="#"><?php echo $_smarty_tpl->tpl_vars['project_name']->value;?>
</a></h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                


                                <ul class="nav navbar-nav">
                                    <li><a href="login/logout"><i class="glyphicon glyphicon-log-out" title="Log Out"></i> Logout</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar content-box" style="display: block;">
                        <ul class="nav">
                            <!-- Main menu -->
                            <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
home"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
register"><i class="glyphicon glyphicon-user"></i>Registration</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
income"><i class="glyphicon glyphicon-import"></i>Income Entry</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
expense"><i class="glyphicon glyphicon-export"></i>Expense Entry</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
monthly_collection"><i class="glyphicon glyphicon-saved"></i>Collection</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
member_profile"><i class="glyphicon glyphicon-list-alt"></i>Member Management</a></li>

                            <li class="submenu">
                                <a href="#">
                                    <i class="glyphicon glyphicon-paperclip"></i>Reports
                                    

                                </a>
                                <!-- Sub menu -->
                                <ul style="display: block !important;">
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
report/members_report"><i class="glyphicon glyphicon-asterisk"></i> Members Report</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
report/monthly_fee_report"><i class="glyphicon glyphicon-asterisk"></i> Monthly Fee Report</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
report/income_report"><i class="glyphicon glyphicon-asterisk"></i> Income Report</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
report/expense_report"><i class="glyphicon glyphicon-asterisk"></i> Expense Report</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
report/balance_sheet"><i class="glyphicon glyphicon-asterisk"></i> Balance Sheet</a></li>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
report/fee_detail_report"><i class="glyphicon glyphicon-asterisk"></i> Monthly Fee Detail Rep</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>        <?php }
}
?>