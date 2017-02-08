<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_add_a_quickie.html" */ ?>
<?php /*%%SmartyHeaderCode:15250541165899da1dbcb467-16713928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc01a2ac19fc86fc285200d3c719744c77575cdd' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_add_a_quickie.html',
      1 => 1486056089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15250541165899da1dbcb467-16713928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'INPUT_FIELD' => 0,
    'SUBMIT_BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1dbf4668_47486001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1dbf4668_47486001')) {function content_5899da1dbf4668_47486001($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box1">
    <div class="box_header">
        <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_add_a_quickie');?>
</span> 
    </div>
    <div class="box_line"></div>
    <small><?php echo $_smarty_tpl->getConfigVariable('text_quickie');?>
</small>
    <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

        <div class="input-group">
            <?php echo $_smarty_tpl->tpl_vars['INPUT_FIELD']->value;?>

            <span class="input-group-btn">
                <?php echo $_smarty_tpl->tpl_vars['SUBMIT_BUTTON']->value;?>

            </span>
        </div>
    <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

</div><?php }} ?>
