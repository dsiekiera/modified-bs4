<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_login.html" */ ?>
<?php /*%%SmartyHeaderCode:17400699685899da1db354d0-93968083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3d03a2ab3978cce79ab301c6b005521bb868e37' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_login.html',
      1 => 1486056093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17400699685899da1db354d0-93968083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'FIELD_EMAIL' => 0,
    'FIELD_PWD' => 0,
    'LINK_LOST_PASSWORD' => 0,
    'BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1db786a6_23177020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1db786a6_23177020')) {function content_5899da1db786a6_23177020($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['FORM_ACTION']->value)&&$_smarty_tpl->tpl_vars['FORM_ACTION']->value!='') {?>
    <div class="box1">
        <div class="box_header"><?php echo $_smarty_tpl->getConfigVariable('heading_login');?>
</div>
        <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

            <div class="form-group">
                <label><small><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
</small></label>
                <?php echo $_smarty_tpl->tpl_vars['FIELD_EMAIL']->value;?>

            </div>
            <div class="form-group">
                <label><small><?php echo $_smarty_tpl->getConfigVariable('text_pwd');?>
</small></label>
                <?php echo $_smarty_tpl->tpl_vars['FIELD_PWD']->value;?>

            </div>
            <div class="row">
	            <div class="col">
		            <a href="<?php echo $_smarty_tpl->tpl_vars['LINK_LOST_PASSWORD']->value;?>
" class="text-muted"><small><?php echo $_smarty_tpl->getConfigVariable('text_password_forgotten');?>
</small></a>
	            </div>
				<div class="col text-right">
		            <?php echo $_smarty_tpl->tpl_vars['BUTTON']->value;?>

	            </div>
            </div>
        <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

    </div>
<?php }?><?php }} ?>
