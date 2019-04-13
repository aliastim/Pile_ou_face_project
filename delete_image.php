<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 28/12/2017
 * Time: 16:39
 */

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";

use App\Entity\Images_accueil;



    $id = $_POST['id_image'];

    if (isset($_POST['id_image']))
    {
        $repo = $entityManager->getRepository(Images_accueil::class);
        $mon_fichier = $repo->find(['id'=>$id]);

        $entityManager->remove($mon_fichier);
        $entityManager->flush();

        header('Location:galerie.php');

    } else

    {
        echo $twig->render('error.html.twig', [
            'title' => 'Erreur',
        ]);

        header('Location:galerie.php');
    }

