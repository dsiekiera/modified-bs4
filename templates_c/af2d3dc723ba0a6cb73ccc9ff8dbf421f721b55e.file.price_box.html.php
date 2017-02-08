<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 18:19:42
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/price_box.html" */ ?>
<?php /*%%SmartyHeaderCode:699004163589a01ae694f50-94423511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af2d3dc723ba0a6cb73ccc9ff8dbf421f721b55e' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/price_box.html',
      1 => 1486056199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699004163589a01ae694f50-94423511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'price_data' => 0,
    'module_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a01ae70dfb5_51355138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a01ae70dfb5_51355138')) {function content_589a01ae70dfb5_51355138($_smarty_tpl) {?>            <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='Special'||$_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='SpecialDiscount') {?>
              
              <span class="special_price">
                <span class="small_price"><?php echo $_smarty_tpl->getConfigVariable('special_price');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>

              </span>              
              
            <?php } elseif ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='SpecialGraduated') {?>
              <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_UVP']!='') {?> 
                
                <span class="uvp_price">
                  <span class="small_price"><?php echo @constant('YOUR_PRICE');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>

                </span>
                
              <?php } else { ?>
                
                <span class="graduated_price">
                  <span class="small_price"><?php echo @constant('FROM');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_OLD_PRICE'];?>

                </span>
                <span class="item_price<?php if ($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_VPE']) {?> with_vpe<?php }?>"><span class="small_price"><?php echo @constant('UNIT_PRICE');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>
</span>
                
              <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='NotAllowed') {?>
              <span class="no_price"><?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_NOT_ALLOWED'];?>
</span>
            <?php } else { ?>
              
              <span class="standard_price">
                <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FROM']!='') {?><span class="small_price"><?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FROM'];?>
</span><?php }?>
                <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_STANDARD_PRICE'];?>

              </span>
              
            <?php }?><?php }} ?>
