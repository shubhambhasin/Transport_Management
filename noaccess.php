<?php
require_once 'filehead.php';  //include filehead file
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');     //including headers
$smarty->display('noaccess.tpl');  //including noaccess page
$smarty->display('footer.tpl');   //includind footer
?>