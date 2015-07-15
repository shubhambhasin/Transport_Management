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
{foreach from=$pending item=orders key=k}
<tr>
	{foreach from=$orders item=order}
  		 <td>{$order}</td>
     {/foreach}
 </tr>
{/foreach}
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
{foreach from=$completed item=orders key=k}
<tr>
	{foreach from=$orders item=order}
  		 <td>{$order}</td>
     {/foreach}
 </tr>
{/foreach}
</table>
</body>
</html>