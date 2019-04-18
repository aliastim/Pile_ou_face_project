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

if (isset($_POST['id_video']))
{
    $repo = $entityManager->getRepository(Videos::class);
    $ma_video = $repo->find(['id'=>$_POST['id_video']]);

    $entityManager->remove($ma_video);
    $entityManager->flush();

    header('Location:nos_videos.php');

} else

{
    echo $twig->render('error.html.twig', [
        'title' => 'Erreur',
    ]);

    header('Location:nos_videos.php?erreur="impossible_de_supprimer_l_element');
}
