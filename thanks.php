<?php



       echo 'Merci ' . $_POST['user_name'] . " " . $_POST['user_prenom'] .' de nous avoir contacté à propos de ' . $_POST['subject']. '.'

        . 'Un de nos conseiller vous contactera soit à l adresse ' . $_POST['user_mail'] .' ou par téléphone au ' . $_POST['phone'].' dans les plus brefs délais pour traiter votre demande: ' . $_POST['message'];