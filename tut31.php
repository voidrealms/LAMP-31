<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Untitled</title>
</head>

<body>

<?php

class cat
{
	public $lol = "no";
	function meow()
	{
		$myvar = 99;
		
		echo "meow!";
	}
	
	function chew()
	{
		echo $lol;
	}
}

$mycat = new cat();

$mycat->meow();

?>

</body>
</html>
