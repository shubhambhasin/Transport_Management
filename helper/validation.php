<?php

/*
* Validation class
*/
class validation {
	
	/*
	*
	*/	
    public function IsValidateemail($email) {
		
		if(filter_var($email,FILTER_VALIDATE_EMAIL))
			return 1;
			else 
			return 0;
	}
	
}
?>