<?php
include("config.php");
unset($_SESSION['id']);
?>
<html>
<head>
</head>
<body>
<form action="panel.php" method="post">
	Login: <input type="text" name="login" /><br>
	Password: <input type="password" name="password" /><br>
	<input type="submit" value="zaloguj" />
</form>
</body>
</html>