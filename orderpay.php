<?php
session_start();
if($_SESSION['type']==2)
{
 require_once 'config.php';    //include config file
 require_once 'smartyhead.php';   //include smarty lib
 require_once 'helper/Validation.php';  //email validation
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->display('header.tpl');
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');
 $flag=1;
  if(isset($_POST['payNow']))
  {
	echo "pay then";
    }  else
 if(isset($_POST['POD']))
  {
	echo "delivery";
    }  



 if(isset($_POST['pay'])) 
  {      
	if(($_POST['from']!=NULL)&&($_POST['to']!=NULL)&&($_POST['weight']!=NULL))
		{
			$order=new orders();
			$order->add($_SESSION['userid'],$_POST['from'],$_POST['to'],$_POST['weight']);
			$totalCost=100*$_POST['weight'];
  			$smarty->assign('totalCost',$totalCost); 
 			$smarty->assign('to',$_POST['to']);
 			$smarty->assign('from',$_POST['from']);
			$flag=0;
	    	 $smarty->display('orderpay.tpl');
		}  else 
		    {
			echo "COMPLETE INFORMATION NECCESSARY";
  			}
		
  }
 if($flag)
 {
   $smarty->display('neworder.tpl');
 }
 $smarty->display('footer.tpl');   //include footer file
}
else
echo "you cant";
?>


