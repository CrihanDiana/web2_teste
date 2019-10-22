<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?
		if(!empty(($_POST["number"]) and isset($_POST["number"]))){
			$_SESSION["number"][] = $_POST["number"];
	?>
	<p>Succes</p>
	<?} else {?>
		<form action = "" method = "post">
			<input type="number" name="number">
			<button>Submit</button>
<? } ?>	
</body>

</html>