<?php
require_once 'config.php';		//include config file
require_once 'smartyhead.php';  //include smarty lib
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
$smarty->display('noaccess.tpl');  //including staff page
$smarty->display('footer.tpl');   //includind footer

?>