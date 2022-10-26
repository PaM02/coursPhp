<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
        		//La fonctionpathinforenvoie un array contenant entre autres l'extension du fichier dans$infosfichier['extension']. On //stocke ça dans une variable$extension_upload.
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                //tableau de de string avec 3 valeurs
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                //si l'extension correspond corespond aux valeur qu'on a enregisrer dans extensions_autorisees
                if (in_array($extension_upload, $extensions_autorisees))
                {

                		// On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                
                }
        }
}
