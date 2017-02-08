<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 19:33:41
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/price_listing.html" */ ?>
<?php /*%%SmartyHeaderCode:477977812589a13053f2578-08563547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c78b719205e4c6b751bfd424609f2bf64c7228a5' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/price_listing.html',
      1 => 1486056200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '477977812589a13053f2578-08563547',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'price_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589a1305505ce0_28726303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589a1305505ce0_28726303')) {function content_589a1305505ce0_28726303($_smarty_tpl) {?>            <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='Special'||$_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='SpecialDiscount') {?>
              
              <span class="old_price">
                <span class="small_price"><?php echo @constant('INSTEAD');?>
</span>
                <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_OLD_PRICE'];?>

              </span>
              <span class="new_price">
                <span class="small_price"><?php echo @constant('ONLY');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>

              </span>
              <span class="save_price">
                <?php echo @constant('YOU_SAVE');?>
 <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SAVE_PERCENT'];?>
% / <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SAVE_DIFF'];?>

              </span>
              
            <?php } elseif ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='SpecialGraduated') {?>
              <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_UVP']!='') {?> 
                
                <span class="uvp_price">  
                  <span class="small_price"><?php echo @constant('YOUR_PRICE');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>

                </span>
                <span class="item_price"><span class="small_price"><?php echo @constant('MSRP');?>
</span><?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_OLD_PRICE'];?>
</span>                
                
              <?php } else { ?>
                
                <span class="graduated_price">
                  <span class="small_price"><?php echo @constant('FROM');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_OLD_PRICE'];?>

                </span>
                <span class="item_price"><span class="small_price"><?php echo @constant('UNIT_PRICE');?>
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
