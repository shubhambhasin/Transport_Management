<?php
session_start();
if(($_SESSION['type']==0)||(($_SESSION['type']==1) && ($_SESSION['staffid']==0)))		//only admin and transport staff allowed
{
require_once 'config.php';  //include config file
require_once 'smartyhead.php';  //include smarty lib
$smarty->assign('username',$_SESSION['username']);
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
$smarty->display('userheader.tpl'); 
$smarty->display('transporthp.tpl');  //including staff page
$smarty->display('footer.tpl');   //includind footer
}
else
echo "YOU CANT";
?>