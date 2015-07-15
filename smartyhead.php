<?php
require_once 'library/smarty-2.6.29/libs/Smarty.class.php';
$smarty=new smarty();			//new smarty object
$smarty->template_dir = 'views';		//template files folder
$smarty->compile_dir = 'tmp';
?>