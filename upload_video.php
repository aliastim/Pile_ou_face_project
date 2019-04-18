<?php

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";

use App\Entity\Videos;

if (isset($_POST['lien']) and !empty($_POST['lien']) and (isset($_POST['categorie'])) and !empty($_POST['categorie']))
{

    $repo = $entityManager->getRepository(Videos::class);

    $ma_video = new Videos();
    $ma_video->setFile($_POST['lien']);
    $ma_video->setCategorie($_POST['categorie']);

    if (isset($_POST['titre']) and !empty($_POST['titre'])) {
        $ma_video->setName($_POST['titre']);
    }
    if (isset($_POST['description']) and !empty($_POST['description'])) {
        $ma_video->setDescription($_POST['description']);
    }
    if (isset($_POST['lieu']) and !empty($_POST['lieu'])) {
        $ma_video->setLieu($_POST['lieu']);
    }

    $entityManager->persist($ma_video);
    $entityManager->flush();

    header('Location:nos_videos.php');

} else
{
    echo 'erreur';
    header('Location:nos_videos.php?erreur=true');
}