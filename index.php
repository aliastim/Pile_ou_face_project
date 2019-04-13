<?php

//session_start();

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";

//dump($_SESSION);
if (isset($_SESSION['isConnected']))
{
    $session = strval($_SESSION['firstname']);
    echo $twig->render('homepage.html.twig', [
        'title' => 'Accueil',
        'isConnected' => $_SESSION['isConnected'],
        'session' => $session,

    ]);
} else
{
    echo $twig->render('homepage.html.twig', [
        'title' => 'Accueil',
        'isConnected' => isset($_SESSION['isConnected']),
    ]);

}
