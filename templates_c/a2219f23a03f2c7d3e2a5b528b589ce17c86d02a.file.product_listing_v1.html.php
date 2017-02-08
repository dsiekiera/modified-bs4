<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 19:57:52
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/product_listing/product_listing_v1.html" */ ?>
<?php /*%%SmartyHeaderCode:1881275289589a01b40e4815-73978552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2219f23a03f2c7d3e2a5b528b589ce17c86d02a' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/product_listing/product_listing_v1.html',
      1 => 1486493865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1881275289589a01b40e4815-73978552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01b41af567_18710272',
  'variables' => 
  array (
    'language' => 0,
    'LIST_TITLE' => 0,
    'CATEGORIES_DESCRIPTION' => 0,
    'CATEGORIES_IMAGE' => 0,
    'CATEGORIES_NAME' => 0,
    'CATEGORIES_LISTING' => 0,
    'LISTING_FILTER' => 0,
    'MANUFACTURER_DESCRIPTION' => 0,
    'MANUFACTURER_IMAGE' => 0,
    'MANUFACTURER_NAME' => 0,
    'PAGINATION' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01b41af567_18710272')) {function content_589a01b41af567_18710272($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<h1><?php echo $_smarty_tpl->tpl_vars['LIST_TITLE']->value;?>
</h1><?php if ((isset($_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value!='')||(isset($_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value!='')) {?><div class="cat_description"><?php if (isset($_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value!='') {?><img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['CATEGORIES_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['CATEGORIES_NAME']->value);?>
"><?php }
if (isset($_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value)&&$_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value!='') {
echo $_smarty_tpl->tpl_vars['CATEGORIES_DESCRIPTION']->value;
}?></div><?php }
if (isset($_smarty_tpl->tpl_vars['CATEGORIES_LISTING']->value)) {
echo $_smarty_tpl->tpl_vars['CATEGORIES_LISTING']->value;
}
echo $_smarty_tpl->tpl_vars['LISTING_FILTER']->value;
if ((isset($_smarty_tpl->tpl_vars['MANUFACTURER_DESCRIPTION']->value)&&$_smarty_tpl->tpl_vars['MANUFACTURER_DESCRIPTION']->value!='')||(isset($_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value)&&$_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value!='')||(isset($_smarty_tpl->tpl_vars['MANUFACTURER_NAME']->value)&&$_smarty_tpl->tpl_vars['MANUFACTURER_NAME']->value!='')) {?><h4><?php echo $_smarty_tpl->tpl_vars['MANUFACTURER_NAME']->value;?>
</h4><div class="manu_description cf"><?php if ($_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value) {?><img class="manu_image<?php if (!$_smarty_tpl->tpl_vars['MANUFACTURER_DESCRIPTION']->value) {?> mi_nomargin<?php }?>" src="<?php echo $_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['MANUFACTURER_NAME']->value);?>
" /><?php }
if ($_smarty_tpl->tpl_vars['MANUFACTURER_DESCRIPTION']->value) {
echo $_smarty_tpl->tpl_vars['MANUFACTURER_DESCRIPTION']->value;
}?></div><?php }
echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
<div class="row align-items-stretch"><?php echo $_smarty_tpl->getSubTemplate ("module/includes/product_listing_include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
<?php }} ?>
