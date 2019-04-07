<?php

error_reporting(E_ALL);                     //Pas mettre en temps normal, juste pour afficher les erreurs sur mac, rien à voir avec composer
ini_set('display_errors', 1);   // Idem

require __DIR__ . "/bootstrap.php";

use App\Entity\Images_accueil;

//Image
$monfichier = $_FILES['mon_fichier'];
//Titre de l'image
$titledoc = $_POST['titre'];
//Description de l'image
if (isset($_POST['description']))
{
    $description = $_POST['description'];
}
//Lieu de l'image
if (isset($_POST['lieu']))
{
    $lieu = $_POST['lieu'];
}

//Taille de l'image
if (isset($_POST['image_size']))
{
    $image_size = $_POST['image_size'];
}


$maxsize = 10000000;
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png', 'bmp' );
if (isset($titledoc) && !empty($titledoc) && isset($_FILES['mon_fichier']) && !empty($_FILES['mon_fichier']))
{
    if ($_FILES['mon_fichier']['error'] > 0)
    {
        $erreur = "Erreur lors du transfert";
    } else
    {
        if ($_FILES['mon_fichier']['size'] > $maxsize)
        {
            $erreur = "Le fichier est trop gros";
        } else
        {
            $extension_upload = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
            if ( in_array($extension_upload,$extensions_valides) )
            {
                echo "Extension correcte";

                /*mkdir('fichier/1/', 0777, true); *//*Pour créer un fichier*/
                //Créer un identifiant difficile à deviner
                $nom = md5(uniqid(rand(), true));
                $nom = "ressources/img_galerie/{$nom}.{$extension_upload}";
                $resultat = move_uploaded_file($_FILES['mon_fichier']['tmp_name'],$nom);

                if ($resultat) echo "Transfert réussi";

                $repo = $entityManager->getRepository(Images_accueil::class);

                $mon_fichier = new Images_accueil();

                $mon_fichier->setName($titledoc);
                $mon_fichier->setFile($nom);
                $mon_fichier->setType($_FILES['mon_fichier']['type']);
                if (isset($_POST['description']))
                {
                    $mon_fichier->setDescription($description);
                }
                if (isset($_POST['lieu']))
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

            } else
            {
                $erreur = "Extension incorrecte";
            }

        }
    }

} else
{
    echo 'Il manque le nom du fichier ou le fichier';
}