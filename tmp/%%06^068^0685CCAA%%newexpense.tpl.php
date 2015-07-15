<?php /* Smarty version 2.6.29, created on 2015-07-09 16:58:04
         compiled from newexpense.tpl */ ?>
<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Untitled Document</title>
</head>

<body>
<form id='form1' action='newexpense.php' method='post'>
<p>
Expense type: <strong><?php echo $this->_tpl_vars['expense_type']; ?>
</strong>
 &nbsp &nbsp
<p>Repairs : 
<select name='expense_type'>
<option value='service'>Service</option>
<option value='fuel'>Fuel</option>
<option value='battery'>Battery Replacement</option>
<option value='tyres'>Tyres change</option>
<option value='glass'>Glass</option>
<option value='engine'>Engine</option>
<option value='body'>Body</option>
</select></p>
</p>

<?php if ($this->_tpl_vars['tyre'] == 1): ?>
<p>Number of tyres :<input type='number' name='no_of_tyres'></p>
<p>Cost of each tyre :<input type='number' name='cost'></p>
<input type='submit' name='tyre' value='next'>
<?php endif; ?>

<?php if ($this->_tpl_vars['number']): ?>
<?php unset($this->_sections['foo']);
$this->_sections['foo']['name'] = 'foo';
$this->_sections['foo']['start'] = (int)0;
$this->_sections['foo']['loop'] = is_array($_loop=$this->_tpl_vars['number']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['foo']['show'] = true;
$this->_sections['foo']['max'] = $this->_sections['foo']['loop'];
$this->_sections['foo']['step'] = 1;
if ($this->_sections['foo']['start'] < 0)
    $this->_sections['foo']['start'] = max($this->_sections['foo']['step'] > 0 ? 0 : -1, $this->_sections['foo']['loop'] + $this->_sections['foo']['start']);
else
    $this->_sections['foo']['start'] = min($this->_sections['foo']['start'], $this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] : $this->_sections['foo']['loop']-1);
if ($this->_sections['foo']['show']) {
    $this->_sections['foo']['total'] = min(ceil(($this->_sections['foo']['step'] > 0 ? $this->_sections['foo']['loop'] - $this->_sections['foo']['start'] : $this->_sections['foo']['start']+1)/abs($this->_sections['foo']['step'])), $this->_sections['foo']['max']);
    if ($this->_sections['foo']['total'] == 0)
        $this->_sections['foo']['show'] = false;
} else
    $this->_sections['foo']['total'] = 0;
if ($this->_sections['foo']['show']):

            for ($this->_sections['foo']['index'] = $this->_sections['foo']['start'], $this->_sections['foo']['iteration'] = 1;
                 $this->_sections['foo']['iteration'] <= $this->_sections['foo']['total'];
                 $this->_sections['foo']['index'] += $this->_sections['foo']['step'], $this->_sections['foo']['iteration']++):
$this->_sections['foo']['rownum'] = $this->_sections['foo']['iteration'];
$this->_sections['foo']['index_prev'] = $this->_sections['foo']['index'] - $this->_sections['foo']['step'];
$this->_sections['foo']['index_next'] = $this->_sections['foo']['index'] + $this->_sections['foo']['step'];
$this->_sections['foo']['first']      = ($this->_sections['foo']['iteration'] == 1);
$this->_sections['foo']['last']       = ($this->_sections['foo']['iteration'] == $this->_sections['foo']['total']);
?>
<p>New Tyre ID :<input type="text" name=<?php echo $this->_sections['foo']['index']; ?>
></p>
<?php endfor; endif; ?>
<input type="hidden" name="no_of_tyres" value=<?php echo $this->_tpl_vars['number']; ?>
>
<input type='submit' name='add_tyre_expense' value='Add to Expenses'>
<?php endif; ?>

<?php if ($this->_tpl_vars['tyre'] == 2): ?>
<p>TOTAL COST :<input type='number' name='cost'></p>
<input type='submit' name='add_expense' value='Add Expense'>
<?php endif; ?>

<?php if ($this->_tpl_vars['tyre'] == 0): ?>
<input type='submit' name='Proceed' value='Proceed'>
<?php endif; ?>

</form>
</body>
</html>