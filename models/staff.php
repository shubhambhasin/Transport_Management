<?php
require_once './config.php';
class staff extends model
	{
		public function add($userid,$email,$username,$contact,$address,$name,$department,$salary)   //add record in staff table
		 	{
				 		$this->database->insert('staff',[ 
							'userid' => $userid,
							'username' =>$username,
							'name'=>$name,
							'staffid' => $department,
							'email'=>$email,
							'contact'=>$contact,
							'address'=>$address,
							'salary' => $salary,
							'join_date' => date('d/m/Y')]);
							
			}		 
			
		public function get($attribute,$username)   //to get a record value
		 	{
				 		return $this->database->get('staff', $attribute ,['username' => $username]);
							
			}		
			
	}
	
?>