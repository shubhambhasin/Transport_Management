<?php
require_once './config.php';
//require_once './helper/databaseCon.php';
class orders extends model
{
  	 public function add($client_id,$from,$to,$weight,$payStatus)
		 {                     
			 $t=strtotime("+3 Days");
									   $this->database->insert('orders',[
									'client_id' =>$client_id,
									'source' => $from,
									'destination' => $to,
									'order_date' => date('d/m/Y'),
									'last_date' => date('d/m/Y',$t),
									'weight' => $weight,
									'assigned_person_id' => 'abc',
									'pay_status' => $payStatus,
									'order_status'=> 0
									 ]);
			echo "will be done by " . date("d/m/y",$t);
		  }
	  
	  public function showPending()
	  	{
				return $this->database->select('orders',['orderid','client_id','source','destination','order_date','last_date','position','weight','assigned_person_id','pay_status'],['order_status'=>0]);
		}
		
	 public function showDone()
	  	{
				return $this->database->select('orders',['orderid','client_id','source','destination','order_date','last_date','position','weight','assigned_person_id','pay_status'],['order_status'=>1]);
		}
}
?>