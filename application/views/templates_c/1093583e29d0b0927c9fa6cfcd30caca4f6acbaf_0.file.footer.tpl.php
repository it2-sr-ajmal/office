<?php /* Smarty version 3.1.27, created on 2016-07-21 20:18:49
         compiled from "application/views/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10007554885790e0d1d9a6f0_68980895%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1093583e29d0b0927c9fa6cfcd30caca4f6acbaf' => 
    array (
      0 => 'application/views/templates/footer.tpl',
      1 => 1451885121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10007554885790e0d1d9a6f0_68980895',
  'variables' => 
  array (
    'RESOURCE_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5790e0d1dafeb0_04191347',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5790e0d1dafeb0_04191347')) {
function content_5790e0d1dafeb0_04191347 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10007554885790e0d1d9a6f0_68980895';
?>
</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2016 - 2020 <a href='#'>Infinite Open Source Solutions</a>
            </div>
            
         </div>
      </footer>

    
    <!-- jQuery UI -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/form-helpers/js/bootstrap-formhelpers.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/select/bootstrap-select.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/tags/js/bootstrap-tags.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/mask/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/moment/moment.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/wizard/jquery.bootstrap.wizard.min.js"><?php echo '</script'; ?>
>

     <!-- bootstrap-datetimepicker -->
     <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
> 

 <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"><?php echo '</script'; ?>
>
         <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/datatables/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
vendors/datatables/dataTables.bootstrap.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/tables.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/forms.js"><?php echo '</script'; ?>
>
    
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/jquery.table2excel"><?php echo '</script'; ?>
>
  </body>
</html>
<?php echo '<script'; ?>
>
jQuery(document).ready(function()
{
    jQuery("#close_link").click(function()
{
    jQuery("#message_box").fadeOut(1000);
}
)
})
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
  $(document).ready(function() {
    $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd'});
  });
  <?php echo '</script'; ?>
><?php }
}
?>