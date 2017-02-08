<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_infobox.html" */ ?>
<?php /*%%SmartyHeaderCode:17250249725899da1db04c87-58539759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '651693a4e7eedd18b1404089534ffc53404b5d6b' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_infobox.html',
      1 => 1486056091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17250249725899da1db04c87-58539759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'BOX_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1db23426_56828421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1db23426_56828421')) {function content_5899da1db23426_56828421($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;
}?><?php }} ?>
