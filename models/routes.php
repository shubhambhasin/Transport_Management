<?php
require_once './config.php';
class routes extends model
	{
		public function add($city1,$city2,$expense,$income)  //add a new route
		 	{
				 		return ($id = $this->database->insert('routes',[ 
							'city1'=>$city1,
							'city2' => $city2,
							'expense' => $expense,
							'income' => $income,
							'profit' => $income - $expense]));
							
			}	
			
		public function getAll()
			{
				return $this->database->select('routes',['city1','city2','expense','income','profit']);
			}		
		
		public function get($attribute,$id)
			{
				if($attribute=='*')
					return $this->database->get('routes',['city1','city2','expense','income'],['id'=>$id]);
				else
					return $this->database->get('routes',[$attribute],['id'=>$id]);
			}
		
		public function remove($id)
			{
				$this->database->delete('routes',['id'=>$id]);
			}
		
		public function update($routeId,$city1,$city2,$expense,$income)
			{
				 $this->database->update('routes', [
							'city1' =>$city1,
							'city2' => $city2,
							'expense' => $expense,
							'income' => $income,
							'profit' => $income - $expense], ['id' => $routeId]); 
			}
			
		public function getCost($from,$to)
			{	
				$cost = $this->database->get('routes',['income'],['AND'=>['city1'=>$to,'city2'=>$from]]);
				if(!($cost))
				$cost = $this->database->get('routes',['income'],['AND'=>['city1'=>$from,'city2'=>$to]]);
				return $cost['income'];			
			}
			
	}
	
?>