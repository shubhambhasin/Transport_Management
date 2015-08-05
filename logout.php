<?php
require_once 'filehead.php';  //include filehead file
session_unset();		//unsetting and destrying session
session_destroy();
header('Location:'.URL.'index.php');