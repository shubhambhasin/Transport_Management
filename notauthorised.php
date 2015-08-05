<?php
require_once 'filehead.php';  //include filehead file
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
 $smarty->assign('username',$_SESSION['username']);
$smarty->display('userheader.tpl'); 		//including userheader
$smarty->display('notauthorised.tpl');  //including notauthorised page
$smarty->display('footer.tpl');   //includind footer
?>