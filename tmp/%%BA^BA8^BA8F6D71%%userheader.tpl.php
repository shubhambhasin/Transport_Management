<?php /* Smarty version 2.6.29, created on 2015-07-07 16:51:41
         compiled from userheader.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="<?php echo $this->_tpl_vars['CSS_URL']; ?>
userhead.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="userheader">
<div>
<h4>hello <?php echo $this->_tpl_vars['username']; ?>
</h4>
</div>
<div id="left">
<form action="logout.php" method="post">
<input type="submit" value="logout" name="logout">
</form>
</div>
</div>
</body>
</html>