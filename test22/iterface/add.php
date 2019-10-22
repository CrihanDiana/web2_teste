<?php
    if(isset($_POST['number'])) {

        $array->add($_POST['number']);
    }
?>
<form method="POST">
    <div class="form-group">
        <label for="number">Numar</label>
        <input type="number" class="number" id="number" name="number">
    </div>
    <button type="submit" class="btn btn-primary">Adaug</button>
</form>

<table border="1px">
	<?	foreach ($_POST as $value) {?>
		<tr><td><?=$value?></td>
			<td><a href="" onclick="return confirm('Doriti sa stergeti inregistrarea?')">x</a></td>

		</tr>
		<? } ?>
	
</table>
