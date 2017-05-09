<div class="container">
	<form action="<?= URL ?>patient/editSave" method="post">

		<input type="text" name="name" value="<?= $patient['name'] ?>">

		<textarea name="status"><?= $patient['status'] ?></textarea> 

		<select name="species">
			<?php foreach ($species as $specie) { ?>
			<?php  
				$selected = null;
				if ($patient['species_ID'] == $specie['species_ID']){$selected = 'selected';}
				else{$selected = null;}
			?>
			<option <?= $selected ?> value="<?= $specie['species_ID'] ?>"><?= $specie['species_Description'] ?></option>
			<?php } ?>
		</select>
		<select name="client">
			<?php foreach ($client as $client) { ?>
			<?php  
				$selected = null;
				if ($patient['client_ID'] == $client['client_ID']){$selected = 'selected';}
				else{$selected = null;}
			?> 
			<option <?= $selected ?> value="<?= $client['client_ID'] ?>"><?= $client['client_Firstname'] . ' ' . $client['client_Lastname'] ?></option>
			<?php } ?>
		</select>
		<p>Geslacht:</p>
			<input type="radio" name="gender" value="Man" <?php if ($patient['patient_Gender'] == 'Man') {echo "checked";}?>> Man <br>
			<input type="radio" name="gender" value="Vrouw" <?php if ($patient['patient_Gender'] == 'Vrouw') {echo "checked";}?>> Vrouw <br>
			<input type="radio" name="gender" value="Anders" <?php if ($patient['patient_Gender'] == 'Anders') {echo "checked";}?>> Anders <br>
		<input type="hidden" name="id" value="<?= $patient['id'] ?>">
		<input type="submit" name="" value="Updaten">
	</form>
</div>  