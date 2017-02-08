<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 19:21:21
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/product_listing_include.html" */ ?>
<?php /*%%SmartyHeaderCode:627347168589a01ae4f2f56-03076390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ea1e093a5ac9a5ba6fe2ae27de99d85160f717' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/product_listing_include.html',
      1 => 1486491312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '627347168589a01ae4f2f56-03076390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01ae68e124_98160637',
  'variables' => 
  array (
    'STARTPAGE' => 0,
    'module_content' => 0,
    'module_data' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01ae68e124_98160637')) {function content_589a01ae68e124_98160637($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php if ((!isset($_smarty_tpl->tpl_vars['STARTPAGE']->value)&&@constant('PRODUCT_LIST_BOX')=='true')||($_smarty_tpl->tpl_vars['STARTPAGE']->value=='true'&&@constant('PRODUCT_LIST_BOX_STARTPAGE')=='true')) {?>
    
    <?php  $_smarty_tpl->tpl_vars['module_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module_data']->key => $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->_loop = true;
?>
        <div class="col-12 col-sm-8 col-md-6">
            <div class=" card boxview">
                <div class="card-img-top">
                    <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_IMAGE']!='') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_LINK'];?>
">
                            <img class="img-fluid unveil" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/images/loading.gif" data-src="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME']);?>
">
                        </a>
                    <?php }?>
                </div>
                <div class="card-block">
                    <div class="card-title">
                        <h2>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_LINK'];?>
"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME'];?>
</a>
                        </h2>
                    </div>
                    <div class="card-text">
                        <div class="lb_price">
                            <?php  $_smarty_tpl->tpl_vars['price_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_PRICE_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price_data']->key => $_smarty_tpl->tpl_vars['price_data']->value) {
$_smarty_tpl->tpl_vars['price_data']->_loop = true;
?>
                                <?php echo $_smarty_tpl->getSubTemplate ("module/includes/price_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                            <?php } ?>
                            <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_PRICE_ARRAY'][0]['PRODUCTS_PRICE_FLAG']!='NotAllowed') {?>
                                <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_VPE']) {?><div class="lb_vpe"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_VPE'];?>
</div><?php }?>
                            <?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_PRICE_ARRAY'][0]['PRODUCTS_PRICE_FLAG']!='NotAllowed') {?>
                            <div class="text-muted">
                                <small><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_TAX_INFO'];
echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_LINK'];?>
</small>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_BUTTON_BUY_NOW']||($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_FSK18']!='0'&&@constant('SHOW_BUTTON_BUY_NOW')!='false')) {?>
                                <div class="lb_buttons"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_BUTTON_DETAILS'];
echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_BUTTON_BUY_NOW'];?>
</div>
                            <?php }?>
                        <?php }?>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_NAME']) {?>
                    <div class="card-footer">
                        <div class="text-muted">
                            <small>
                                <?php echo $_smarty_tpl->getConfigVariable('text_shippingtime');?>
 
                                <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_IMAGE']) {?>
                                    <span class="lb_shipping_image">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_NAME']);?>
">
                                    </span>
                                <?php }?>
                                <?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_NAME_LINK'];?>

                            </small>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    <?php } ?>

<?php } else { ?>
  
  <?php  $_smarty_tpl->tpl_vars['module_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module_data']->key => $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->_loop = true;
?>
  <div class="card listview">
    <div class="lr_inner cf">
      <div class="lr_image">
      <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_IMAGE']!='') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_LINK'];?>
"><img class="unveil" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/images/loading.gif" data-src="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME']);?>
" /></a>
        <noscript><a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_LINK'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME']);?>
" /></a></noscript>
      <?php } else { ?>
        &nbsp;
      <?php }?>      
      </div>
      <div class="lr_content cf">
        <div class="lr_title"><h2><a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_LINK'];?>
"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME'];?>
</a></h2></div>
        <div class="lr_desc_box">
          <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHORT_DESCRIPTION']) {?><div class="lr_desc"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHORT_DESCRIPTION'];?>
</div><?php }?>
          <div class="lr_shipping"><?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_NAME']) {
echo $_smarty_tpl->getConfigVariable('text_shippingtime');?>
 <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_IMAGE']) {?><span class="lr_shipping_image"><img src="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_NAME']);?>
" /></span><?php }
echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_NAME_LINK'];
} else { ?>&nbsp;<?php }?></div>
        </div>
        <div class="lr_price_box">
          <div class="lr_price">
              <?php  $_smarty_tpl->tpl_vars['price_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_PRICE_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price_data']->key => $_smarty_tpl->tpl_vars['price_data']->value) {
$_smarty_tpl->tpl_vars['price_data']->_loop = true;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("module/includes/price_listing.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              <?php } ?>
          </div>
          <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_PRICE_ARRAY'][0]['PRODUCTS_PRICE_FLAG']!='NotAllowed') {?>
            <?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_VPE']) {?><div class="lr_vpe"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_VPE'];?>
</div><?php }?>
            <div class="lr_tax"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_TAX_INFO'];
echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_SHIPPING_LINK'];?>
</div>
            <div class="lr_buttons"><?php echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_BUTTON_DETAILS'];
if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_BUTTON_BUY_NOW']) {
echo $_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_BUTTON_BUY_NOW'];
}?></div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
<?php }?><?php }} ?>
