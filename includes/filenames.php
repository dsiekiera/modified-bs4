<?php
/* -----------------------------------------------------------------------------------------
   $Id: filenames.php 1295 2005-10-08 16:59:56Z mz $   

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   based on: 
   (c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
   (c) 2002-2003 osCommerce(filenames.php,v 1.3 2003/05/25); www.oscommerce.com 
   (c) 2003  nextcommerce (filenames.php,v 1.21 2003/08/25); www.nextcommerce.org 

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/

//compatibility for modified eCommerce Shopsoftware 1.06 files
if (!defined('DIR_ADMIN')) {
  define('DIR_ADMIN','admin/');
}

// define the filenames used in the project
define('FILENAME_ACCOUNT', 'account.php');
define('FILENAME_ACCOUNT_EDIT', 'account_edit.php');
define('FILENAME_ACCOUNT_HISTORY', 'account_history.php');
define('FILENAME_ACCOUNT_HISTORY_INFO', 'account_history_info.php');
define('FILENAME_ACCOUNT_PASSWORD', 'account_password.php');
define('FILENAME_ACCOUNT_DELETE', 'account_delete.php');
define('FILENAME_ADDRESS_BOOK', 'address_book.php');
define('FILENAME_ADDRESS_BOOK_PROCESS', 'address_book_process.php');
define('FILENAME_ADVANCED_SEARCH', 'advanced_search.php');
define('FILENAME_ADVANCED_SEARCH_RESULT', 'advanced_search_result.php');
define('FILENAME_ALSO_PURCHASED_PRODUCTS', 'also_purchased_products.php');
define('FILENAME_CHECKOUT_CONFIRMATION', 'checkout_confirmation.php');
define('FILENAME_CHECKOUT_PAYMENT', 'checkout_payment.php');
define('FILENAME_CHECKOUT_PAYMENT_ADDRESS', 'checkout_payment_address.php');
define('FILENAME_CHECKOUT_PROCESS', 'checkout_process.php');
define('FILENAME_CHECKOUT_SHIPPING', 'checkout_shipping.php');
define('FILENAME_CHECKOUT_SHIPPING_ADDRESS', 'checkout_shipping_address.php');
define('FILENAME_CHECKOUT_SUCCESS', 'checkout_success.php');
define('FILENAME_COOKIE_USAGE', 'cookie_usage.php');
define('FILENAME_CUSTOMERS',DIR_ADMIN.'customers.php');
define('FILENAME_CREATE_ACCOUNT', 'create_account.php');
define('FILENAME_DEFAULT', 'index.php');
define('FILENAME_DOWNLOAD', 'download.php');
define('FILENAME_NEW_PRODUCTS', 'new_products.php');
define('FILENAME_LOGIN', 'login.php');
define('FILENAME_LOGOFF', 'logoff.php');
define('FILENAME_NEWSLETTER', 'newsletter.php');
define('FILENAME_POPUP_SEARCH_HELP', 'popup_search_help.php');
define('FILENAME_PRODUCT_INFO', 'product_info.php');
define('FILENAME_PRODUCT_LISTING', 'product_listing.php');
define('FILENAME_PRODUCT_REVIEWS', 'product_reviews.php');
define('FILENAME_PRODUCT_REVIEWS_INFO', 'product_reviews_info.php');
define('FILENAME_PRODUCT_REVIEWS_WRITE', 'product_reviews_write.php');
define('FILENAME_PRODUCTS_NEW', 'products_new.php');
define('FILENAME_REDIRECT', 'redirect.php');
define('FILENAME_REVIEWS', 'reviews.php');
define('FILENAME_SHIPPING', 'shipping.php');
define('FILENAME_SHOPPING_CART', 'shopping_cart.php');
define('FILENAME_START', DIR_ADMIN.'start.php');
define('FILENAME_SPECIALS', 'specials.php');
define('FILENAME_SSL_CHECK', 'ssl_check.php');
define('FILENAME_ORDERS', DIR_ADMIN.'orders.php');
define('FILENAME_METATAGS', 'metatags.php');
define('FILENAME_MINIMUM_ORDER', 'reviews.php');
define('FILENAME_PRODUCTS_MEDIA', 'products_media.php');
define('FILENAME_PASSWORD_DOUBLE_OPT', 'password_double_opt.php');
define('FILENAME_CREATE_GUEST_ACCOUNT', 'create_guest_account.php');
define('FILENAME_DISPLAY_VVCODES', 'display_vvcodes.php');
define('FILENAME_CART_ACTIONS', 'cart_actions.php');
define('FILENAME_CROSS_SELLING', 'cross_selling.php');
define('FILENAME_GV_FAQ', 'gv_faq.php');
define('FILENAME_GV_REDEEM', 'gv_redeem.php');
define('FILENAME_GV_REDEEM_PROCESS', 'gv_redeem_process.php');
define('FILENAME_GV_SEND', 'gv_send.php');
define('FILENAME_GV_SEND_PROCESS', 'gv_send_process.php');
define('FILENAME_PRODUCT_LISTING_COL', 'product_listing_col.php');
define('FILENAME_POPUP_COUPON_HELP', 'popup_coupon_help.php');
define('FILENAME_POPUP_CONTENT', 'popup_content.php');
define('FILENAME_EDIT_PRODUCTS', DIR_ADMIN.'categories.php');
define('FILENAME_GRADUATED_PRICE', 'graduated_prices.php');
define('FILENAME_PRINT_PRODUCT_INFO', 'print_product_info.php');
define('FILENAME_PRINT_ORDER', 'print_order.php');
define('FILENAME_ERROR_HANDLER', 'error_handler.php');
define('FILENAME_CONTENT', 'shop_content.php');
define('FILENAME_BANNER', 'banners.php');
define('FILENAME_FINDOLOGIC', 'findologic.php');
define('FILENAME_WISHLIST', 'wishlist.php');
define('FILENAME_ACCOUNT_CHECKOUT_EXPRESS', 'account_checkout_express.php');
define('FILENAME_CHECKOUT_PAYMENT_IFRAME', 'checkout_payment_iframe.php');

require_once(DIR_FS_INC.'auto_include.inc.php');
foreach(auto_include(DIR_FS_CATALOG.'includes/extra/filenames/','php') as $file) require ($file);
?>
