<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_manufacturers.html" */ ?>
<?php /*%%SmartyHeaderCode:5384871105899da1d869391-08714697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c16ee3f5b203be6bc524afcdda4ec3b05d3756e' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_manufacturers.html',
      1 => 1486056093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5384871105899da1d869391-08714697',
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
  'unifunc' => 'content_5899da1d8ba6b0_72385320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1d8ba6b0_72385320')) {function content_5899da1d8ba6b0_72385320($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/smarty_3/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_manufacturers');?>
</span> 
  </div>
  <div class="box_line"></div>
  <div class="box_select"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['BOX_CONTENT']->value,"<br />",'');?>
</div>
</div>
<?php }?><?php }} ?>
