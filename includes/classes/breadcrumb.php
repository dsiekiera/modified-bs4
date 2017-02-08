<?php
/* -----------------------------------------------------------------------------------------
$Id: breadcrumb.php 899 2005-04-29 02:40:57Z hhgag $   

modified eCommerce Shopsoftware
http://www.modified-shop.org

Copyright (c) 2009 - 2013 [www.modified-shop.org]
-----------------------------------------------------------------------------------------
based on: 
(c) 2000-2001 The Exchange Project  (earlier name of osCommerce)
(c) 2002-2003 osCommerce(breadcrumb.php,v 1.3 2003/02/11); www.oscommerce.com 
(c) 2003	 nextcommerce (breadcrumb.php,v 1.5 2003/08/13); www.nextcommerce.org
(c) 2003 XT-Commerce

Released under the GNU General Public License 
---------------------------------------------------------------------------------------*/

class breadcrumb {
    var $_trail;

    function __construct() {
        $this->reset();
    }


    function reset() {
        $this->_trail = array();
    }


    function remove_last() {
        array_pop($this->_trail);
    }


    function remove($title) {
        for ($i=0, $n=sizeof($this->_trail); $i<$n; $i++) {
            if ($this->_trail[$i]['title'] == $title) {
                unset($this->_trail[$i]);
            }
        }
        $this->_trail = array_values($this->_trail);
    }


    function add($title, $link = '') {
        global $PHP_SELF, $request_type;

        $current_link = xtc_href_link(basename($PHP_SELF), xtc_get_all_get_params(array('cat', 'filter_id', 'filter', 'show', 'page')), $request_type);

        if ($link == $current_link) {
            $link = '';
        }
        $this->_trail[] = array('title' => $title, 'link' => $link);
    }


    function trail($separator = ' - ') {

        $trail_string = '<div id="breadcrumb" itemprop="breadcrumb" class="hidden-xs-down">';
        $trail_string .= '<ol itemscope itemtype="http://schema.org/BreadcrumbList" class="breadcrumb">';

        for ($i=0, $n=sizeof($this->_trail); $i<$n; $i++) {
            $trail_string .= '<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumb-item'.((isset($this->_trail[$i]['link']) && xtc_not_null($this->_trail[$i]['link'])) ? '' : ' active').'">';

            if (isset($this->_trail[$i]['link']) && xtc_not_null($this->_trail[$i]['link'])) {
                $trail_string .= '<a itemprop="url" href="' . $this->_trail[$i]['link'] . '"><span itemprop="title">' . $this->_trail[$i]['title'] . '</span></a>';

            } else {
                $trail_string .= '<span itemprop="item"><span itemprop="title">'.$this->_trail[$i]['title'].'</span></span>';
            }

            $trail_string .= '</li>';
        }

        $trail_string .= '</ol>';
        $trail_string .= '</div>';

        return $trail_string;
    }


    function econda() {
        $econda_string = '';

        for ($i=1, $n=sizeof($this->_trail); $i<$n; $i++) {
            $econda_string .= $this->_trail[$i]['title'];

            if (($i+1) < $n){
                $econda_string .= '/';
            }
        }

        return $econda_string;
    }

}