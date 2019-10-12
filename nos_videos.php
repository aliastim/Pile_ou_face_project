<?php

//session_start();

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";

use App\Entity\Videos;

$repo     = $entityManager->getRepository(Videos::class);
$videos_freestyles = $repo->findBy(
    array
    (
        'categorie' => 'freestyles',
    ),
    array
    (
        'id' => 'DESC',
    ),
    3,
    0
);

$videos_challenges = $repo->findBy(
    array
    (
        'categorie' => 'challenges',
    ),
    array
    (
        'id' => 'DESC',
    ),
    3,
    0
);

$videos_minifilms = $repo->findBy(
    array
    (
        'categorie' => 'mini-films',
    ),
    array
    (
        'id' => 'DESC',
    ),
    3,
    0
);

echo $twig->render('nos_videos.html.twig', [
    'title' => 'Pile ou face project - Vidéos (Clips/Challenges/Freestyles)',
    'videos_freestyles' => $videos_freestyles,
    'videos_challenges' => $videos_challenges,
    'videos_minifilms' => $videos_minifilms,
    'isConnected' => isset($_SESSION['isConnected']),
    //'username' => $_SESSION['username'],
]);
