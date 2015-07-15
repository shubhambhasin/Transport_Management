<?php
require_once './config.php';
class expenses extends model
	{
		public function add($title,$type,$id,$cost)  //add expense in expenses table
		 	{
				 		$this->database->insert('expenses',[ 
							'expense_title'=>$title,
							'link_type' => $type,
							'link_id'=>	$id,
							'expense_date' => date('d/m/Y'),
							'value'=> $cost	]);
											
			}	
			
		public function edit($prev_id,$new_id)
			{
				 $this->database->update('expenses', [
							'link_id' =>$new_id], ['link_id'=>$prev_id]); 
			}
			
		public function getAll($attribute,$order)
	  		{
				if($attribute=='*')
				return $this->database->select('expenses',"*",["ORDER" => "$order DESC"]);
				else
				return $this->database->select('expenses',[$attribute],["ORDER" => $order]);
			}
		
		public function getA()
	  		{
					return $this->database->select('expenses',['expense_date(label)','value']);
			}
		
		
		 public function getTotalExpense()
		 	{	
				$total_expense=0;
				$allExpense=$this->database->select('expenses',['value']);
				foreach ($allExpense as $key => $value)
					{
						foreach ($value as $index => $cost)
							$total_expense+=$cost;
					}
				return $total_expense;			
				}
				
		public function getExpenseBetween($from,$to)
	  		{	
				return $this->database->select('expenses',['id','expense_title','link_type','link_id',		'expense_date','value'],['AND'=>['expense_date[>=]'=>$from,'expense_date[<=]'=>$to]]);
			}
			
		public function getExpenseOnlyBetween($from,$to)
	  		{	
				$total_expense=0;
				$allExpenseBetween=$this->database->select('expenses',['value'],['AND'=>['expense_date[>=]'=>$from,'expense_date[<=]'=>$to]]);
				foreach ($allExpenseBetween as $key => $value)
					{
						foreach ($value as $index => $cost)
							$total_expense+=$cost;
					}
				return $total_expense;		
			}
			
		
	}
	
?>