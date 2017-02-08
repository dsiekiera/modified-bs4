<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_content.html" */ ?>
<?php /*%%SmartyHeaderCode:1432393805899da1d9cbbb8-75503079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f44553860a529f181f2030f4f56d1f82aaf94e89' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_content.html',
      1 => 1486056091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1432393805899da1d9cbbb8-75503079',
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
  'unifunc' => 'content_5899da1d9f8822_34064284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1d9f8822_34064284')) {function content_5899da1d9f8822_34064284($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box3">
    <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_content');?>
</div>
    <div class="box3_line"></div>
    <ul class="footerlist">
      <?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>

    </ul>
  </div>
<?php }?><?php }} ?>
