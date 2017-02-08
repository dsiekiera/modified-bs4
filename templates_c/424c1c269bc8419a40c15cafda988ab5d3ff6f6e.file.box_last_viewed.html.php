<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_last_viewed.html" */ ?>
<?php /*%%SmartyHeaderCode:10252399795899da1d8dadf0-52148952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '424c1c269bc8419a40c15cafda988ab5d3ff6f6e' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_last_viewed.html',
      1 => 1486056092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10252399795899da1d8dadf0-52148952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'box_content' => 0,
    'CATEGORY_NAME' => 0,
    'CATEGORY_LINK' => 0,
    'MY_PERSONAL_PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1d9743a7_65153678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1d9743a7_65153678')) {function content_5899da1d9743a7_65153678($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['box_content']->value)) {?>
  <div class="box2">
    <div class="box_header"><?php echo $_smarty_tpl->getConfigVariable('heading_last_viewed');?>
</div>
    <div class="box_line"></div>
    <div class="box_title"><a href="<?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_LINK'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_NAME'];?>
</strong></a></div>
    <?php if ($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_IMAGE']!='') {?><div class="box_image"><a href="<?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_LINK'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_NAME']);?>
" /></a></div><?php }?>
    <div class="box_price">
      <?php  $_smarty_tpl->tpl_vars['price_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_PRICE_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price_data']->key => $_smarty_tpl->tpl_vars['price_data']->value) {
$_smarty_tpl->tpl_vars['price_data']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("module/includes/price_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_PRICE_ARRAY'][0]['PRODUCTS_PRICE_FLAG']!='NotAllowed') {?>
      <?php if ($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_VPE']) {?><div class="box_vpe"><?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_VPE'];?>
</div><?php }?>
      <div class="box_tax"><?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_TAX_INFO'];
echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_SHIPPING_LINK'];?>
</div>
    <?php }?>
    <div class="box_line abstand"></div>
    <?php echo $_smarty_tpl->getConfigVariable('text_watch_category');?>

    <?php if ($_smarty_tpl->tpl_vars['CATEGORY_NAME']->value!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
 &raquo;</a><br /><?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['MY_PERSONAL_PAGE']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_my_page');?>
  &raquo;</a>
  </div>
<?php }?><?php }} ?>
