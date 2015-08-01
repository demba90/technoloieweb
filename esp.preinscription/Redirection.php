<?php
session_start();
/**
 * Created by PhpStorm.
 * User: thiam
 * Date: 31/07/2015
 * Time: 18:28
 */
/**
 * C'est dans cette page où sera redirigé les tantative de connexion
 * Si on essaye de se connecter, on passe par ici
 * on vérifie l'authenticité et décider de la redirection vers la page
 */
    if(!empty($_POST['captcha']) && !empty($_POST['nom']))
    {
        if($_POST['captcha'] == $_SESSION['captcha'])
            echo 'Le captcha est bon, votre nom est '.$_POST['nom'];
        else
            echo 'Le captcha n\'est pas bon.';
    }
    else
        echo 'Il faut remplir tous les champs.';

    if(isset($_POST["close"])){
        header('Location: index.html');
    }elseif(isset($_POST["connexion"])){
            /*
             * On vérifie s'il est bien connu par la plateforme et si oui
             * 1- on enregistre ses information sur une session
             * 2- on le redirige dans une page ou on affichera à gauche de en haut ses informations personnelles
             * 3- on lui presentera son dossier
             * Donc, cette page doit etre une page php
             * qui est partagée par tous candidats mais avec les sessions
             * on affichera des informations dynamique
             * on fera une recherche aussi dynamique pour présenter automatiquement le dossier au candidat
             *
             */
        header('Location: Moncompte.php');
    }

?>
