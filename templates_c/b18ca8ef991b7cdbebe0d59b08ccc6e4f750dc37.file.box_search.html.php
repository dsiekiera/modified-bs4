<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_search.html" */ ?>
<?php /*%%SmartyHeaderCode:8481264725899da1d98a872-05233842%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18ca8ef991b7cdbebe0d59b08ccc6e4f750dc37' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_search.html',
      1 => 1486060714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8481264725899da1d98a872-05233842',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'INPUT_SEARCH' => 0,
    'BUTTON_SUBMIT' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1d9af3c7_58463049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1d9af3c7_58463049')) {function content_5899da1d9af3c7_58463049($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

	<div class="input-group ml-auto">
		<?php echo $_smarty_tpl->tpl_vars['INPUT_SEARCH']->value;?>

		<span class="input-group-btn">
			<?php echo $_smarty_tpl->tpl_vars['BUTTON_SUBMIT']->value;?>

		</span>
	</div>
<?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>
<?php }} ?>
