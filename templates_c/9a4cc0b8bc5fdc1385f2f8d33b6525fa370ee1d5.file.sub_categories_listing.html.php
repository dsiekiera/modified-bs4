<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 18:19:47
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/sub_categories_listing.html" */ ?>
<?php /*%%SmartyHeaderCode:172859261589a01b3ee03c9-50345127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a4cc0b8bc5fdc1385f2f8d33b6525fa370ee1d5' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/sub_categories_listing.html',
      1 => 1486056214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172859261589a01b3ee03c9-50345127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'categories_content' => 0,
    'TR_COLS' => 0,
    'categories_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01b401c175_66788513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01b401c175_66788513')) {function content_589a01b401c175_66788513($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("categorie_listing", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("categorie_listing", 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['categories_content']->value)&&$_smarty_tpl->tpl_vars['categories_content']->value!=''&&$_smarty_tpl->tpl_vars['TR_COLS']->value>0) {?>
<h4><?php echo $_smarty_tpl->getConfigVariable('heading_more_categories');?>
</h4>
<div class="subcats cf">
  <?php  $_smarty_tpl->tpl_vars['categories_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categories_data']->_loop = false;
 $_smarty_tpl->tpl_vars['spalten'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aussen']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['categories_data']->key => $_smarty_tpl->tpl_vars['categories_data']->value) {
$_smarty_tpl->tpl_vars['categories_data']->_loop = true;
 $_smarty_tpl->tpl_vars['spalten']->value = $_smarty_tpl->tpl_vars['categories_data']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['aussen']['iteration']++;
?>
  <div class="subcatlist<?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['aussen']['iteration'] % $_smarty_tpl->tpl_vars['TR_COLS']->value)) {?> last<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_LINK'];?>
">
      <?php if ($_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_IMAGE']) {?><span class="subcat_image"><span class="subcat_image_inner"><img src="<?php echo $_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_NAME']);?>
" /></span></span><?php }?>
      <span class="subcat_title"><span class="subcat_title_inner"><?php echo $_smarty_tpl->tpl_vars['categories_data']->value['CATEGORIES_NAME'];?>
</span></span>
    </a>
    
  </div>
  <?php if (!($_smarty_tpl->getVariable('smarty')->value['foreach']['aussen']['iteration'] % $_smarty_tpl->tpl_vars['TR_COLS']->value)) {?><br class="clearfix" /><?php }?>
  <?php } ?>
</div>
<?php }?><?php }} ?>
