<?php
require_once 'filehead.php';  //include filehead file
session_start();
if(isset($_SESSION['userid']))
{
if($_SESSION['type']==2)
{
 require_once 'helper/Validation.php';  //email validation
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->display('header.tpl');			//header file
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');   //user header file
if(isset($_POST['pay']))
	{
		if(($_POST['from']!=NULL)&&($_POST['to']!=NULL)&&($_POST['weight']!=NULL))
		{
			if(($_POST['from'])==($_POST['to']))
			{
				echo 'MESSAGE...source and destination cannot be same';	
			} else
				{	
					$weight= $_POST['weight'];
					$route=new routes();
					$cost = $route->getCost($_POST['from'],$_POST['to']);
					$totalCost = ($cost)*($weight);
					$smarty->assign('totalCost',$totalCost); 
					$smarty->assign('to',$_POST['to']);
					$smarty->assign('from',$_POST['from']);
					$proceed=1;
					$smarty->assign('from',$_POST['from']);
					$smarty->assign('to',$_POST['to']);
					$smarty->assign('weight',$_POST['weight']);
					 $smarty->assign('proceed',$proceed);
				}
		}  else 
		    {
			echo "COMPLETE INFORMATION NECCESSARY";
  			}
	}

  if(isset($_POST['payNow']))
  {
	  $order=new orders();
		$order->add($_SESSION['userid'],$_POST['from'],$_POST['to'],$_POST['weight'],0);
	echo "thankyou";
    } 

 if(isset($_POST['POD']))
  {
	echo "thankyou";
	$order=new orders();
		$order->add($_SESSION['userid'],$_POST['from'],$_POST['to'],$_POST['weight'],1);
    }  


	$route= new routes();
	$allRoutes=$route->getAll();
$smarty->assign('allRoutes',$allRoutes);
 $smarty->display('neworder.tpl'); //include neworder template
 $smarty->display('footer.tpl');   //include footer file
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>