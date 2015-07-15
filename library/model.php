<?php
require_once './config.php';
class model
	{
		public $database;
		public function __construct()
		{
				$this->database=new medoo(['database_type'=>'mysql','database_name' => 'transport',
	                   'server' => 'localhost',
                    	'username' => 'root',
	                    'password' => '','charset'=>'utf8','port'=>3306,'option'=>[PDO::ATTR_CASE => PDO::                         CASE_NATURAL]]);
		}
	}
?>