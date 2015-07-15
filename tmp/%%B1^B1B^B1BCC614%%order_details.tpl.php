<?php /* Smarty version 2.6.29, created on 2015-07-09 16:36:28
         compiled from order_details.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<h3>Pending Orders</h3>
<table>
<tr>
<td width="80"><strong>Order Id</strong></td>
<td width="80"><strong>Client Id</strong></td>
<td width="120"><strong>Source</strong></td>
<td width="120"><strong>Destination</strong></td>
<td width="89"><strong>Order Date</strong></td>
<td width="89"><strong>Last Date</strong></td>
<td width="115"><strong>Position</strong></td>
<td width="63"><strong>Weight</strong></td>
<td width="140"><strong>Assigned Person ID</strong></td>
<td width="71"><strong>Pay Status</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['pending']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['orders']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>
  		 <td><?php echo $this->_tpl_vars['order']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<h3>Completed Orders</h3>
<table>
<tr>
<td width="80"><strong>Order Id</strong></td>
<td width="80"><strong>Client Id</strong></td>
<td width="120"><strong>Source</strong></td>
<td width="120"><strong>Destination</strong></td>
<td width="89"><strong>Order Date</strong></td>
<td width="89"><strong>Last Date</strong></td>
<td width="115"><strong>Position</strong></td>
<td width="63"><strong>Weight</strong></td>
<td width="140"><strong>Assigned Person ID</strong></td>
<td width="71"><strong>Pay Status</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['completed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['orders']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['orders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>
  		 <td><?php echo $this->_tpl_vars['order']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
</body>
</html>