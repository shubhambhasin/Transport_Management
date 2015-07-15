v<?php
session_start();
if(($_SESSION['type']==0))	//only admin  allowed
{
 require_once 'config.php';    //include config file
 require_once 'smartyhead.php';   //include smarty lib
 require_once 'helper/Validation.php';  //email validation
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->display('header.tpl');
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');
 if(isset($_POST['submit'])) 
  {      
  	if( ($_POST['vehicleid']!=NULL) && ($_POST['cost']!=NULL))
		{
	$vehicle= new buys();
	$vehicle->add(0,$_POST['vehicleid']);
	$expense=new expenses();
	$expense->add(2,0,$_POST['vehicleid'],$_POST['cost']);
	echo "MESSAGE : vehicle added";	
		}else
  			{
		echo "OOPS !! You missed thing";
			}
  } 
 if((isset($_POST['remove'])) && isset($_POST['id']) )
	{
		$vehicle= new buys();
		$vehicleId=$_POST['id'];
		 $allVehicles = $vehicle->get();
	    $vehicle->remove($allVehicles[$vehicleId]['reg_no']);
		echo "MESSAGE: vehicle removed";
	}
if((isset($_POST['edit'])) && isset($_POST['id']) )
	{	
		$edit=1;
		$smarty->assign('edit',$edit);
	}
if(isset($_POST['done_edit']))
	{	
		$vehicle= new buys();
	 	$vehicleId=$_POST['id'];
		 $allVehicles = $vehicle->get();
	    $vehicle->edit($allVehicles[$vehicleId]['reg_no'],$_POST['new_id']);
		$expense=new expenses();
		$expense->edit($allVehicles[$vehicleId]['reg_no'],$_POST['new_id']);
		echo "MESSAGE: vehicle id edited";
	}
  $vehicle=new buys();
  $allVehicles = $vehicle->get();
   $smarty->assign('allVehicles',$allVehicles);
  $smarty->display('newvehicle.tpl');
  $smarty->display('footer.tpl');   //include footer file
}
else
echo "you cant";
?>


