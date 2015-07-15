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
{if $allExpenses}
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
{foreach from=$allExpenses item=allExpense}
<tr>
	{foreach from=$allExpense item=expense}
  		 <td>{$expense}</td>
     {/foreach}
 </tr>
{/foreach}
</table>
{/if}

{if $allIncomes}
<table>
<tr>
<td width="85"><strong>Income Id</strong></td>
<td width="99"><strong>Income Title</strong></td>
<td width="108"><strong>Link Type</strong></td>
<td width="117"><strong>Link Id</strong></td>
<td width="105"><strong>Income Date</strong></td>
<td width="88"><strong>Value</strong></td>
</tr>
{foreach from=$allIncomes item=allIncome}
<tr>
	{foreach from=$allIncome item=income}
  		 <td>{$income}</td>
     {/foreach}
 </tr>
{/foreach}
</table>
{/if}

{if $totalProfit}
Total Profit : {$totalProfit}
{/if}

{if $totalExpense}
Total Expense : {$totalExpense}
{/if}

{if $totalIncome}
Total Income : {$totalIncome}
{/if}

{if $expenses_bet}
<table>
<tr>
<td width="85"><strong>Expense Id</strong></td>
<td width="99"><strong>Expense Title</strong></td>
<td width="108"><strong>Link Type</strong></td>
<td width="117"><strong>Link Id</strong></td>
<td width="105"><strong>Expense Date</strong></td>
<td width="88"><strong>Value</strong></td>
</tr>
{foreach from=$expenses_bet item=expense_bet}
<tr>
	{foreach from=$expense_bet item=expense}
  		 <td>{$expense}</td>
     {/foreach}
 </tr>
{/foreach}
</table>
{/if}

{if $incomes_bet}
<table>
<tr>
<td width="85"><strong>Income Id</strong></td>
<td width="99"><strong>Income Title</strong></td>
<td width="108"><strong>Link Type</strong></td>
<td width="117"><strong>Link Id</strong></td>
<td width="105"><strong>Income Date</strong></td>
<td width="88"><strong>Value</strong></td>
</tr>
{foreach from=$incomes_bet item=income_bet}
<tr>
	{foreach from=$income_bet item=income}
  		 <td>{$income}</td>
     {/foreach}
 </tr>
{/foreach}
</table>
{/if}

{if $profit_bet}
Profit : {$profit_bet}
{/if}

<div id="chart-1"><!-- Fusion Charts will render here--></div>


</body>
</html>