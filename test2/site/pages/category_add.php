 <?
	if(!empty($_POST['categ_denum'])) {

	// $result = mysqli_query($connection, "SELECT * FROM produse");

	if(mysqli_query($connection,"INSERT INTO categorie SET  categ_denum= '{$_POST['categ_denum']}'")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	<table border="1">
		<tr>
			<td>Denumire la categ</td>
		</tr>
		<? $query = mysqli_query($connection, 'SELECT * FROM categorie');
		 while($cat = mysqli_fetch_assoc($query)){?>
	<tr>
	    <td><?= $cat['categ_denum']?></td>
	</tr>
	<? } ?>
	<br>

		Add <input type="text" name="categ_denum">
		
		<input type="submit"><hr>
</form>
<?}?>