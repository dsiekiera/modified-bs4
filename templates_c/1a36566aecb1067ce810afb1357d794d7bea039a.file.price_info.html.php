<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-08 08:24:44
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/price_info.html" */ ?>
<?php /*%%SmartyHeaderCode:1229513337589ac7bc03b677-10347990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a36566aecb1067ce810afb1357d794d7bea039a' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/includes/price_info.html',
      1 => 1486056200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1229513337589ac7bc03b677-10347990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'price_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589ac7bc0aa816_88249681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ac7bc0aa816_88249681')) {function content_589ac7bc0aa816_88249681($_smarty_tpl) {?>            <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='Special'||$_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='SpecialDiscount') {?>
              
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
              <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_GROUP_DISCOUNT']!='') {?>
              <span class="save_price">
                <?php echo @constant('BOX_LOGINBOX_DISCOUNT');?>
: <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_GROUP_DISCOUNT'];?>
%
              </span>
              <?php }?>
              <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_PLAIN'];?>
" />
              
            <?php } elseif ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_FLAG']=='SpecialGraduated') {?>
              <?php if ($_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_UVP']!='') {?> 
                
                <span class="uvp_price">  
                  <span class="small_price"><?php echo @constant('YOUR_PRICE');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>

                </span>
                <span class="item_price"><span class="small_price"><?php echo @constant('MSRP');?>
</span><?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_OLD_PRICE'];?>
</span>
                <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_PLAIN'];?>
" />
                
              <?php } else { ?>
                
                <span class="graduated_price">
                  <span class="small_price"><?php echo @constant('FROM');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_OLD_PRICE'];?>

                </span>
                <span class="item_price"><span class="small_price"><?php echo @constant('UNIT_PRICE');?>
</span> <?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_SPECIAL_PRICE'];?>
</span>
                <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_PLAIN'];?>
" />
                
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
              <meta itemprop="price" content="<?php echo $_smarty_tpl->tpl_vars['price_data']->value['PRODUCTS_PRICE_PLAIN'];?>
" />
              
            <?php }?><?php }} ?>
