<?php
/* -----------------------------------------------------------------------------------------
	$Id: general.css.php 9969 2016-06-10 13:50:58Z Tomcraft $
	
	modified eCommerce Shopsoftware
	http://www.modified-shop.org
	
	Copyright (c) 2009 - 2013 [www.modified-shop.org]
	-----------------------------------------------------------------------------------------
	based on:
	(c) 2006 XT-Commerce
	
	Released under the GNU General Public License
---------------------------------------------------------------------------------------*/

use Leafo\ScssPhp\Server;
use Leafo\ScssPhp\Compiler;

define('DIR_TMPL', 'templates/'.CURRENT_TEMPLATE.'/');
define('DIR_TMPL_CSS', DIR_TMPL.'css/');
define('CSS_DEBUG', true);

if ($_SESSION['customers_status']['customers_status'] == '0') {
	echo '<link rel="stylesheet" property="stylesheet" href="'.DIR_WS_BASE.DIR_TMPL_CSS.'adminbar.css" type="text/css" media="screen" />'.PHP_EOL;
}

if(isset($_GET['css_debug'])){
	shell_exec("find ".DIR_FS_CATALOG.DIR_TMPL_CSS."cache/ -type f -name '*.css' -exec rm -rf '{}' \;");
}

switch(basename($PHP_SELF)){
	case FILENAME_PRODUCT_INFO: $_file = '-product-info'; break;
	case FILENAME_DEFAULT: $_file = '-category'; break;
	case FILENAME_CONTENT: $_file = '-content'; break;
	case FILENAME_ADVANCED_SEARCH_RESULT: $_file = '-search'; break;
	case FILENAME_SPECIALS: $_file = '-specials'; break;
	case FILENAME_PRODUCTS_NEW: $_file = '-new-products'; break;
	default: $_file = ''; break;
}

$_css_file_name = 'global'.$_file;

$_css_cache = DIR_FS_CATALOG.DIR_TMPL_CSS.'cache/'.$_css_file_name.'.css';

if(isset($_GET['css_debug']) || !file_exists($_css_cache)){
	
	$scss = new Compiler();
	
	if(CSS_DEBUG){
		$scss->setLineNumberStyle(Compiler::LINE_COMMENTS);
	} else {
		$scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
	}
	
	$scss->addImportPath(DIR_TMPL.'scss/');
	$_css = $scss->compile('@import "bootstrap.scss";');
	
	
	if(!empty($_file)){
		$_css .= $scss->compile('@import "__'.$_file.'.scss";');
	}
	file_put_contents($_css_cache, $_css);
}

echo '<link rel="stylesheet" href="'.DIR_TMPL_CSS.'cache/'.$_css_file_name.'.css" type="text/css" media="screen" />';
