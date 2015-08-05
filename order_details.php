<?php
require_once 'filehead.php';  //include filehead file
if(isset($_SESSION['userid']))
{
if(($_SESSION['type']==0) || (($_SESSION['type']==1) && ($_SESSION['staffid']==1)))			//only admin and accounts staff allowed
{
 require_once 'helper/Validation.php';  //email validation
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->display('header.tpl');
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');
  $orders= new orders();
  $pending=$orders->showPending();
  $completed=$orders->showDone();
  $smarty->assign('pending',$pending);
  $smarty->assign('completed',$completed);
  $smarty->display('order_details.tpl');
  $smarty->display('footer.tpl');   //include footer file
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>


