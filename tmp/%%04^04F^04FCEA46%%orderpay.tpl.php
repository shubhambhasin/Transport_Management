<?php /* Smarty version 2.6.29, created on 2015-07-09 16:37:15
         compiled from orderpay.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
FROM : <?php echo $this->_tpl_vars['from']; ?>
<br>
TO :   <?php echo $this->_tpl_vars['to']; ?>
<br>
TOTAL COST : <?php echo $this->_tpl_vars['totalCost']; ?>
<br>
<form id="form1" action="" method="post">
   <p><input type="submit" name="payNow" value="pay now"></p>
    <p><input type="submit" name="POD" value="on delivery"></p>
</form>
</body>
</html>