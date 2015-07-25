<?php
session_start();
require_once 'config.php';  //include config file
require_once 'smartyhead.php';  //include smarty lib
$smarty->assign('CSS_URL', CSS_URL);
$smarty->display('header.tpl');// include header file

if(isset($_SESSION['username']))		//if already logged in
{
	switch($_SESSION['type'])				//checking user type
	 {
	  case 0:
        {
   			header('Location:' . URL . 'adminhp.php');
			break;
  		}
	  case 1:
        {   
		    $staffId=new staff();
			$_SESSION['staffid']=$staffId->get('staffid',$_SESSION['username']);
				switch($_SESSION['staffid'])
					{
						case '0':
								{
									header('Location:'.URL.'transporthp.php');   
									break;  	
								}
						case '1':
								{
									header('Location:'.URL.'accounthp.php');   
									exit;  
									break;
								} 
						case '2':
								{
									header('Location:'.URL.'managinghp.php');    
									break; 	
								}
					}
					
			break;   
		} 
	  case 2:
        {
   			header('Location:'.URL.'userhp.php');     
			break;   
		}
	 }
} else {							//if no one was logged in
		if (isset($_POST['submit']))
			{
				if((isset($_POST['username'])) && (isset($_POST['password'])) && (($_POST['username'])!=NULL)&&(($_POST['password'])!=NULL))				//check all fields filled
					{   
   						 $login=new login();
						 if(($login->checkAuthentication($_POST['username'], $_POST['password'])))		//check authentication
       						{	
								$_SESSION['username']=$_POST['username'];		//setting session parameters
	     						 $_SESSION['type']=$login->get('type',$_POST['username']);
								 $_SESSION['userid']=$login->get('userid',$_POST['username']);
								 $time=date("d-m-Y  h:i:sa");
								 $_SESSION['last_login']=strtotime($time);
								 $login->update('last_login',$_SESSION['last_login'],$_SESSION['userid']);		//add last login
	     						 switch($_SESSION['type'])				//checking user type
									{
										 case 0:
										   {
												header('Location:' . URL . 'adminhp.php');
												break;
											}
										 case 1:
										   {
												 $staff=new staff();
												$_SESSION['staffid']=$staff->get('staffid',$_POST['username']);
												switch($_SESSION['staffid'])
													{
														case 0:
																{
																	header('Location:'.URL.'transporthp.php');   
																	break;  	
																}
														case 1:
																{
																	header('Location:'.URL.'accounthp.php');     
																	break;
																} 
														case 2:
																{
																	header('Location:'.URL.'managinghp.php');    
																	break; 	
																}
													}
					
												break;   
											} 
										case 2:
											{
												header('Location:'.URL.'userhp.php');     
												break;   
											}
									}
							}else	{
											echo "MESSAGE : Wrong info..please enter again";
									}
						} else {
									echo "MESSAGE: Incomplete login information..please enter";
								}
					}
			

$smarty->display('index.tpl');  //include 'index.tpl';
$smarty->display('footer.tpl');  //include footer
	}
?>