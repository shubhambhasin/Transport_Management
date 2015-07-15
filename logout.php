<?php
session_start();
include 'config.php';
session_unset();		//unsetting and destrying session
session_destroy();

header('Location:'.URL.'index.php');