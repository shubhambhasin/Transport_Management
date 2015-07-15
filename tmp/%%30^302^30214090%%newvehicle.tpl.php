<?php /* Smarty version 2.6.29, created on 2015-07-09 16:21:53
         compiled from newvehicle.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="newvehicle.php" method="post">
<p>Vehicle Reg. No. : <input type="text" name="vehicleid"></p>
<p>Price : <input type="number" name="cost">
<input type="submit" name="submit" value="Add"></p>
</form>
<table width="713">
<tr>
<td width="162"><strong>Vehicle Id</strong></td>
<td width="539" colspan="2"><strong>Buy Date</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['allVehicles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['vehicles']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['vehicles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vehicle']):
?>
  		 <td><?php echo $this->_tpl_vars['vehicle']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
     <td><form type="hidden" action="newvehicle.php" method="post"><input type="hidden" name="id" value=<?php echo $this->_tpl_vars['k']; ?>
><input type="submit" name="remove" value="Remove"><input type="submit" name="edit" value="Edit">
 	 <?php if ($this->_tpl_vars['edit'] == 1): ?>
 	New Reg. No. : <input type="text" name="new_id"><input type="hidden" name="id" value=<?php echo $this->_tpl_vars['k']; ?>
><input type="submit" name="done_edit" value="Done">
 	<?php endif; ?>
 		</form></td>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</tr>
</table>
</body>
</html>