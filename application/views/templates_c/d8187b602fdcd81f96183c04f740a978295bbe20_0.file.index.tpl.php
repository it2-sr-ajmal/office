<?php /* Smarty version 3.1.27, created on 2016-08-29 23:50:56
         compiled from "application/views/register/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166800194757c47d08efde47_13221820%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8187b602fdcd81f96183c04f740a978295bbe20' => 
    array (
      0 => 'application/views/register/index.tpl',
      1 => 1472494850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166800194757c47d08efde47_13221820',
  'variables' => 
  array (
    'project_title' => 0,
    'SECONDARY_SCRIPTS' => 0,
    'RESOURCE_PATH' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c47d08f34c39_23787577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c47d08f34c39_23787577')) {
function content_57c47d08f34c39_23787577 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '166800194757c47d08efde47_13221820';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <title><?php echo $_smarty_tpl->tpl_vars['project_title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['SECONDARY_SCRIPTS']->value['title'];?>
</title>
        <link href="<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/jquery.min.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src='<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
js/bootstrap.min.js'><?php echo '</script'; ?>
>

    </head>
    <style>
        body {
            margin-top:40px;
        }
        .stepwizard-step p {
            margin-top: 10px;
        }
        .stepwizard-row {
            display: table-row;
        }
        .stepwizard {
            display: table;
            width: 50%;
            position: relative;
        }
        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }
        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }
        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }
        .btn-circle {
            width: 90px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

        /****animation***/

        .setup-content.active{
            display:block!important;
            transition:all 1s ease;
            transform:scale(1)!important;
            position:relative!important;
        }

        .setup-content{
            display:block!important;
            transition:all 1s ease;
            transform:scale(0)!important;
            position:absolute!important;
        }
        .col-xs-6.col-md-offset-3.reg{
            border: solid 1px #ccc;
            background-color: rgba(255, 255, 255, 0.39);
            box-shadow: 2px 4px 9px 3px #ccc;
        }
        .btn-primary {
            color: #fff;
            background-color: #25C79A !important;
            border-color: #25C79A !important;
            margin-bottom: 10px;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: rgb(138, 227, 204) !important;
            border-color: #25C79A !important;
            margin-bottom: 10px;
        }
        button.btn.btn-success.btn-lg.pull-right {
            margin-bottom: 10px;
        }
    </style>
    <body style="background:url('<?php echo $_smarty_tpl->tpl_vars['RESOURCE_PATH']->value;?>
images/background.jpg');">
        <div class="row" style="margin:0px;">
            <div class="container"> 
               
                <div class="stepwizard col-md-offset-3">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                            <p>Step 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Step 2</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>Step 3</p>
                        </div>
                    </div>
                </div>

                <form role="form" action="../register/register_submit" method="post">
                    <div class="row setup-content active" id="step-1">
                        <div class="col-xs-6 col-md-offset-3 reg active animate-step1">
                            <div class="col-md-12">
                                 <?php echo $_smarty_tpl->getSubTemplate ("layout/error_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'','name'=>''), 0);
?>

                                <h3> Step 1</h3>
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input  maxlength="100" type="text" required="required" class="form-control" name="first_name" placeholder="Enter First Name"  />
                                    <?php if (isset($_smarty_tpl->tpl_vars['error']->value['first_name'])) {?><span class='val-error' ><?php echo $_smarty_tpl->tpl_vars['error']->value['first_name'];?>
 </span><?php }?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" name="last_name" placeholder="Enter Last Name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <textarea required="required" class="form-control" placeholder="Enter your address" name="address"></textarea>
                                </div>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-xs-6 col-md-offset-3 reg animate-step2" style="border: solid 1px #ccc;">
                            <div class="col-md-12">
                                <h3> Step 2</h3>
                                <div class="form-group">
                                    <label class="control-label">Company Name</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" name="company_name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Company Address</label>
                                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" name="company_address" />
                                </div>
                                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-3" >
                        <div class="col-xs-6 col-md-offset-3 reg animate-step3" style="border: solid 1px #ccc;">
                            <div class="col-md-12">
                                <h3> Step 3</h3>
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <textarea required="required" class="form-control" placeholder="Enter your address" name="company_address1"  ></textarea>
                                </div>
                                <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                            </div>
                            
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <?php echo '<script'; ?>
>
            $(document).ready(function () {
                var navListItems = $('div.setup-panel div a'),
                        allWells = $('.setup-content'),
                        allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                            $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                            curStepBtn = curStep.attr("id"),
                            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                            curInputs = curStep.find("input[type='text'],input[type='url']"),
                            isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid) {
                        nextStepWizard.removeAttr('disabled').trigger('click');
                        var targ = $(this).parent();
                        $(targ).closest('.setup-content').removeClass('active').next().addClass('active');
                    }
                });

                $('div.setup-panel div a.btn-primary').trigger('click');
            });

            $('.stepwizard-step a').click(function (e) {
                e.preventDefault();
                var target = $(this).attr('href');
                var err = 0;
                $(target).find('input[type="text"],input[type="url"]').each(function () {
                    if (!this.validity.valid) {
                        $(this).closest(".form-group").addClass("has-error");
                        err++;
                    } else {
                        $(this).closest(".form-group").removeClass("has-error");
                    }

                });
                if (!err) {
                    $(target).addClass('active').siblings().removeClass('active');
                }
            });
        <?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>