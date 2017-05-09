<div class="container">
	<form action="<?= URL ?>client/createSave" method="post">
	
		<input type="text" name="firstname" placeholder="Voornaam"> <br>
		<input type="text" name="lastname" placeholder="Achternaam"> <br>
		<input type="text" name="phone" placeholder="Telefoonnummer" maxlength="10"> <br>
		<input type="text" name="email" placeholder="E-mail">
		<input type="submit" value="Verzenden"> 
	</form>
</div>