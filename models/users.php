<?php
require_once './config.php';
//require_once './helper/databaseCon.php';
class users extends model
{
  	 public function add($username,$name,$contact,$req)
	 {
			               $this->database->insert('users', [
							'username' =>$username,
							'name' => $name,
							'contact' => $contact,
							'req' => $req ]);
	  }
}
?>