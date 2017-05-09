<div class="container">
	<form action="<?= URL ?>patient/createSave" method="post">
		<input type="text" name="name" placeholder="Naam dier"><br>
		<textarea name="status" placeholder="Wat mankeert er aan het dier"></textarea><br>
		<select name="species">
				<option disabled selected>Kies een dier</option>
			<?php foreach($species as $species){ ?>
				<option value="<?= $species['species_ID']?>"><?= $species['species_Description'] ?></option>
			<?php } ?>
		</select><br>
		<select name="client"> 
				<option disabled selected>Kies een klant</option>
			<?php foreach($client as $client){ ?>
				<option value="<?= $client['client_ID']?>"><?= $client['client_Firstname'] . " " . $client['client_Lastname']?></option>
			<?php } ?>
		</select><br>
		<p>Geslacht:</p>
			<input type="radio" name="gender" value="Man"> Man <br>
			<input type="radio" name="gender" value="Vrouw"> Vrouw <br>
			<input type="radio" name="gender" value="Anders"> Anders <br>
		<input type="submit" value="opslaan"> 
	</form>
</div>