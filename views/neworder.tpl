<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
{if !$proceed}
<form id="form1" action="neworder.php" method="post">
  {if $allRoutes}
  <p><label for="textfield">From:</label>
  <select name='from'>
   {foreach from=$allRoutes item=routes key=k}
  	{foreach from=$routes item=route key=attribute}
    {if $attribute=='city1' or $attribute=='city2'}
  	<option>{$route}</option>
    {/if}
    {/foreach}
   {/foreach}
  </select></p>

  <p><label for="textfield2">To:</label>
   <select name='to'>
   {foreach from=$allRoutes item=routes key=k}
   {foreach from=$routes item=route key=attribute}
    {if $attribute=='city1' or $attribute=='city2'}
  	<option>{$route}</option>
    {/if}
    {/foreach}
    {/foreach}
  </select></p>
  {/if}
 <p><label for="textfield3">Weight:</label>
  <input type="number" name="weight"></p>
  <p><input type="submit" name="pay" value="Proceed"></p>
</form>
{/if}
{if $proceed}
TOTAL COST : {$totalCost}<br>
<form id="form1" action="" method="post">
   <p><input type="submit" name="payNow" value="pay now"></p>
    <p><input type="submit" name="POD" value="on delivery"></p>
    <input type="hidden" name="from" value={$from}>
    <input type="hidden" name="to" value={$to}>
    <input type="hidden" name="weight" value={$weight}>
</form>
{/if}
</body>
</html>
