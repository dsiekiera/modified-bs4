<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 19:45:15
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/listing_filter.html" */ ?>
<?php /*%%SmartyHeaderCode:381840358589a01b404ce58-70053513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed186baee122f2cb170f12af2f8d2895e5befb1' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/listing_filter.html',
      1 => 1486492951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381840358589a01b404ce58-70053513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01b40d6dc5_67405508',
  'variables' => 
  array (
    'language' => 0,
    'FILTER_TAG' => 0,
    'FILTER_MANUFACTURER' => 0,
    'FILTER_SORT' => 0,
    'FILTER_SET' => 0,
    'LINK_DISPLAY_LIST' => 0,
    'LINK_DISPLAY_BOX' => 0,
    'LINK_FILTER_RESET' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01b40d6dc5_67405508')) {function content_589a01b40d6dc5_67405508($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("filter", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("filter", 'local'); ?>
<div class="filter_bar"><div class="d-flex justify-content-between"><?php if (count($_smarty_tpl->tpl_vars['FILTER_TAG']->value)<1&&$_smarty_tpl->tpl_vars['FILTER_MANUFACTURER']->value!='') {?><div class="mr-2"><?php echo $_smarty_tpl->tpl_vars['FILTER_MANUFACTURER']->value;?>
</div><?php }?><div class="mr-2"><?php echo $_smarty_tpl->tpl_vars['FILTER_SORT']->value;?>
</div><div class="mr-2"><?php echo $_smarty_tpl->tpl_vars['FILTER_SET']->value;?>
</div><div class="ml-auto"><a rel="nofollow" class="mr-1<?php if (@constant('PRODUCT_LIST_BOX')!='true') {?> active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['LINK_DISPLAY_LIST']->value;?>
" title="Listenansicht"><i class="fa fa-align-justify" aria-hidden="true"></i></a><a rel="nofollow"<?php if (@constant('PRODUCT_LIST_BOX')=='true') {?> class="active"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['LINK_DISPLAY_BOX']->value;?>
" title="Boxansicht"><i class="fa fa-th" aria-hidden="true"></i></a></div></div><?php if (count($_smarty_tpl->tpl_vars['FILTER_TAG']->value)>0) {?><div class="tags_bar"><div class="tags_bar_headline cf"><?php echo $_smarty_tpl->getConfigVariable('text_filter_options');?>
<a rel="nofollow" class="tags_bar_reset" href="<?php echo $_smarty_tpl->tpl_vars['LINK_FILTER_RESET']->value;?>
" title="Reset"><?php echo $_smarty_tpl->getConfigVariable('text_filter_reset');?>
</a></div><div class="tags_bar_row cf"><?php if ($_smarty_tpl->tpl_vars['FILTER_MANUFACTURER']->value!='') {?><div class="tags_bar_item"><?php echo $_smarty_tpl->tpl_vars['FILTER_MANUFACTURER']->value;?>
</div><?php }
$_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FILTER_TAG']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?><div class="tags_bar_item"><?php echo $_smarty_tpl->tpl_vars['filter']->value;?>
</div><?php } ?></div></div><?php }?></div><?php }} ?>
