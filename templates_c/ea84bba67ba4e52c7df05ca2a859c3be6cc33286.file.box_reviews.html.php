<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 15:30:53
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_reviews.html" */ ?>
<?php /*%%SmartyHeaderCode:6586349975899da1dd6fb68-82859518%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea84bba67ba4e52c7df05ca2a859c3be6cc33286' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/boxes/box_reviews.html',
      1 => 1486056094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6586349975899da1dd6fb68-82859518',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'REVIEWS_WRITE_REVIEW' => 0,
    'RANDOM' => 0,
    'REVIEWS_LINK' => 0,
    'PRODUCTS_LINK' => 0,
    'PRODUCTS_NAME' => 0,
    'PRODUCTS_IMAGE' => 0,
    'REVIEWS' => 0,
    'REVIEWS_IMAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1ddde0e2_72032178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1ddde0e2_72032178')) {function content_5899da1ddde0e2_72032178($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['REVIEWS_WRITE_REVIEW']->value)||isset($_smarty_tpl->tpl_vars['RANDOM']->value)) {?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_reviews');?>
</span> 
    <a class="show_all" href="<?php echo $_smarty_tpl->tpl_vars['REVIEWS_LINK']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('show_all');?>
 <span class="arrow">&raquo;</span></a>
    <br class="clearfix" />
  </div>
  <div class="box_line"></div>
  <?php if (isset($_smarty_tpl->tpl_vars['RANDOM']->value)) {?>
    <div class="box_title"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_LINK']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value;?>
</strong></a></div>
    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value!='') {?><div class="box_image"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_LINK']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value);?>
" /></a></div><?php }?>
    <div class="box_line abstand"></div>
    <div class="box_text"><?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['REVIEWS']->value);?>
</div>
    <div class="box_reviews_image"><?php echo $_smarty_tpl->tpl_vars['REVIEWS_IMAGE']->value;?>
</div>
  <?php } else { ?>
    <p class="onlytop"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REVIEWS_WRITE_REVIEW']->value;?>
</a></p>
  <?php }?>
</div>
<?php }?><?php }} ?>
