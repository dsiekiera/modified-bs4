<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 19:50:03
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/pagination.html" */ ?>
<?php /*%%SmartyHeaderCode:1906023421589a01b3d71c84-18718867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3de32b652a5bb28e90f03b5e7bb025bf895580a' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/pagination.html',
      1 => 1486493392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1906023421589a01b3d71c84-18718867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01b3e29944_97504041',
  'variables' => 
  array (
    'DISPLAY_COUNT' => 0,
    'DISPLAY_LINKS' => 0,
    'keys' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01b3e29944_97504041')) {function content_589a01b3e29944_97504041($_smarty_tpl) {?><div class="d-flex justify-content-between pagination-bar"><div><?php echo $_smarty_tpl->tpl_vars['DISPLAY_COUNT']->value;?>
</div><div class="ml-auto"><ul class="pagination d-flex"><li class="plain"><?php echo @constant('TEXT_RESULT_PAGE');?>
</li><?php if (isset($_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['previous'])) {?><li><?php echo $_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['previous'];?>
</li><?php }
if (isset($_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['previouspages'])) {?><li><?php echo $_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['previouspages'];?>
</li><?php }
$_smarty_tpl->tpl_vars["pages"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["pages"]->_loop = false;
 $_smarty_tpl->tpl_vars["keys"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["pages"]->key => $_smarty_tpl->tpl_vars["pages"]->value) {
$_smarty_tpl->tpl_vars["pages"]->_loop = true;
 $_smarty_tpl->tpl_vars["keys"]->value = $_smarty_tpl->tpl_vars["pages"]->key;
?><li class="<?php echo $_smarty_tpl->tpl_vars['keys']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</li><?php }
if (isset($_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['nextpages'])) {?><li><?php echo $_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['nextpages'];?>
</li><?php }
if (isset($_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['next'])) {?><li><?php echo $_smarty_tpl->tpl_vars['DISPLAY_LINKS']->value['next'];?>
</li><?php }?></ul></div></div><?php }} ?>
