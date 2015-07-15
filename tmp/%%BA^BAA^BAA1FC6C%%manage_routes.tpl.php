<?php /* Smarty version 2.6.29, created on 2015-07-12 16:51:53
         compiled from manage_routes.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action='manage_routes.php' method='post'>
<input type="submit" name="addRoute" value='Add Route'>
</form>
<form action='manage_routes.php' method="post">
<?php if ($this->_tpl_vars['add'] == 1): ?>
ADD NEW ROUTE :<br>
<table>
<tr>
	<td>city1 : </td>
    <td><input type="text" name="city1"></td>
</tr>
<tr>
	<td>city2 : </td>
    <td><input type="text" name="city2"></td>
</tr>
<tr>
	<td>Expense : </td>
    <td><input type="number" name="expense"></td>
</tr>
<tr>
	<td>Income : </td>
    <td><input type="number" name="income"></td>
</tr>
<tr>
	<center><td colspan="2"><input type="submit" name="add"></td></center>
</tr>
</table>
</form><br>
<?php endif; ?>
<?php if ($this->_tpl_vars['allRoutes']): ?>
<table width="677">
<tr>
<td width="133" ><strong>City 1</strong></td>
<td width="120"><strong>City 2</strong></td>
<td width="102" ><strong>Expense</strong></td>
<td width="90"><strong>Income</strong></td>
<td width="115" ><strong>Profit</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['allRoutes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['routes']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['routes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['index'] => $this->_tpl_vars['route']):
?>
    	<td><?php echo $this->_tpl_vars['route']; ?>
</td>
      <?php endforeach; endif; unset($_from); ?>
     <td width="133"><form type="hidden" action="manage_routes.php" method="post"><input type="hidden" name="id" value=<?php echo $this->_tpl_vars['k']; ?>
><input type="submit" name="remove" value="Remove"><input type="submit" name="edit" value="Edit">
 </form></td>
 </tr>
 <form type="hidden" action="manage_routes.php" method="post">
  <?php if ($this->_tpl_vars['edit'] == 1): ?>
  	<?php $_from = $this->_tpl_vars['selectedRoute']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['attribute'] => $this->_tpl_vars['value']):
?>
  	<p><?php echo $this->_tpl_vars['attribute']; ?>
 :<input type="text" name=<?php echo $this->_tpl_vars['attribute']; ?>
 value=<?php echo $this->_tpl_vars['value']; ?>
><input type="hidden" name="id" value=<?php echo $this->_tpl_vars['k']; ?>
></p>
    
    <?php endforeach; endif; unset($_from); ?><p><input type="submit" name="done_edit" value="Done"></p>   </form>
 <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>


</body>
</html>