<?php
require_once './config.php';
class incomes extends model
	{
		public function add($title,$type,$id,$cost)  //add expense in incomes table
		 	{
				 		$this->database->insert('incomes',[ 
							'income_title'=>$title,
							'link_type' => $type,
							'link_id'=>	$id,
							'income_date' => date('d/m/Y'),
							'value'=> $cost	]);
											
			}	
			
		public function edit($prev_id,$new_id)
			{
				 $this->database->update('incomes', [
							'link_id' =>$new_id], ['link_id'=>$prev_id]); 
			}
			
		 public function getAll()
	  	{
				return $this->database->select('incomes',['id','income_title','link_type','link_id','income_date','value']);
		}
		
		public function getTotalIncome()
		 	{	
				$total_income=0;
				$allIncome=$this->database->select('incomes',['value']);
				foreach ($allIncome as $key => $value)
					{
						foreach ($value as $index => $cost)
							$total_income+=$cost;
					}
				return $total_income;			
				}
		
		public function getIncomeBetween($from,$to)
	  		{	
				return $this->database->select('incomes',['id','income_title','link_type','link_id',		'income_date','value'],['AND'=>['income_date[>=]'=>$from,'income_date[<=]'=>$to]]);
			}
			
		public function getIncomeOnlyBetween($from,$to)
	  		{	
				$total_income=0;
				$allIncomeBetween=$this->database->select('incomes',['value'],['AND'=>['expense_date[>=]'=>$from,'expense_date[<=]'=>$to]]);
				if(($allIncomeBetween)!=NULL)
					foreach ($allIncomeBetween as $key => $value)
						{
							foreach ($value as $index => $cost)
								$total_income+=$cost;
						}
				return $total_income;		
			}
				
	}
	
?>