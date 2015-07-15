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
{foreach from=$allVehicles item=vehicles key=k}
<tr>
	{foreach from=$vehicles item=vehicle}
  		 <td>{$vehicle}</td>
     {/foreach}
     <td><form type="hidden" action="newvehicle.php" method="post"><input type="hidden" name="id" value={$k}><input type="submit" name="remove" value="Remove"><input type="submit" name="edit" value="Edit">
 	 {if $edit==1}
 	New Reg. No. : <input type="text" name="new_id"><input type="hidden" name="id" value={$k}><input type="submit" name="done_edit" value="Done">
 	{/if}
 		</form></td>
 </tr>
{/foreach}
</tr>
</table>
</body>
</html>
