<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 20:52:06
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/logoff.html" */ ?>
<?php /*%%SmartyHeaderCode:627781215589a256695c9d0-07986223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74018e993b3dbee17970cfdd7650633266b8f93e' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/logoff.html',
      1 => 1486056201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627781215589a256695c9d0-07986223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'info_message' => 0,
    'BUTTON_CONTINUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a2566a2ae82_38586175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a2566a2ae82_38586175')) {function content_589a2566a2ae82_38586175($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("logoff", 'local'); ?> 
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("logoff", 'local'); ?>
<h1><?php echo $_smarty_tpl->getConfigVariable('heading_logoff');?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['info_message']->value) {?><div class="<?php if (isset($_GET['info'])&&$_GET['info']=='1') {?>info<?php } else { ?>error<?php }?>message"><?php echo $_smarty_tpl->tpl_vars['info_message']->value;?>
</div><?php }?>
<div class="cf">
  <p><?php echo $_smarty_tpl->getConfigVariable('text_logoff');?>
</p>
  <div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_CONTINUE']->value;?>
</div>
</div>  
<?php }} ?>
