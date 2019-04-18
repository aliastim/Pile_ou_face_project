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

use App\Entity\Videos;

if (isset($_POST['id_video']) AND !empty($_POST['id_video']))
{
    if (isset($_POST['Lien_video']) and !empty($_POST['Lien_video']) and isset($_POST['categorie']) and !empty($_POST['categorie']))
    {
        $repo = $entityManager->getRepository(Videos::class);
        $ma_video = $repo->findOneBy(['id'=>$_POST['id_video']]);

        $ma_video->setFile($_POST['Lien_video']);
        $ma_video->setCategorie($_POST['categorie']);

        if (isset($_POST['Titre_video'])){
            $ma_video->setName($_POST['Titre_video']);
        }
        if (isset($_POST['Description'])){
            $ma_video->setDescription($_POST['Description']);
        }
        if (isset($_POST['Lieu'])){
            $ma_video->setLieu($_POST['Lieu']);
        }

        $entityManager->persist($ma_video);
        $entityManager->flush();

        header('Location:nos_videos.php');


    } else
    {
        header('Location:nos_videos.php?erreur="Manque_d_informations_requises"');
    }
} else
{
    header('Location:nos_videos.php?erreur="Id_inexistant');
}