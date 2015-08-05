<?php
require_once 'filehead.php';  //include filehead file
if(isset($_SESSION['userid']))
{
if($_SESSION['type']==0)
{
$smarty->assign('username',$_SESSION['username']);
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
$smarty->display('userheader.tpl'); 
$smarty->display('adminhp.tpl');  //including admin page
$smarty->display('footer.tpl');   //includind footer
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>