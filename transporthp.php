<?php
require_once 'config.php';  //include config file
session_start();
if(isset($_SESSION['userid']))
{
if(($_SESSION['type']==0)||(($_SESSION['type']==1) && ($_SESSION['staffid']==0)))		//only admin and transport staff allowed
{
require_once 'smartyhead.php';  //include smarty lib
$smarty->assign('username',$_SESSION['username']);
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
$smarty->display('userheader.tpl'); 
$smarty->display('transporthp.tpl');  //including staff page
$smarty->display('footer.tpl');   //includind footer
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>