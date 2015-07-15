<?php /* Smarty version 2.6.29, created on 2015-07-12 17:32:37
         compiled from neworder.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php if (! $this->_tpl_vars['proceed']): ?>
<form id="form1" action="neworder.php" method="post">
  <?php if ($this->_tpl_vars['allRoutes']): ?>
  <p><label for="textfield">From:</label>
  <select name='from'>
   <?php $_from = $this->_tpl_vars['allRoutes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['routes']):
?>
  	<?php $_from = $this->_tpl_vars['routes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribute'] => $this->_tpl_vars['route']):
?>
    <?php if ($this->_tpl_vars['attribute'] == 'city1' || $this->_tpl_vars['attribute'] == 'city2'): ?>
  	<option><?php echo $this->_tpl_vars['route']; ?>
</option>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
   <?php endforeach; endif; unset($_from); ?>
  </select></p>

  <p><label for="textfield2">To:</label>
   <select name='to'>
   <?php $_from = $this->_tpl_vars['allRoutes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['routes']):
?>
   <?php $_from = $this->_tpl_vars['routes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribute'] => $this->_tpl_vars['route']):
?>
    <?php if ($this->_tpl_vars['attribute'] == 'city1' || $this->_tpl_vars['attribute'] == 'city2'): ?>
  	<option><?php echo $this->_tpl_vars['route']; ?>
</option>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php endforeach; endif; unset($_from); ?>
  </select></p>
  <?php endif; ?>
 <p><label for="textfield3">Weight:</label>
  <input type="number" name="weight"></p>
  <p><input type="submit" name="pay" value="Proceed"></p>
</form>
<?php endif; ?>
<?php if ($this->_tpl_vars['proceed']): ?>
TOTAL COST : <?php echo $this->_tpl_vars['totalCost']; ?>
<br>
<form id="form1" action="" method="post">
   <p><input type="submit" name="payNow" value="pay now"></p>
    <p><input type="submit" name="POD" value="on delivery"></p>
    <input type="hidden" name="from" value=<?php echo $this->_tpl_vars['from']; ?>
>
    <input type="hidden" name="to" value=<?php echo $this->_tpl_vars['to']; ?>
>
    <input type="hidden" name="weight" value=<?php echo $this->_tpl_vars['weight']; ?>
>
</form>
<?php endif; ?>
</body>
</html>