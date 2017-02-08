<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-08 08:24:43
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_manufacturers_info.html" */ ?>
<?php /*%%SmartyHeaderCode:30412576589ac7bbb43515-42626374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e1d10fbfb7e404cde98d1f95a1380bf2c1d333d' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_manufacturers_info.html',
      1 => 1486056093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30412576589ac7bbb43515-42626374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'NAME' => 0,
    'IMAGE' => 0,
    'URL' => 0,
    'LINK_MORE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589ac7bbc02a17_48693886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ac7bbc02a17_48693886')) {function content_589ac7bbc02a17_48693886($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['NAME']->value)&&$_smarty_tpl->tpl_vars['NAME']->value!='') {?>
  <div class="box1">
    <div class="box_header">
      <span class="show_title"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</span> 
    </div>
    <div class="box_line" style="margin-bottom:10px;"></div>
      <?php if ($_smarty_tpl->tpl_vars['IMAGE']->value) {?>
        <div class="box_image"><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['NAME']->value);?>
" /></div>
        <div class="box_line abstand"></div>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['URL']->value) {
echo $_smarty_tpl->tpl_vars['URL']->value;?>
 &raquo;<br /><?php }?>
      <?php echo $_smarty_tpl->tpl_vars['LINK_MORE']->value;?>
 &raquo;
  </div>
<?php }?><?php }} ?>
