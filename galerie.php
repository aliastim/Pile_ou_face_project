<?php

//session_start();

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";

use App\Entity\Images_accueil;

$repo     = $entityManager->getRepository(Images_accueil::class);
$images = $repo->findAll();

echo $twig->render('galerie.html.twig', [
    'title' => 'Galerie',
    'images' => $images,
    'isConnected' => isset($_SESSION['isConnected']),
    //'username' => $_SESSION['username'],
]);
