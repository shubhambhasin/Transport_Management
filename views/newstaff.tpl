<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" action="newstaff.php" name="form1" method="post">
  <p><label for="textfield"><strong>Name:</strong></label>
<input type="text" name="name"></p>
<p><label for="textfield2"><strong>User ID:</strong></label>
<input type="text" name="username"></p>
<p><label for="password"><strong>Password:</strong></label>
<input type="password" name="password"></p>
<p><strong>Department:</strong> <select name="department">
<optgroup>
<option value="0">transport</option>
<option value="1">account</option>
<option value="2">managing</option>
</optgroup>
</select></p>
<p><label><strong>Salary:</strong></label>
<input type="text" name="salary"></p>
<p><label for="email"><strong>Email:</strong></label>
<input type="email" name="email" id="email"></p>
<p><label><strong>Address:</strong></label>
<input type="text" name="address"></p>
<p><label for="tel"><strong>Contact:</strong></label>
<input type="tel" name="contact" id="tel"></p>
<input name="submit" type="submit" value="Add">
</form>
</body>
</html>
