<?php

//session_start();

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";


echo $twig->render('nos_videos.html.twig', [
    'title' => 'Nos vidéos',
    'isConnected' => isset($_SESSION['isConnected']),
    //'username' => $_SESSION['username'],
]);
