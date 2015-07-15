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
{if $add==1}
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
{/if}
{if $allRoutes}
<table width="677">
<tr>
<td width="133" ><strong>City 1</strong></td>
<td width="120"><strong>City 2</strong></td>
<td width="102" ><strong>Expense</strong></td>
<td width="90"><strong>Income</strong></td>
<td width="115" ><strong>Profit</strong></td>
</tr>
{foreach from=$allRoutes item=routes key=k}
<tr>
	{foreach from=$routes item=route key=index}
    	<td>{$route}</td>
      {/foreach}
     <td width="133"><form type="hidden" action="manage_routes.php" method="post"><input type="hidden" name="id" value={$k}><input type="submit" name="remove" value="Remove"><input type="submit" name="edit" value="Edit">
 </form></td>
 </tr>
 <form type="hidden" action="manage_routes.php" method="post">
  {if $edit==1}
  	{foreach from=$selectedRoute item=value key=attribute}
  	<p>{$attribute} :<input type="text" name={$attribute} value={$value}><input type="hidden" name="id" value={$k}></p>
    
    {/foreach}<p><input type="submit" name="done_edit" value="Done"></p>   </form>
 {/if}
{/foreach}
</table>
{/if}


</body>
</html>