<?php /* Smarty version 2.6.29, created on 2015-07-14 14:20:37
         compiled from accounts.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action='accounts.php' method='post'>
<input type="submit" name="show_all_expense" value="All Expenses">
<input type="submit" name="show_all_income" value="All Income">
<input type="submit" name="show_all_profit" value="Total Profit">
<input type="submit" name="show_total_expense" value="Total Expense">
<input type="submit" name="show_total_income" value="Total Income">
<input type="submit" name="show_total_income" value="Total Income"><br>
All Expenses between dates : <br>
FROM :<input type="text" name='ex_from'> To :<input type="text" name='ex_to'><input type="submit" name="getExpense" value="Show"><br>
All Income between dates : <br>
FROM :<input type="text" name='in_from'> To :<input type="text" name='in_to'><input type="submit" name="getIncome" value="Show"><br>
Profit between dates : <br>
FROM :<input type="text" name='pr_from'> To :<input type="text" name='pr_to'><input type="submit" name="getProfit" value="Show">
</form>
<?php if ($this->_tpl_vars['allExpenses']): ?>
<table>
<tr>
<form action='accounts.php' method='post'>
<td width="85"><input type="submit" name="orderById" value="id"></td>
<td width="99"><input type="submit" name="orderByTitle" value="title"></td>
<td width="108"><input type="submit" name="orderByType" value="type"></td>
<td width="117"><input type="submit" name="orderByLinkId" value='linkId'></td>
<td width="105"><input type="submit" name="orderByDate" value='date'></td>
<td width="88"><input type="submit" name="orderByValue" value='value'></td>
</form>
</tr>
<?php $_from = $this->_tpl_vars['allExpenses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['allExpense']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['allExpense']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['expense']):
?>
  		 <td><?php echo $this->_tpl_vars['expense']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['allIncomes']): ?>
<table>
<tr>
<td width="85"><strong>Income Id</strong></td>
<td width="99"><strong>Income Title</strong></td>
<td width="108"><strong>Link Type</strong></td>
<td width="117"><strong>Link Id</strong></td>
<td width="105"><strong>Income Date</strong></td>
<td width="88"><strong>Value</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['allIncomes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['allIncome']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['allIncome']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['income']):
?>
  		 <td><?php echo $this->_tpl_vars['income']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['totalProfit']): ?>
Total Profit : <?php echo $this->_tpl_vars['totalProfit']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['totalExpense']): ?>
Total Expense : <?php echo $this->_tpl_vars['totalExpense']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['totalIncome']): ?>
Total Income : <?php echo $this->_tpl_vars['totalIncome']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['expenses_bet']): ?>
<table>
<tr>
<td width="85"><strong>Expense Id</strong></td>
<td width="99"><strong>Expense Title</strong></td>
<td width="108"><strong>Link Type</strong></td>
<td width="117"><strong>Link Id</strong></td>
<td width="105"><strong>Expense Date</strong></td>
<td width="88"><strong>Value</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['expenses_bet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['expense_bet']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['expense_bet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['expense']):
?>
  		 <td><?php echo $this->_tpl_vars['expense']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['incomes_bet']): ?>
<table>
<tr>
<td width="85"><strong>Income Id</strong></td>
<td width="99"><strong>Income Title</strong></td>
<td width="108"><strong>Link Type</strong></td>
<td width="117"><strong>Link Id</strong></td>
<td width="105"><strong>Income Date</strong></td>
<td width="88"><strong>Value</strong></td>
</tr>
<?php $_from = $this->_tpl_vars['incomes_bet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['income_bet']):
?>
<tr>
	<?php $_from = $this->_tpl_vars['income_bet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['income']):
?>
  		 <td><?php echo $this->_tpl_vars['income']; ?>
</td>
     <?php endforeach; endif; unset($_from); ?>
 </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>

<?php if ($this->_tpl_vars['profit_bet']): ?>
Profit : <?php echo $this->_tpl_vars['profit_bet']; ?>

<?php endif; ?>

<div id="chart-1"><!-- Fusion Charts will render here--></div>


</body>
</html>