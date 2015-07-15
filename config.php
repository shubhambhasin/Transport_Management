<script src="library/charts/js/fusioncharts.js"></script>
<?php

define('URL', 'http://localhost:81/transport/');

define('CSS_URL', URL .'css/');

define('JS_URL', URL . 'js/');

define('LIBRARY_URL', URL . 'library/');

define('ROOT','E:/xampp/htdocs/transport');

define('DS','/');



/*['database_type'=>'mysql','database_name' => 'transport',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '','charset'=>'utf8','port'=>3306,'option'=>[PDO::ATTR_CASE => PDO::CASE_NATURAL]]*/
	
function __autoload($className) {
    if (file_exists(ROOT . DS . 'helper' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'helper' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'models' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'models' . DS . strtolower($className) . '.php');
    } else if (file_exists(ROOT . DS . 'library' . DS . strtolower($className) . '.php')) {
        require_once(ROOT . DS . 'library' . DS . strtolower($className) . '.php');
    }else if (file_exists(ROOT . DS . 'library' . DS . 'charts' . DS . strtolower($className) . '.php')) {
       require_once(ROOT . DS . 'library' . DS . 'charts' . DS . strtolower($className) . '.php');
    } else {
        /* Error Generation Code Here */
		echo "not found";
    }
}

?>