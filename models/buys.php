<?php
require_once './config.php';
class buys extends model
	{
		public function add($type,$vehicle_id)  //add vehicle in vehicle_alloy table
		 	{
				 		$this->database->insert('buys',[ 
							'type'=>$type,
							'reg_no' => $vehicle_id,
							'buy_date' => date('d/m/Y')]);
							
			}	
			
		public function get()
			{
				return $this->database->select('buys',['reg_no','buy_date'],['type'=>0]);
			}		
		
		public function remove($id)
			{
				$this->database->delete('buys',['reg_no' => $id]);
			}
		
		public function edit($prev_id,$new_id)
			{
				 $this->database->update('buys', [
							'reg_no' =>$new_id], ['reg_no'=>$prev_id]); 
			}
			
	}
	
?>