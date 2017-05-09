<div class="container">
	<form action="<?= URL ?>species/editSave" method="post">
		<input type="text" name="species" value="<?= $species['species_Description'] ?>">
		<input type="hidden" name="id" value="<?= $species['species_ID']?>">
		<input type="submit" value="Verzenden">
	</form> 
</div>