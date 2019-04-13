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
$titre = $_POST['Titre_image'];
if (isset($_POST['Description']))
{
    $description = $_POST['Description'];
}
if (isset($_POST['Lieu']))
{
    $lieu = $_POST['Lieu'];
}
if (isset($_POST['image_size']))
{
    $image_size = $_POST['image_size'];
}


if (isset($id) AND isset($titre) AND !empty($id) AND !empty($titre))
{

    $repo = $entityManager->getRepository(Images_accueil::class);
    $mon_fichier = $repo->findOneBy(['id'=>$id]);

    $mon_fichier->setName($titre);
    if (isset($_POST['Description']))
    {
        $mon_fichier->setDescription($description);
    }
    if (isset($_POST['Lieu']))
    {
        $mon_fichier->setLieu($lieu);
    }
    if (isset($_POST['image_size']))
    {
        $mon_fichier->setImage_size($image_size);
    }

    $entityManager->persist($mon_fichier);
    $entityManager->flush();

    header('Location:galerie.php');


}else
{

    echo $twig->render('error.html.twig', [
        'title' => 'Erreur',
    ]);

    header('Location:galerie.php');
    echo 'erreur';
}