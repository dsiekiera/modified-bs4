<?php
  /* --------------------------------------------------------------
   $Id: header.php 10510 2016-12-16 07:16:22Z GTB $

   modified eCommerce Shopsoftware
   http://www.modified-shop.org

   Copyright (c) 2009 - 2013 [www.modified-shop.org]
   --------------------------------------------------------------
   based on:
   (c) 2000-2001 The Exchange Project
   (c) 2002-2003 osCommerce coding standards (a typical file) www.oscommerce.com
   (c) 2003 nextcommerce (start.php,1.5 2004/03/17); www.nextcommerce.org
   (c) 2006 XT-Commerce (start.php 1235 2005-09-21)

   Released under the GNU General Public License
   --------------------------------------------------------------*/

include('../includes/request_type.php');

defined('TEMPLATE_HTML_ENGINE') or define('TEMPLATE_HTML_ENGINE', 'xhtml');
?>
<!DOCTYPE html<?php echo ((TEMPLATE_HTML_ENGINE == 'xhtml') ? ' PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"' : ''); ?>>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset;?>" />
    <?php
    echo '<title>'.constant('TITLE_'.strtoupper(substr(basename($_SERVER['PHP_SELF']), 0, -4))).'</title>';
    if (basename($_SERVER['PHP_SELF']) == 'install_step6.php' || basename($_SERVER['PHP_SELF']) == 'install_step7.php') {
      require('includes/form_check.js.php');
    }
    ?>
    <link rel="stylesheet" type="text/css" href="includes/css/stylesheet.css" />
    <link rel="icon" type="image/png" href="http<?php echo (($request_type == 'SSL') ? 's://' : '://').$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/favicon.ico">
  </head>
  <body>