<?php
session_start();
if(($_SESSION['type']==0) || (($_SESSION['type']==1) && ($_SESSION['staffid']==1)))			//only admin and accounts staff allowed
{
 require_once 'config.php';    //include config file
 require_once 'smartyhead.php';   //include smarty lib
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
echo "you cant";
?>


