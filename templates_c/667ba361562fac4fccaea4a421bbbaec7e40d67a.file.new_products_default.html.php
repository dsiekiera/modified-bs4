<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 20:52:18
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/new_products_default.html" */ ?>
<?php /*%%SmartyHeaderCode:579798684589a01ae43a230-02727663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667ba361562fac4fccaea4a421bbbaec7e40d67a' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/new_products_default.html',
      1 => 1486488724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '579798684589a01ae43a230-02727663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01ae4dbbc8_23681847',
  'variables' => 
  array (
    'language' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01ae4dbbc8_23681847')) {function content_589a01ae4dbbc8_23681847($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("new_products", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("new_products", 'local'); ?>
<h1><?php if ($_smarty_tpl->getConfigVariable('heading_text_top')!='') {
echo $_smarty_tpl->getConfigVariable('heading_text_top');
} else {
echo $_smarty_tpl->getConfigVariable('heading_text');
}?></h1><div class="card-deck"><?php echo $_smarty_tpl->getSubTemplate ("module/includes/product_listing_include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php }} ?>
