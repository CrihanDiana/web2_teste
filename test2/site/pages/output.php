<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Output</title>
</head>
<body>
	<?	rsort($_SESSION["number"]);
		foreach ($_SESSION["number"] as $value) {
		echo $value. ',';
		}
	?>
</body>
</html>