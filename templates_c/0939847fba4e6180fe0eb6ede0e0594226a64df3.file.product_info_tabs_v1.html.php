<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-08 08:24:43
         compiled from "/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/product_info/product_info_tabs_v1.html" */ ?>
<?php /*%%SmartyHeaderCode:2062204594589ac7bbcd5910-13529750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0939847fba4e6180fe0eb6ede0e0594226a64df3' => 
    array (
      0 => '/Users/danielsiekiera/Websites/modified-bs4/templates/tpl_modified_bs4/module/product_info/product_info_tabs_v1.html',
      1 => 1486056207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062204594589ac7bbcd5910-13529750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'PRODUCTS_NAME' => 0,
    'PRODUCTS_IMAGE' => 0,
    'SHIPPING_NAME' => 0,
    'SHIPPING_IMAGE' => 0,
    'SHIPPING_NAME_LINK' => 0,
    'PRODUCTS_MODEL' => 0,
    'PRODUCTS_EAN' => 0,
    'PRODUCTS_RATING_COUNT' => 0,
    'tpl_path' => 0,
    'PRODUCTS_AVERAGE_RATING' => 0,
    'PRODUCTS_DISCOUNT' => 0,
    'PRODUCTS_EXPIRES' => 0,
    'PRODUCTS_MANUFACTURERS_MODEL' => 0,
    'MANUFACTURER' => 0,
    'MANUFACTURER_LINK' => 0,
    'PRODUCTS_URL' => 0,
    'PRODUCTS_PRINT_LAYER' => 0,
    'PRODUCTS_WRITE_REVIEW' => 0,
    'EXPRESS_LINK' => 0,
    'ADD_CART_BUTTON_WISHLIST_TEXT' => 0,
    'KLARNA_PPBOX' => 0,
    'PRODUCTS_QUANTITY' => 0,
    'PRODUCTS_FSK18' => 0,
    'PRODUCTS_PRICE_ARRAY' => 0,
    'PRODUCTS_VPE' => 0,
    'PRODUCTS_TAX_INFO' => 0,
    'PRODUCTS_SHIPPING_LINK' => 0,
    'MODULE_graduated_price' => 0,
    'MODULE_product_options' => 0,
    'MODULE_product_options_template' => 0,
    'ADD_CART_BUTTON' => 0,
    'ADD_QTY' => 0,
    'ADD_CART_BUTTON_EXPRESS' => 0,
    'ACTIVATE_EXPRESS_LINK' => 0,
    'ADD_CART_BUTTON_PAYPAL' => 0,
    'PRODUCTS_GIFT_FORBIDDEN' => 0,
    'PRODUCTS_DATE_AVAILABLE' => 0,
    'XTB_REDIRECT_USER_TO' => 0,
    'MANUFACTURER_IMAGE' => 0,
    'FORM_END' => 0,
    'PRODUCTS_DESCRIPTION' => 0,
    'MODULE_product_tags' => 0,
    'more_images' => 0,
    'MODULE_products_media' => 0,
    'MODULE_products_reviews' => 0,
    'MODULE_cross_selling' => 0,
    'MODULE_reverse_cross_selling' => 0,
    'MODULE_also_purchased' => 0,
    'MODULE_products_category' => 0,
    'more_images_data' => 0,
    'module_data' => 0,
    'PRODUCTS_ADDED' => 0,
    'PRODUCT_NAVIGATOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_589ac7bc01fac1_26978152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ac7bc01fac1_26978152')) {function content_589ac7bc01fac1_26978152($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/plugins/modifier.onlytext.php';
if (!is_callable('smarty_modifier_replace')) include '/Users/danielsiekiera/Websites/modified-bs4/includes/external/smarty/smarty_3/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("product_info", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".section", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("product_info", 'local'); ?>
<div itemscope itemtype="http://schema.org/Product">
  <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

  <h1 itemprop="name"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value;?>
</h1>
  <div id="product_details">
    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value!='') {?>
    <div class="pd_imagebox">
      <div class="pd_big_image">
        <a class="cbimages" title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value);?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value,"info_images","popup_images");?>
"><img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value);?>
" /></a>
      </div>
      <div class="zoomtext"><?php echo $_smarty_tpl->getConfigVariable('zoomtext');?>
</div>
    </div>
    <?php }?>

    <div class="pd_content">
      <div class="pd_infobox">
        <div class="pd_inforow_first"></div>
        <?php if ($_smarty_tpl->tpl_vars['SHIPPING_NAME']->value) {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('text_shippingtime');?>
</strong> <?php if ($_smarty_tpl->tpl_vars['SHIPPING_IMAGE']->value) {?><img class="pd_shipping_image" src="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_IMAGE']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_NAME']->value;?>
" /><?php }?> <?php echo $_smarty_tpl->tpl_vars['SHIPPING_NAME_LINK']->value;?>
</div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value!='') {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('model');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value;?>
<meta itemprop="model" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value;?>
" /></div><?php }?>  
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_EAN']->value!='') {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('ean');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_EAN']->value;?>
</div><?php }?>  
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_RATING_COUNT']->value>1) {?>
        <div class="pd_inforow" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
          <strong><?php echo $_smarty_tpl->getConfigVariable('info_reviews');?>
</strong> 
          <span class="pd_reviews_image"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/stars_<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_AVERAGE_RATING']->value;?>
.png" alt="" /></span> 
          (<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_RATING_COUNT']->value;?>
)
          <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_AVERAGE_RATING']->value;?>
" />
          <meta itemprop="bestRating" content="5" />
          <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_RATING_COUNT']->value;?>
" /> 
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['PRODUCTS_RATING_COUNT']->value>0) {?>
        <div class="pd_inforow" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
          <strong><?php echo $_smarty_tpl->getConfigVariable('info_review');?>
</strong> 
          <span class="pd_reviews_image"><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/stars_<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_AVERAGE_RATING']->value;?>
.png" alt="" /></span> 
          (<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_RATING_COUNT']->value;?>
)
          <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_AVERAGE_RATING']->value;?>
" />
          <meta itemprop="bestRating" content="5" />
          <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_RATING_COUNT']->value;?>
" /> 
        </div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['PRODUCTS_DISCOUNT']->value)&&$_smarty_tpl->tpl_vars['PRODUCTS_DISCOUNT']->value!='') {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('text_discount');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_DISCOUNT']->value;?>
</div><?php }?>  
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_EXPIRES']->value) {?><div class="pd_inforow red"><?php echo $_smarty_tpl->getConfigVariable('text_expires_date');?>
 <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_EXPIRES']->value;?>
</div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_MANUFACTURERS_MODEL']->value!='') {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('products_manufacturer_model');?>
</strong> <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_MANUFACTURERS_MODEL']->value;?>
</div><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['MANUFACTURER']->value)&&$_smarty_tpl->tpl_vars['MANUFACTURER']->value!='') {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('manufacturer');?>
</strong> <span itemprop="brand"><?php echo $_smarty_tpl->tpl_vars['MANUFACTURER']->value;?>
</span></div><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['MANUFACTURER_LINK']->value)&&$_smarty_tpl->tpl_vars['MANUFACTURER_LINK']->value!='') {?><div class="pd_inforow"><strong><?php echo $_smarty_tpl->getConfigVariable('manufacturer_more_of');?>
</strong> <a title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['MANUFACTURER']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['MANUFACTURER_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MANUFACTURER']->value;?>
</a></div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_URL']->value!='') {?><div class="pd_inforow"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_URL']->value;?>
</div><?php }?>

        <ul class="pd_iconlist">
          <li class="print"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_PRINT_LAYER']->value;?>
</li>
          <li class="vote"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_WRITE_REVIEW']->value;?>
</li>
          <?php if (isset($_smarty_tpl->tpl_vars['EXPRESS_LINK']->value)) {?><li class="express"><?php echo $_smarty_tpl->tpl_vars['EXPRESS_LINK']->value;?>
</li><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['ADD_CART_BUTTON_WISHLIST_TEXT']->value) {?><li class="wishlist"><?php echo $_smarty_tpl->tpl_vars['ADD_CART_BUTTON_WISHLIST_TEXT']->value;?>
</li><?php }?>
        </ul>
        <?php if (isset($_smarty_tpl->tpl_vars['KLARNA_PPBOX']->value)) {
echo $_smarty_tpl->tpl_vars['KLARNA_PPBOX']->value;
}?>
      </div>
          
      <div class="pd_summarybox" itemprop="offers" itemscope itemtype="http://schema.org/Offer"> 
        <meta itemprop="priceCurrency" content="<?php echo $_SESSION['currency'];?>
" />
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY']->value<=0&&@constant('STOCK_CHECK')=='true') {?><meta itemprop="availability" content="http://schema.org/OutOfStock" /><?php } else { ?><meta itemprop="availability" content="http://schema.org/InStock" /><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_MANUFACTURERS_MODEL']->value!='') {?><meta itemprop="mpn" content="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_MANUFACTURERS_MODEL']->value;?>
" /><?php }?>
        <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
      
        <div class="pd_price<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_FSK18']->value=='true') {?> pd_fsk_padding<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_FSK18']->value=='true') {?><div class="pd_fsk18"></div><?php }?>
        <?php  $_smarty_tpl->tpl_vars['price_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCTS_PRICE_ARRAY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price_data']->key => $_smarty_tpl->tpl_vars['price_data']->value) {
$_smarty_tpl->tpl_vars['price_data']->_loop = true;
?>
          <?php echo $_smarty_tpl->getSubTemplate ("module/includes/price_info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } ?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_PRICE_ARRAY']->value[0]['PRODUCTS_PRICE_FLAG']!='NotAllowed') {?>
          <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_VPE']->value) {?><div class="pd_vpe"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_VPE']->value;?>
</div><?php }?>
          <div class="pd_tax<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_FSK18']->value=='true') {?> pd_fsk_padding<?php }?>"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_TAX_INFO']->value;
if ($_smarty_tpl->tpl_vars['PRODUCTS_SHIPPING_LINK']->value) {
echo $_smarty_tpl->tpl_vars['PRODUCTS_SHIPPING_LINK']->value;
}?></div>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['MODULE_graduated_price']->value)&&$_smarty_tpl->tpl_vars['MODULE_graduated_price']->value!='') {
echo $_smarty_tpl->tpl_vars['MODULE_graduated_price']->value;
}?>
        <?php if (isset($_smarty_tpl->tpl_vars['MODULE_product_options']->value)&&$_smarty_tpl->tpl_vars['MODULE_product_options']->value!='') {?>
          <?php if ($_smarty_tpl->tpl_vars['MODULE_product_options_template']->value=='multi_options_1.html'||strpos($_smarty_tpl->tpl_vars['MODULE_product_options_template']->value,"dropdown")!==false) {?>
            <?php echo $_smarty_tpl->tpl_vars['MODULE_product_options']->value;?>

          <?php }?>
        <?php }?>
      
        <?php if ($_smarty_tpl->tpl_vars['ADD_CART_BUTTON']->value!='') {?>
        <div class="addtobasket">
          <span class="addtobasket_input"><?php echo $_smarty_tpl->tpl_vars['ADD_QTY']->value;?>
</span>
          <span class="addtobasket_button"><?php echo $_smarty_tpl->tpl_vars['ADD_CART_BUTTON']->value;?>
</span>
          <?php if (isset($_smarty_tpl->tpl_vars['ADD_CART_BUTTON_EXPRESS']->value)) {?>
            <br class="clearfix" />
            <span class="addtobasket_button"><?php echo $_smarty_tpl->tpl_vars['ADD_CART_BUTTON_EXPRESS']->value;?>
</span>
          <?php } elseif ($_smarty_tpl->tpl_vars['ACTIVATE_EXPRESS_LINK']->value) {?>
            <br class="clearfix" />
            <span class="express_info"><a href="<?php echo $_smarty_tpl->tpl_vars['ACTIVATE_EXPRESS_LINK']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('checkout_express_activate');?>
</a></span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['ADD_CART_BUTTON_PAYPAL']->value) {?>
            <br class="clearfix" />
            <span class="addtobasket_button"><?php echo $_smarty_tpl->tpl_vars['ADD_CART_BUTTON_PAYPAL']->value;?>
</span>
          <?php }?>
          
        </div>
        <?php }?>
      
        <?php if ($_smarty_tpl->tpl_vars['ADD_CART_BUTTON']->value==''&&$_smarty_tpl->tpl_vars['PRODUCTS_FSK18']->value=='true') {?><div class="pd_inforow_message"><?php echo $_smarty_tpl->getConfigVariable('products_fsk18_check');?>
</div><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ADD_CART_BUTTON']->value==''&&$_smarty_tpl->tpl_vars['PRODUCTS_GIFT_FORBIDDEN']->value=='true') {?><div class="pd_inforow_message"><?php echo $_smarty_tpl->getConfigVariable('products_gift_forbidden');?>
</div><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVAILABLE']->value)&&$_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVAILABLE']->value!='') {?><div class="pd_inforow_message"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVAILABLE']->value;?>
</div><?php }?>

      </div>
      <br class="clearfix" />
      <?php if (isset($_smarty_tpl->tpl_vars['XTB_REDIRECT_USER_TO']->value)&&$_smarty_tpl->tpl_vars['XTB_REDIRECT_USER_TO']->value=='product') {?>
        <div class="xtb_booster_redirect_message"><strong>Sie haben die eBay Auktion gewonnen!</strong><br />Bitte w&auml;hlen Sie nun noch die gew&uuml;nschten Produkteigenschaften und legen Sie den Artikel danach in den Warenkorb, um mit der Zahlung fortzufahren und das Produkt versandfertig zu machen!</div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_product_options']->value)&&$_smarty_tpl->tpl_vars['MODULE_product_options']->value!='') {?>
        <?php if ($_smarty_tpl->tpl_vars['MODULE_product_options_template']->value!='multi_options_1.html'&&strpos($_smarty_tpl->tpl_vars['MODULE_product_options_template']->value,"dropdown")===false) {?>
          <?php echo $_smarty_tpl->tpl_vars['MODULE_product_options']->value;?>

        <?php }?>
      <?php }?>      
    </div>  
    <br class="clearfix" />
    <?php if (isset($_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value)&&$_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value!='') {?><div class="pd_manu_image"><a title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['MANUFACTURER']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['MANUFACTURER_LINK']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['MANUFACTURER_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['MANUFACTURER']->value);?>
" /></a></div><?php }?>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>



  <br />
  <div id="horizontalTab" class="pd_tabs">
    <ul class="resp-tabs-list">
      <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_DESCRIPTION']->value!='') {?><li><?php echo $_smarty_tpl->getConfigVariable('description');?>
</li><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_product_tags']->value)&&$_smarty_tpl->tpl_vars['MODULE_product_tags']->value!='') {?><li><?php echo $_smarty_tpl->getConfigVariable('products_tags');?>
</li><?php }?>
      <?php if (count($_smarty_tpl->tpl_vars['more_images']->value)>0) {?><li><?php echo $_smarty_tpl->getConfigVariable('more_images');?>
</li><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_products_media']->value)&&$_smarty_tpl->tpl_vars['MODULE_products_media']->value!='') {?><li><?php echo $_smarty_tpl->getConfigVariable('products_media');?>
</li><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_products_reviews']->value)&&$_smarty_tpl->tpl_vars['MODULE_products_reviews']->value!='') {?><li><?php echo $_smarty_tpl->getConfigVariable('products_reviews');?>
</li><?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['MODULE_cross_selling']->value)&&$_smarty_tpl->tpl_vars['MODULE_cross_selling']->value!='')||(isset($_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value)&&$_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value!='')) {?><li><?php echo $_smarty_tpl->getConfigVariable('cross_selling');?>
</li><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_also_purchased']->value)&&$_smarty_tpl->tpl_vars['MODULE_also_purchased']->value!='') {?><li><?php echo $_smarty_tpl->getConfigVariable('also_purchased');?>
</li><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_products_category']->value)&&$_smarty_tpl->tpl_vars['MODULE_products_category']->value!='') {?><li><?php echo $_smarty_tpl->getConfigVariable('products_category');?>
</li><?php }?>
    </ul>
    <div class="resp-tabs-container">
      <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_DESCRIPTION']->value!='') {?><div class="pd_description"><h4 class="detailbox"><?php echo $_smarty_tpl->getConfigVariable('products_desc');?>
</h4><div itemprop="description"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_DESCRIPTION']->value;?>
</div></div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_product_tags']->value)&&$_smarty_tpl->tpl_vars['MODULE_product_tags']->value!='') {?><div><?php echo $_smarty_tpl->tpl_vars['MODULE_product_tags']->value;?>
</div><?php }?>
      <?php if (count($_smarty_tpl->tpl_vars['more_images']->value)>0) {?>
      <div class="cf">
        <?php  $_smarty_tpl->tpl_vars['more_images_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['more_images_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['more_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['more_images_data']->key => $_smarty_tpl->tpl_vars['more_images_data']->value) {
$_smarty_tpl->tpl_vars['more_images_data']->_loop = true;
?> 
          <div class="pd_small_image_tab">
            <a class="cbimages" title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value);?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['more_images_data']->value['PRODUCTS_IMAGE'],"info_images","popup_images");?>
"><img class="unveil" src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
css/images/loading.gif" data-src="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['more_images_data']->value['PRODUCTS_IMAGE'],"info_images","thumbnail_images");?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME']);?>
" /></a>
            <noscript><a title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value);?>
" href="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['more_images_data']->value['PRODUCTS_IMAGE'],"info_images","popup_images");?>
"><img src="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['more_images_data']->value['PRODUCTS_IMAGE'],"info_images","thumbnail_images");?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['module_data']->value['PRODUCTS_NAME']);?>
" /></a></noscript>
          </div>                          
        <?php } ?>
      </div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_products_media']->value)&&$_smarty_tpl->tpl_vars['MODULE_products_media']->value!='') {?><div><?php echo $_smarty_tpl->tpl_vars['MODULE_products_media']->value;?>
</div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_products_reviews']->value)&&$_smarty_tpl->tpl_vars['MODULE_products_reviews']->value!='') {?><div><?php echo $_smarty_tpl->tpl_vars['MODULE_products_reviews']->value;?>
</div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_cross_selling']->value)&&$_smarty_tpl->tpl_vars['MODULE_cross_selling']->value!=''||(isset($_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value)&&$_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value!='')) {?><div><?php if (isset($_smarty_tpl->tpl_vars['MODULE_cross_selling']->value)&&$_smarty_tpl->tpl_vars['MODULE_cross_selling']->value!='') {
echo $_smarty_tpl->tpl_vars['MODULE_cross_selling']->value;
}
if (isset($_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value)&&$_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value!='') {
echo $_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value;
}?></div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_also_purchased']->value)&&$_smarty_tpl->tpl_vars['MODULE_also_purchased']->value!='') {?><div><?php echo $_smarty_tpl->tpl_vars['MODULE_also_purchased']->value;?>
</div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['MODULE_products_category']->value)&&$_smarty_tpl->tpl_vars['MODULE_products_category']->value!='') {?><div><?php echo $_smarty_tpl->tpl_vars['MODULE_products_category']->value;?>
</div><?php }?>
    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_ADDED']->value!='') {?><p class="dateadded"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_ADDED']->value;?>
</p><?php }?>
  <?php echo $_smarty_tpl->tpl_vars['PRODUCT_NAVIGATOR']->value;?>

</div><?php }} ?>
