<?php

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8 /">
        <title>formulaire</title>
    </head>

    <body>

    <form action="thanks.php"  method="post">
        <p>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
        </p>

        <p>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_prenom">
        </p>

        <p>
            <label for="sujet">Sujet_Mail
                <select name="subject" id="sujet">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </label>
        </p>

        <p>
        <label  for="email">Email :</label>
        <input  type="email"  id="courriel"  name="user_mail">
        </p>

         <p>
         <label for="tel">téléphone</label>
        <input type="tel" id="tel" name="phone">
        </p>

        <p>
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea>
        </p>



        <input type="submit" value="Envoyer">


    </form>
    </body>
</html>
