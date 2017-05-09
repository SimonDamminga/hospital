<div class="container">
	<form action="<?= URL ?>client/editSave" method="post">
	
		<input type="text" name="firstname" value="<?= $client['client_Firstname']?>">
		<input type="text" name="lastname" value="<?= $client['client_Lastname']?>">
		<input type="text" name="phone" maxlength="10" value="<?= $client['client_Phone']?>">
		<input type="text" name="email" value="<?= $client['client_Email']?>">
		<input type="hidden" name="id" value="<?= $client['client_ID']?>">
		<input type="submit" value="Updaten">
	</form>
</div>