<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 17:47:08
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_cart.html" */ ?>
<?php /*%%SmartyHeaderCode:17110967265899da1dc08111-81796796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ed58c45785bbf6748e1ed100f10c0fbf1e03d8d' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_cart.html',
      1 => 1486486023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17110967265899da1dc08111-81796796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1dcbd991_74581599',
  'variables' => 
  array (
    'language' => 0,
    'LINK_CART' => 0,
    'PRODUCTS' => 0,
    'deny_cart' => 0,
    'ACTIVATE_GIFT' => 0,
    'GV_AMOUNT' => 0,
    'empty' => 0,
    'products' => 0,
    'products_data' => 0,
    'LINK_CHECKOUT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1dcbd991_74581599')) {function content_5899da1dcbd991_74581599($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/smarty_3/plugins/modifier.truncate.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<li class="nav-item dropdown ml-auto"><a class="nav-link dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['LINK_CART']->value;?>
" id="navbarCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->getConfigVariable('heading_cart');?>
 &raquo; <span class="cart_content"><strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['PRODUCTS']->value)===null||$tmp==='' ? '0' : $tmp);?>
</strong> <?php echo $_smarty_tpl->getConfigVariable('text_article');?>
</span></a><div class="dropdown-menu" aria-labelledby="navbarCart"><?php if ($_smarty_tpl->tpl_vars['deny_cart']->value!='true') {
if ($_smarty_tpl->tpl_vars['ACTIVATE_GIFT']->value=='true') {
if (isset($_smarty_tpl->tpl_vars['GV_AMOUNT']->value)) {?><div class="giftmessage"><strong><?php echo $_smarty_tpl->getConfigVariable('voucher_balance');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['GV_AMOUNT']->value;?>
</div><?php }
}
if ($_smarty_tpl->tpl_vars['empty']->value=='false') {?><div class="mini"><strong><?php echo $_smarty_tpl->getConfigVariable('text_full_cart');?>
</strong></div><ul class="tc_list"><?php  $_smarty_tpl->tpl_vars['products_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_data']->key => $_smarty_tpl->tpl_vars['products_data']->value) {
$_smarty_tpl->tpl_vars['products_data']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['products_data']->value['LINK'];?>
"><?php echo $_smarty_tpl->tpl_vars['products_data']->value['QTY'];?>
 x <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['products_data']->value['NAME'],40,"...",true);?>
</a><span class="tc_delete"><?php echo $_smarty_tpl->tpl_vars['products_data']->value['BUTTON_DELETE'];?>
</span></li><?php } ?></ul><div class="toogle_cart_links"><a href="<?php echo $_smarty_tpl->tpl_vars['LINK_CHECKOUT']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('heading_checkout');?>
 &raquo;</strong></a><a href="<?php echo $_smarty_tpl->tpl_vars['LINK_CART']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('heading_cart');?>
 &raquo;</strong></a></div><?php } else { ?><div class="mini"><strong><?php echo $_smarty_tpl->getConfigVariable('text_empty_cart');?>
</strong></div><?php }
}?></div></li><?php }} ?>
