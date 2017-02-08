<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_currencies.html" */ ?>
<?php /*%%SmartyHeaderCode:18726731025899da1ddf1ea8-26433009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e49a2cfc34bc132b857df278116382fcb4db14' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_currencies.html',
      1 => 1486056091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18726731025899da1ddf1ea8-26433009',
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
  'unifunc' => 'content_5899da1de18553_82264396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1de18553_82264396')) {function content_5899da1de18553_82264396($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box1">
    <div class="box_header">
      <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_currencies');?>
</span> 
    </div>
    <div class="box_line"></div>
    <div class="box_select"><?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>
</div>
  </div>
<?php }?><?php }} ?>
