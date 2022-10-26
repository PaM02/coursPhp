<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Formulaires</title>
       <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
       <meta charset="utf-8">
   </head>
   <body>
		<p>
			Cette page ne contient que du HTML.<br />
			Veuillez taper votre prénom :
		</p>
		
		<form action="https://ami.calinhost.com/api/COMM_RemoteToken" method="post">
			<p>
				<label> Prénom:
					<input type="text" name="CompanyName" /> 
				</label>
				<label> Prénom:
					<input type="text" name="UserName" /> 
				</label>
				<label> Prénom:
					<input type="text" name="Password" /> 
				</label>
				<label> Prénom:
					<input type="text" name="MeterNo" /> 
				</label>
				<label> Prénom:
					<input type="text" name="Token" /> 
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
   </body>
</html>