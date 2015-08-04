<?php
require_once 'config.php';		//include config file
session_start();
require_once 'smartyhead.php';  //include smarty lib
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
 $smarty->assign('username',$_SESSION['username']);
$smarty->display('userheader.tpl'); 		//including userheader
$smarty->display('notauthorised.tpl');  //including notauthorised page
$smarty->display('footer.tpl');   //includind footer
?>