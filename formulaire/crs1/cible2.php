<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> pour revenir à la page formulaire.php.</p>

		<form action="http://51.75.250.106:81/PHP_Demo/Gettoken.php?meterid=<?php echo $_POST['prenom'];?>&&amount=0.1" method="post">
			<p>
				<label>
					<?php echo $_POST['prenom']; ?>
				</label>
				<input type="submit" value="Valider" />
			</p>
				<label> Home:
					<input type="checkbox" name="prenom" /> 
				</label>
			</p>
			<p>
				<textarea name="message" rows="8" cols="45">Votre message ici.
				</textarea>
			</p>
			<p>
				<select  multiple="true" multiline ="true">
    				<option value="choix1">Choix 1</option>
				    <option value="choix2">Choix 2</option>
				  
				    <option value="choix3" >Choix 3</option>
				    <option value="choix4">Choix 4</option>
				</select>
			</p>
			<p>
				<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label>
			</p>
			<p>
				<input type="checkbox" name="cases" checked="checked" id="cases" /><label for="cases">choix par défaut</label>
			</p>
			<p>
				Aimez-vous les frites ?
				<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
				<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>	
			</p>
			
			
			
		</form>