<?php /* Smarty version 3.1.27, created on 2016-07-21 19:43:26
         compiled from "application/views/templates/display_message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3968581875790d886d961f4_61496803%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698639fd16246a023706c5430d895638ceac385a' => 
    array (
      0 => 'application/views/templates/display_message.tpl',
      1 => 1451118972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3968581875790d886d961f4_61496803',
  'variables' => 
  array (
    'MESSAGE_STATUS' => 0,
    'MESSAGE_TYPE' => 0,
    'message_class' => 0,
    'MESSAGE_DETAILS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5790d886dac1b4_43238643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5790d886dac1b4_43238643')) {
function content_5790d886dac1b4_43238643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3968581875790d886d961f4_61496803';
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
    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_STATUS']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['MESSAGE_TYPE']->value) {?>
            <?php $_smarty_tpl->tpl_vars["message_class"] = new Smarty_Variable("errorHandler alert alert-success", null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["message_class"] = new Smarty_Variable("errorHandler alert alert-danger", null, 0);?>
        <?php }?>

        <div id="message_box"  class="<?php echo $_smarty_tpl->tpl_vars['message_class']->value;?>
">

            <div id="message_note"> 
                <table>
                    <tr>
                        <td>                            
                            <?php echo $_smarty_tpl->tpl_vars['MESSAGE_DETAILS']->value;?>

                        </td>
                    </tr>
                </table>
            </div>
<a href="#" id= "close_link" class="panel-close pull-right" style="margin-top: -18px;"> <i class="fa fa-times"></i></a>
        </div>
    <?php }?>

<?php }
}
?>