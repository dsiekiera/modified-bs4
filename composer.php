<?php

define('REAL_PATH', '/usr/www/users/macosi/dev.habbishaw.de/');

switch($_GET['action']){
	case 'path':
		echo '<pre>';
		print_r(realpath(__FILE__));
		echo '</pre>';
		break;
		
	case 'get':
		putenv("COMPOSER_HOME=".REAL_PATH);
		
		echo '<pre>';
		print_r(shell_exec("curl -sS https://getcomposer.org/installer | php"));
		echo '</pre>';
		
		break;
		
	case 'install':
		putenv("COMPOSER_HOME=".REAL_PATH);
		
		echo '<pre>';
		print_r(shell_exec("php composer.phar install"));
		echo '</pre>';
		
		break;
		
	case 'update':
		putenv("COMPOSER_HOME=".REAL_PATH);
		
		echo '<pre>';
		print_r(shell_exec("php composer.phar update"));
		echo '</pre>';
		
		break;
}
