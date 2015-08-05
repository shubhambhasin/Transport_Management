<?php
require_once 'filehead.php';  //include filehead file
if(isset($_SESSION['userid']))
{
if(($_SESSION['type']==0)||(($_SESSION['type']==1) && ($_SESSION['staffid']==1)))		//only admin and accounts staff allowed
{
 require_once 'helper/Validation.php';  //email validation
 $smarty->assign('CSS_URL', CSS_URL);
 $smarty->display('header.tpl');
 $smarty->assign('username',$_SESSION['username']);
 $smarty->display('userheader.tpl');
 if(isset($_POST['tyre']))
 	{
		$no_of_tyre=$_POST['no_of_tyres'];
		$smarty->assign('number',$no_of_tyre);	
	}
if(isset($_POST['add_tyre_expense']))
	{
		echo $_POST['no_of_tyres'].'tyre expense added';
	}
   if(isset($_POST['Proceed']))
  	{   
		$smarty->assign('expense_type',$_POST['expense_type']);
		if(($_POST['expense_type']=='tyres'))
		   {     
		   		$tyre=1;
				$smarty->assign('tyre',$tyre);
			} else
				{	
					$tyre=2;
					$smarty->assign('tyre',$tyre);
				}
		/*$expense = new vehicle_account();
		$vehicle_account->add($_SESSION['userid'],$type,$_POST['cost']);*/
	}	
  $smarty->display('newexpense.tpl');
  $smarty->display('footer.tpl');   //include footer file
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>


