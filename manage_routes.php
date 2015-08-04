<?php
 require_once 'config.php';    //include config file
session_start();
if(isset($_SESSION['userid']))
{
if(($_SESSION['type']==0) || (($_SESSION['type']==1) && ($_SESSION['staffid']==2)))			//only admin and manging staff allowedstaff allowed
{
 require_once 'smartyhead.php';   //include smarty lib
 require_once 'helper/Validation.php';  //email validation
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->display('header.tpl');
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');
 if(isset($_POST['add']))				//adding route
   	{
		if( ($_POST['city1']!=NULL) && ($_POST['city2']!=NULL) && ($_POST['expense']!=NULL) && ($_POST[																										'income']!=NULL) )
			{
				$route= new routes();
				$route->add( $_POST['city1'] , $_POST['city2'] , $_POST['expense'] , $_POST[																										'income'] );
				echo "ADDED";
			} else
				{
					echo "MESSAGE...enter complete info";
				}
	}
	
if(isset($_POST['addRoute']))
	{
		$add=1;
		$smarty->assign('add',$add);
	}
	
if((isset($_POST['remove'])) && isset($_POST['id']) )		//removing route
	{
		$route= new routes();
		$routeId=$_POST['id'];
		 $allRoutes = $route->getAll();
	    $route->remove($allRoutes[$routeId]['id']);
		echo "MESSAGE: route removed";
	}
	
if((isset($_POST['edit'])) && isset($_POST['id']) )		//selected to edit whole
	{	
		$edit=1;
		$route= new routes();
	 	$routeId=$_POST['id'];
		$allRoutes = $route->getAll();
		$selectedRoute = $route->get('*',$allRoutes[$routeId]['id']);
		$smarty->assign('edit',$edit);
		 $smarty->assign('selectedRoute', $selectedRoute);
	}
	
if(isset($_POST['done_edit']))		//editing whole record
	{	
		$route= new routes();
	 	$routeId=$_POST['id'];
		 $allRoutes = $route->getAll();
	    $route->update($allRoutes[$routeId]['id'],$_POST['city1'],$_POST['city2'],$_POST['expense'],$_POST['income']);
		echo "MESSAGE: route edited";
	}
	
	
	
$route= new routes();
$allRoutes=$route->getAll();
$smarty->assign('allRoutes',$allRoutes);
 $smarty->display('manage_routes.tpl');
 $smarty->display('footer.tpl');   //include footer file
}
else
echo "you cant";
}	else
header('Location:' . URL . 'noaccess.php');
?>


