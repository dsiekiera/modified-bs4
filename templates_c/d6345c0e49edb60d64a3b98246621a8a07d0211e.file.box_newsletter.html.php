<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_newsletter.html" */ ?>
<?php /*%%SmartyHeaderCode:4459751135899da1db8b962-97054416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6345c0e49edb60d64a3b98246621a8a07d0211e' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_newsletter.html',
      1 => 1486056094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4459751135899da1db8b962-97054416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'FIELD_EMAIL' => 0,
    'BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1dbb9f51_93737048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1dbb9f51_93737048')) {function content_5899da1dbb9f51_93737048($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box3">
  <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_guestnewsletter');?>
</div>
  <div class="box3_line"></div>
  <p class="box3_sub"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
:</p>
  <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

  <div class="newsletter_form">
    <?php echo $_smarty_tpl->tpl_vars['FIELD_EMAIL']->value;
echo $_smarty_tpl->tpl_vars['BUTTON']->value;?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

  <p class="box3_sub"><?php echo $_smarty_tpl->getConfigVariable('text_newsletter');?>
</p>
</div><?php }} ?>
