<?php /* Smarty version 3.1.27, created on 2016-07-21 20:02:27
         compiled from "application/views/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20936664335790dcfb60f894_69172771%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924517c391169c7919d10fe8e0386f933d6aa81c' => 
    array (
      0 => 'application/views/templates/login.tpl',
      1 => 1469111514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20936664335790dcfb60f894_69172771',
  'variables' => 
  array (
    'titile' => 0,
    'RESOURCE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5790dcfb6349e0_12487658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5790dcfb6349e0_12487658')) {
function content_5790dcfb6349e0_12487658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20936664335790dcfb60f894_69172771';
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
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/icheck/flat/green.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>


    </head>

    <body style="background:#F7F7F7;">

        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>

            <div id="wrapper">
                <div id="login" class="animate form">
                    <section class="login_content">
                        <form>
                            <h1>Login Form</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Log in</a>
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

                                <p class="change_link">New to site?
                                    <a href="#toregister" class="to_register"> Create Account </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                    <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
                <div id="register" class="animate form">
                    <section class="login_content">
                        <form>
                            <h1>Create Account</h1>
                            <div>
                                <input type="text" class="form-control" placeholder="Username" required="" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div>
                                <a class="btn btn-default submit" href="index.html">Submit</a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="separator">

                                <p class="change_link">Already a member ?
                                    <a href="#tologin" class="to_register"> Log in </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                                <div>
                                    <h1><i class="fa fa-paw" style="font-size: 26px;"></i> Gentelella Alela!</h1>

                                    <p>©2015 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </div>
                        </form>
                        <!-- form -->
                    </section>
                    <!-- content -->
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
?>