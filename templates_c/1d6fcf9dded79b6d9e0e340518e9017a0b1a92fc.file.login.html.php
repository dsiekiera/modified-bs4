<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 17:52:28
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/login.html" */ ?>
<?php /*%%SmartyHeaderCode:18776534455899fad9502b40-27007430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d6fcf9dded79b6d9e0e340518e9017a0b1a92fc' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/login.html',
      1 => 1486486335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18776534455899fad9502b40-27007430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899fad9650242_98237539',
  'variables' => 
  array (
    'language' => 0,
    'info_message' => 0,
    'FORM_ACTION' => 0,
    'INPUT_MAIL' => 0,
    'INPUT_PASSWORD' => 0,
    'INPUT_CODE' => 0,
    'VVIMG' => 0,
    'LINK_LOST_PASSWORD' => 0,
    'BUTTON_LOGIN' => 0,
    'FORM_END' => 0,
    'account_option' => 0,
    'BUTTON_NEW_ACCOUNT' => 0,
    'BUTTON_GUEST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899fad9650242_98237539')) {function content_5899fad9650242_98237539($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("login", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("newsletter", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("login", 'local'); ?>
<h1><?php echo $_smarty_tpl->getConfigVariable('heading_login');?>
</h1><?php if ($_smarty_tpl->tpl_vars['info_message']->value!='') {?><div class="alert alert-<?php if (isset($_GET['info'])&&$_GET['info']=='1') {?>info<?php } else { ?>danger<?php }?>" role="alert"><?php echo $_smarty_tpl->tpl_vars['info_message']->value;?>
</div><?php }?><div class="row"><div class="col-sm-12"><h4><?php echo $_smarty_tpl->getConfigVariable('title_returning');?>
</h4><p><?php echo $_smarty_tpl->getConfigVariable('text_returning');?>
</p><?php if ($_GET['order_id']) {
echo $_smarty_tpl->getConfigVariable('text_after_login1');
} elseif ($_GET['review_prod_id']) {
echo $_smarty_tpl->getConfigVariable('text_after_login2');
} else {
echo $_smarty_tpl->getConfigVariable('text_after_login');
}?><br /><?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>
<div class="form-group row"><label class="col-8 col-form-label"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
</label><div class="col-16"><?php echo $_smarty_tpl->tpl_vars['INPUT_MAIL']->value;?>
</div></div><div class="form-group row"><label class="col-8 col-form-label"><?php echo $_smarty_tpl->getConfigVariable('text_password');?>
</label><div class="col-16"><?php echo $_smarty_tpl->tpl_vars['INPUT_PASSWORD']->value;?>
</div></div><?php if ($_smarty_tpl->tpl_vars['INPUT_CODE']->value) {?><div class="form-group row"><label class="col-8 col-form-label"><?php echo $_smarty_tpl->getConfigVariable('text_sec_code');?>
</label><div class="col-16"><?php echo $_smarty_tpl->tpl_vars['VVIMG']->value;?>
</div></div><div class="form-group row"><label class="col-8 col-form-label"><?php echo $_smarty_tpl->getConfigVariable('text_sec_code');?>
</label><div class="col-16"><?php echo $_smarty_tpl->tpl_vars['INPUT_CODE']->value;?>
</div></div><?php }?><div class="row"><div class="col"><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_LOST_PASSWORD']->value;?>
"><small><?php echo $_smarty_tpl->getConfigVariable('text_lost_password');?>
</small></a></div><div class="col text-right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_LOGIN']->value;?>
</div></div><?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>
</div><div class="col-sm-12"><?php if ($_smarty_tpl->tpl_vars['account_option']->value=='account'||$_smarty_tpl->tpl_vars['account_option']->value=='both') {?><div class="highlightbox cf"><h4><?php echo $_smarty_tpl->getConfigVariable('title_new');?>
</h4><p><?php echo $_smarty_tpl->getConfigVariable('text_new');?>
</p><div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_NEW_ACCOUNT']->value;?>
</div></div><?php }
if ($_smarty_tpl->tpl_vars['account_option']->value=='both'||$_smarty_tpl->tpl_vars['account_option']->value=='guest') {?><br /><div class="highlightbox cf"><h4><?php echo $_smarty_tpl->getConfigVariable('title_guest');?>
</h4><p><?php echo $_smarty_tpl->getConfigVariable('text_guest');?>
</p><div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_GUEST']->value;?>
</div></div><?php }?></div></div><?php }} ?>
