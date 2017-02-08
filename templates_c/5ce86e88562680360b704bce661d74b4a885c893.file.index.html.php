<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-07 20:38:32
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2869568375899da1e108c57-69438162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce86e88562680360b704bce661d74b4a885c893' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/index.html',
      1 => 1486496239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2869568375899da1e108c57-69438162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5899da1e665ac9_96719662',
  'variables' => 
  array (
    'language' => 0,
    'box_ADMIN' => 0,
    'store_name' => 0,
    'index' => 0,
    'box_LANGUAGES' => 0,
    'account' => 0,
    'logoff' => 0,
    'create_account' => 0,
    'login' => 0,
    'box_SEARCH' => 0,
    'home' => 0,
    'checkout' => 0,
    'box_CART' => 0,
    'box_WISHLIST' => 0,
    'SLIDER' => 0,
    's' => 0,
    'BANNER' => 0,
    'main_content' => 0,
    'box_BESTSELLERS' => 0,
    'box_CATEGORIES' => 0,
    'box_ADD_QUICKIE' => 0,
    'box_LOGIN' => 0,
    'box_WHATSNEW' => 0,
    'box_SPECIALS' => 0,
    'box_LAST_VIEWED' => 0,
    'box_REVIEWS' => 0,
    'box_MANUFACTURERS' => 0,
    'box_MANUFACTURERS_INFO' => 0,
    'box_CURRENCIES' => 0,
    'box_HISTORY' => 0,
    'box_TRUSTEDSHOPS' => 0,
    'fullcontent' => 0,
    'navtrail' => 0,
    'bestseller' => 0,
    'box_CONTENT' => 0,
    'box_INFORMATION' => 0,
    'box_MISCELLANEOUS' => 0,
    'box_NEWSLETTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5899da1e665ac9_96719662')) {function content_5899da1e665ac9_96719662($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/smarty_3/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_piwik')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/function.piwik.php';
if (!is_callable('smarty_function_googleanalytics')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/function.googleanalytics.php';
if (!is_callable('smarty_function_facebook')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/function.facebook.php';
if (!is_callable('smarty_function_googlecertificate')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/function.googlecertificate.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['box_ADMIN']->value)) {
echo $_smarty_tpl->tpl_vars['box_ADMIN']->value;
}?><nav class="navbar navbar-toggleable-md navbar-light bg-faded"><div class="container"><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><span class="navbar-brand w-50"><a title="<?php echo $_smarty_tpl->getConfigVariable('link_index');?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['store_name']->value;?>
" href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><img class="img-fluid" src="<?php echo @constant('HTTP_SERVER');
echo @constant('DIR_WS_CATALOG');?>
templates/tpl_modified_bs4/img/logo_head.png" alt="<?php echo $_smarty_tpl->getConfigVariable('link_index');?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['store_name']->value;?>
"></a><?php if (isset($_smarty_tpl->tpl_vars['box_LANGUAGES']->value)&&$_smarty_tpl->tpl_vars['box_LANGUAGES']->value!='') {?><span class="languages"><?php echo $_smarty_tpl->tpl_vars['box_LANGUAGES']->value;?>
</span><?php }?></span><div class="collapse navbar-collapse flex-column" id="navbarHeader"><div class="d-flex flex-wrap"><ul class="navbar-nav justify-content-end w-100"><?php if (isset($_smarty_tpl->tpl_vars['account']->value)) {?><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_account');?>
</a></li><?php }
if (isset($_SESSION['customer_id'])) {?><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['logoff']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_logoff');?>
</a></li><?php } else { ?><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['create_account']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('new_customer');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_login');?>
</a></li><?php }?></ul><?php if (isset($_smarty_tpl->tpl_vars['box_SEARCH']->value)) {
echo $_smarty_tpl->tpl_vars['box_SEARCH']->value;
}?></div></div></div></nav><div class="container"><div class="row"><?php if (isset($_smarty_tpl->tpl_vars['home']->value)&&$_smarty_tpl->tpl_vars['home']->value==true) {?><div class="col-md-18 push-md-6"><div class="navbar navbar-toggleable-md navbar-light bg-faded navbarContent" role="navigation"><div class="collapse navbar-collapse" id="navbarContent"><ul class="navbar-nav d-flex w-100 justify-content-start"><li class="nav-item"><a class="nav-link" href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=7');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_contact');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=4');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_imprint');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['checkout']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_checkout');?>
</a></li><?php if (isset($_smarty_tpl->tpl_vars['box_CART']->value)) {
echo $_smarty_tpl->tpl_vars['box_CART']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_WISHLIST']->value)) {
echo $_smarty_tpl->tpl_vars['box_WISHLIST']->value;
}?></ul></div></div><?php if (isset($_smarty_tpl->tpl_vars['SLIDER']->value)) {?><div class="content_banner"><ul class="bxcarousel_slider"><?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SLIDER']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?><li><?php echo $_smarty_tpl->tpl_vars['s']->value['IMAGE'];?>
</li><?php } ?></ul></div><?php }
if (isset($_smarty_tpl->tpl_vars['BANNER']->value)) {?><div class="content_banner"><?php echo $_smarty_tpl->tpl_vars['BANNER']->value;?>
</div><?php }
if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_BESTSELLERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_BESTSELLERS']->value;
}?></div><div class="col-md-6 pull-md-18"><?php if (isset($_smarty_tpl->tpl_vars['box_CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CATEGORIES']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value)) {
echo $_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_LOGIN']->value)) {
echo $_smarty_tpl->tpl_vars['box_LOGIN']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_WHATSNEW']->value)) {
echo $_smarty_tpl->tpl_vars['box_WHATSNEW']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_SPECIALS']->value)) {
echo $_smarty_tpl->tpl_vars['box_SPECIALS']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value)) {
echo $_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_REVIEWS']->value)) {
echo $_smarty_tpl->tpl_vars['box_REVIEWS']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_CURRENCIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CURRENCIES']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_HISTORY']->value)) {
echo $_smarty_tpl->tpl_vars['box_HISTORY']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value)) {
echo $_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value;
}?></div><?php } elseif (isset($_smarty_tpl->tpl_vars['fullcontent']->value)&&$_smarty_tpl->tpl_vars['fullcontent']->value==true) {?><div class="col-md-24"><div class="navbar navbar-toggleable-md navbar-light bg-faded navbarContent" role="navigation"><div class="collapse navbar-collapse" id="navbarContent"><ul class="navbar-nav d-flex w-100 justify-content-start"><li class="nav-item"><a class="nav-link" href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=7');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_contact');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=4');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_imprint');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['checkout']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_checkout');?>
</a></li><?php if (isset($_smarty_tpl->tpl_vars['box_CART']->value)) {
echo $_smarty_tpl->tpl_vars['box_CART']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_WISHLIST']->value)) {
echo $_smarty_tpl->tpl_vars['box_WISHLIST']->value;
}?></ul></div></div><?php if (isset($_smarty_tpl->tpl_vars['navtrail']->value)) {
echo $_smarty_tpl->tpl_vars['navtrail']->value;
}
if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}
if ($_smarty_tpl->tpl_vars['bestseller']->value) {
if (isset($_smarty_tpl->tpl_vars['box_BESTSELLERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_BESTSELLERS']->value;
}
}?></div><?php } else { ?><div class="col-md-18 push-md-6"><div class="navbar navbar-toggleable-md navbar-light bg-faded navbarContent" role="navigation"><div class="collapse navbar-collapse" id="navbarContent"><ul class="navbar-nav d-flex w-100 justify-content-start"><li class="nav-item"><a class="nav-link" href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=7');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_contact');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=4');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_imprint');?>
</a></li><li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['checkout']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_checkout');?>
</a></li><?php if (isset($_smarty_tpl->tpl_vars['box_CART']->value)) {
echo $_smarty_tpl->tpl_vars['box_CART']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_WISHLIST']->value)) {
echo $_smarty_tpl->tpl_vars['box_WISHLIST']->value;
}?></ul></div></div><?php if (isset($_smarty_tpl->tpl_vars['navtrail']->value)) {
echo $_smarty_tpl->tpl_vars['navtrail']->value;
}
if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}
if ($_smarty_tpl->tpl_vars['bestseller']->value) {
if (isset($_smarty_tpl->tpl_vars['box_BESTSELLERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_BESTSELLERS']->value;
}
}?></div><div class="col-md-6 pull-md-18"><?php if (isset($_smarty_tpl->tpl_vars['box_CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CATEGORIES']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value)) {
echo $_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_LOGIN']->value)) {
echo $_smarty_tpl->tpl_vars['box_LOGIN']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_WHATSNEW']->value)) {
echo $_smarty_tpl->tpl_vars['box_WHATSNEW']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_SPECIALS']->value)) {
echo $_smarty_tpl->tpl_vars['box_SPECIALS']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value)) {
echo $_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_REVIEWS']->value)) {
echo $_smarty_tpl->tpl_vars['box_REVIEWS']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_CURRENCIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CURRENCIES']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_HISTORY']->value)) {
echo $_smarty_tpl->tpl_vars['box_HISTORY']->value;
}
if (isset($_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value)) {
echo $_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value;
}?></div><?php }?></div></div><footer><div class="container"><div class="row"><?php if (isset($_smarty_tpl->tpl_vars['box_CONTENT']->value)) {?><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['box_CONTENT']->value;?>
</div><?php }
if (isset($_smarty_tpl->tpl_vars['box_INFORMATION']->value)) {?><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['box_INFORMATION']->value;?>
</div><?php }
if (isset($_smarty_tpl->tpl_vars['box_MISCELLANEOUS']->value)) {?><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['box_MISCELLANEOUS']->value;?>
</div><?php }
if (isset($_smarty_tpl->tpl_vars['box_NEWSLETTER']->value)) {?><div class="col-md-6"><?php echo $_smarty_tpl->tpl_vars['box_NEWSLETTER']->value;?>
</div><?php }?></div><div class="copyright"><?php echo @constant('TITLE');?>
 &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
</div></div></footer><?php if ((@constant('TRACKING_COUNT_ADMIN_ACTIVE')=='true'&&$_SESSION['customers_status']['customers_status_id']=='0')||$_SESSION['customers_status']['customers_status_id']!='0') {
if (@constant('TRACKING_PIWIK_ACTIVE')=='true') {
echo smarty_function_piwik(array('url'=>@constant('TRACKING_PIWIK_LOCAL_PATH'),'id'=>@constant('TRACKING_PIWIK_ID'),'goal'=>@constant('TRACKING_PIWIK_GOAL')),$_smarty_tpl);
}
if (@constant('TRACKING_GOOGLEANALYTICS_ACTIVE')=='true') {
echo smarty_function_googleanalytics(array('account'=>@constant('TRACKING_GOOGLEANALYTICS_ID')),$_smarty_tpl);
}
if (@constant('TRACKING_FACEBOOK_ACTIVE')=='true') {
echo smarty_function_facebook(array('id'=>@constant('TRACKING_FACEBOOK_ID')),$_smarty_tpl);
}
}
if (@constant('GOOGLE_CERTIFIED_SHOPS_MERCHANT_ACTIVE')=='true') {
echo smarty_function_googlecertificate(array('subaccount'=>@constant('GOOGLE_SHOPPING_ID'),'account'=>@constant('GOOGLE_TRUSTED_ID')),$_smarty_tpl);
}?><?php }} ?>
