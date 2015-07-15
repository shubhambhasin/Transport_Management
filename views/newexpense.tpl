<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Untitled Document</title>
</head>

<body>
<form id='form1' action='newexpense.php' method='post'>
<p>
Expense type: <strong>{$expense_type}</strong>
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

{if $tyre==1}
<p>Number of tyres :<input type='number' name='no_of_tyres'></p>
<p>Cost of each tyre :<input type='number' name='cost'></p>
<input type='submit' name='tyre' value='next'>
{/if}

{if $number}
{section name=foo start=0 loop=$number}
<p>New Tyre ID :<input type="text" name={$smarty.section.foo.index}></p>
{/section}
<input type="hidden" name="no_of_tyres" value={$number}>
<input type='submit' name='add_tyre_expense' value='Add to Expenses'>
{/if}

{if $tyre==2}
<p>TOTAL COST :<input type='number' name='cost'></p>
<input type='submit' name='add_expense' value='Add Expense'>
{/if}

{if $tyre==0}
<input type='submit' name='Proceed' value='Proceed'>
{/if}

</form>
</body>
</html>
