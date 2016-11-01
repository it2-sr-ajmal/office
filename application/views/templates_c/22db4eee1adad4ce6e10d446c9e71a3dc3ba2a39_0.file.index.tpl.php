<?php /* Smarty version 3.1.27, created on 2016-09-24 00:05:30
         compiled from "application/views/login/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:192114918657e575f2372541_59439857%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22db4eee1adad4ce6e10d446c9e71a3dc3ba2a39' => 
    array (
      0 => 'application/views/login/index.tpl',
      1 => 1472490169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192114918657e575f2372541_59439857',
  'variables' => 
  array (
    'project_title' => 0,
    'SECONDARY_SCRIPTS' => 0,
    'RESOURCE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57e575f2437148_33263218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57e575f2437148_33263218')) {
function content_57e575f2437148_33263218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '192114918657e575f2372541_59439857';
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
     <title><?php echo $_smarty_tpl->tpl_vars['project_title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['SECONDARY_SCRIPTS']->value['title'];?>
</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/style-login.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
fonts/css/font-awesome.min.css" rel="stylesheet">   
    <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/jquery.min.js'><?php echo '</script'; ?>
>
  </head>

  <body>
      
    <div class="form">      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Admin</a></li>
        <li class="tab"><a href="#login">Agency</a></li>
      </ul>
      <?php echo $_smarty_tpl->getSubTemplate ("layout/error_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'','name'=>''), 0);
?>

      <div class="tab-content">
        <div id="signup">   
          <form action="login/validate_login" method="post">
         
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
              <input type="text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
              <input type="password" name="password" required autocomplete="off"/>
          </div>
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          <button type="submit" class="button button-block"/>LOGIN</button> 
		  
          </form>

        </div>
        
        <div id="login">     
          
          <form action="#" method="post">
            <div class="field-wrap">
            <label>
              User name<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
			
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/index-login.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
?>