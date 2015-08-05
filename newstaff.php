<?php
require_once 'filehead.php';  //include filehead file
if(isset($_SESSION['userid']))
{
if($_SESSION['type']==0)  	//verifying only admin allowed
{
require_once 'helper/Validation.php';  //email validation
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');
$smarty->assign('username',$_SESSION['username']);
$smarty->display('userheader.tpl');
if(isset($_POST['submit']))
{
	$valid=new validation();
	if(($valid->IsValidateemail($_POST['email'])) && ($_POST['username']!=NULL) && ($_POST['password']!=NULL) && ($_POST['contact']!=NULL) && ($_POST['address']!=NULL) && ($_POST['name']!=NULL) && ($_POST['department']!=NULL) && ($_POST['salary']!=NULL))			//check all fields filled
	{
		$login=new login();
		$login->add($_POST['username'],$_POST['password'],1);		//adding record to login table
		$userid=$login->getId($_POST['username']);
		$staff=new staff();
		$staff->add($userid,$_POST['email'],$_POST['username'],$_POST['contact'],$_POST['address'],$_POST['name'],										$_POST['department'],$_POST['salary']);		//adding record to staff table
	}  else 
		echo "COMPLETE INFORMATION NECCESSARY";
}
$smarty->display('newstaff.tpl');	//including newstaff template
$smarty->display('footer.tpl');   //include footer file
}
else
header('Location:' . URL . 'notauthorised.php');
}	else
header('Location:' . URL . 'noaccess.php');
?>