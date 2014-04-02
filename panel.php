<?php
include("config.php");

if($_POST['login'])
{
	$login = $_POST['login'];
	$password = md5($_POST['password']);
	$wynik = mysql_query("SELECT * FROM uzytkownik WHERE UZY_LOGIN='$login' AND UZY_HASLO='$password' LIMIT 1"); 
    $wynik = mysql_fetch_array($wynik);
	if($wynik)
	{
		echo "ZALOGOWANY";
		echo str_replace(array('&lt;?php&nbsp;','?&gt;'), '', highlight_string( '<?php ' .     var_export($wynik, true) . ' ?>', true ) );
		echo "<a href=\"/\">WYLOGUJ</a>";
		$_SESSION['id'] = $wynik[0];
	} else
	{
	echo "ZLY LOGIN LUB HASLO";
	}
} else
{

	if($_SESSION['id'])
	{
		$id = $_SESSION['id'];
		$wynik = mysql_query("SELECT * FROM uzytkownik WHERE UZY_ID=$id LIMIT 1"); 
		$wynik = mysql_fetch_array($wynik);
		if($wynik)
		{
			echo "ZALOGOWANY";
			echo str_replace(array('&lt;?php&nbsp;','?&gt;'), '', highlight_string( '<?php ' .     var_export($wynik, true) . ' ?>', true ) );
			echo "<a href=\"/\">WYLOGUJ</a>";
		}
	} else
	{
		echo "NIE JESTES ZALOGOWANY";
	}
}
?>