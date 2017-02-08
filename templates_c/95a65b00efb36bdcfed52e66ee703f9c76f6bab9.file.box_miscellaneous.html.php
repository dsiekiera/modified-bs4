<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_miscellaneous.html" */ ?>
<?php /*%%SmartyHeaderCode:6044896835899da1daa2883-61237395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95a65b00efb36bdcfed52e66ee703f9c76f6bab9' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_miscellaneous.html',
      1 => 1486056093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6044896835899da1daa2883-61237395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1dabe105_05179791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1dabe105_05179791')) {function content_5899da1dabe105_05179791($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box3">
  <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_miscellaneous');?>
</div>
  <div class="box3_line"></div>
  <p><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/img_footer_payment.jpg" alt="" /></p>

  <p class="box3_sub" style="font-size:10px; line-height:12px;color:#999;"><?php echo $_smarty_tpl->getConfigVariable('text_miscellaneous');?>
</p>
</div><?php }} ?>
