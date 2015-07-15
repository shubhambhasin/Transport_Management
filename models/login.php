<?php
require_once './config.php';
//require_once './helper/databaseCon.php';
class login extends model
{
	public function add($username,$password,$type)
	 {
			               $this->database->insert('login', [
							'username' =>$username,
							'password' => $password,
							'type' => $type,
							'status' => 1 ]);
	  }
	  
	public function get($attribute,$username)			//to get a record value
	 {
		$value = $this->database->get('login', $attribute, ['username' => $username]);
	    return $value;
	 }
	  
   public function checkAuthentication($username,$password)		//to check if user is authenticated
	 {		 
		$AllowUser = $this->database->get('login', 'username', [ 'AND' => [ 'username' => $username , 'password' => [$password]]]);
	   if($AllowUser)
			 return true;
		else
		     return false;
	 }
	 
	public function update($attribute,$value,$userid)			//updating an attribute
	 {
			               $this->database->update('login', [
							'last_login' => $value], ['userid'=>$userid]);
	  }
	 
	 
}
?>