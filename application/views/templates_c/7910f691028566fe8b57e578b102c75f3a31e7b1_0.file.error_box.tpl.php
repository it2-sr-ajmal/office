<?php /* Smarty version 3.1.27, created on 2016-07-28 00:04:55
         compiled from "application/views/layout/error_box.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1650200565798fecfde2ad0_28740374%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7910f691028566fe8b57e578b102c75f3a31e7b1' => 
    array (
      0 => 'application/views/layout/error_box.tpl',
      1 => 1469644490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650200565798fecfde2ad0_28740374',
  'variables' => 
  array (
    'MESSAGE_DETAILS' => 0,
    'MESSAGE_STATUS' => 0,
    'MESSAGE_TYPE' => 0,
    'message_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5798fecfdfae83_84949121',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5798fecfdfae83_84949121')) {
function content_5798fecfdfae83_84949121 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1650200565798fecfde2ad0_28740374';
?>
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
<style>
#message_box{
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px;
    color: red;
    border: 1px solid #CCC;
    background-color: rgb(246, 178, 178);
    text-align: center;
    margin-bottom: 10px;
}
#close_link {
    width: 25px;
    height: 25px;
    border: 1px solid rgb(204, 204, 204);
    margin-right: 5px;
}
</style>
<?php if ($_smarty_tpl->tpl_vars['MESSAGE_DETAILS']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_STATUS']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['MESSAGE_TYPE']->value) {?>
            <?php $_smarty_tpl->tpl_vars["message_class"] = new Smarty_Variable("errorHandler alert alert-success", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["message_class"] = new Smarty_Variable("errorHandler alert alert-danger", null, 0);?>
        <?php }?>

        <div id="message_box"  class="<?php echo $_smarty_tpl->tpl_vars['message_class']->value;?>
">
            <span> <?php echo $_smarty_tpl->tpl_vars['MESSAGE_DETAILS']->value;?>

                 <a href="#" id="close_link" class="panel-close pull-right"> <i class="fa fa-close"></i></a>
            </span>
            <!--<div id="message_note"> 
                <table>
                    <tr>
                        <td>                            
                            <?php echo $_smarty_tpl->tpl_vars['MESSAGE_DETAILS']->value;?>

                        </td>
                    </tr>
                </table>
            </div>--->
            
        </div>
    <?php }?>
<?php }?>

<?php }
}
?>