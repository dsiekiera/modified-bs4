<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 20:52:18
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/main_content.html" */ ?>
<?php /*%%SmartyHeaderCode:12535605865899da1deb00e4-93442719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9d2293a8c7f5d0c34d342311550a79f3fe1a2b' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/main_content.html',
      1 => 1486488453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12535605865899da1deb00e4-93442719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1def7032_54022224',
  'variables' => 
  array (
    'language' => 0,
    'MODULE_error' => 0,
    'title' => 0,
    'text' => 0,
    'MODULE_new_products' => 0,
    'MODULE_upcoming_products' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1def7032_54022224')) {function content_5899da1def7032_54022224($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_error']->value)) {
echo $_smarty_tpl->tpl_vars['MODULE_error']->value;
}?><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1><div class="homesite cf"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div><?php if (isset($_smarty_tpl->tpl_vars['MODULE_new_products']->value)) {
echo $_smarty_tpl->tpl_vars['MODULE_new_products']->value;
}
if (isset($_smarty_tpl->tpl_vars['MODULE_upcoming_products']->value)) {
echo $_smarty_tpl->tpl_vars['MODULE_upcoming_products']->value;
}?><?php }} ?>
