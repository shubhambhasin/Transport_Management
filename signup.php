<?php
require_once 'config.php';   // Include configuration 
require_once 'smartyhead.php'; //include smarty lib
include 'helper/Validation.php';  // include helper 
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');    //including header
if (isset($_POST['submit']))
 {
	               		
	if(($valid1->IsValidateemail($_POST['email'])) && ($_POST['username']!=NULL) && ($_POST['password']!=NULL) && ($_POST['contact']!=NULL) && ($_POST['req']!=NULL))
	{        
	                                           //if valid and complete
		$login=new login() ;
		$login-> add($_POST['username'] , $_POST['password'],2);    //adding data to login table
		$users=new users();
		$users->add($_POST['username'],$_POST['name'],$_POST['contact'],$_POST['req']);  //addding data to users table
		session_start();												//starting and setting session
		$_SESSION['userid']=$login->getId($_POST['username']);
		$_SESSION['username']=$_POST['username'];
		$_SESSION['type']=2;
		$date=date("d-m-y  h:i:sa");
		$_SESSION['last_login']=strtotime($date);
		$login->update('last_login',$_SESSION['last_login'],$_SESSION['userid']);
		header('Location:'.URL.'userhp.php');					//relocating to users homepage
	}	else	{
					echo "FILL COMPLETE INFO PLEASE";
				}
 }
$smarty->display('signup.tpl');   //including signup page
$smarty->display('footer.tpl');    //including footers
?>