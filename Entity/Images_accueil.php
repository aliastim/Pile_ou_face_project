<?php
/**
 * Created by PhpStorm.
 * User: timotheecorrado
 * Date: 2019-03-13
 * Time: 13:49
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\ImagesAccueilRepository")
 * @ORM\Table(name="images_accueil")
 */
class Images_accueil
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id_image;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $image_size;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Images_accueil
     *
     * @param int $id
     */
    public function setId($id): Images_accueil
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId_image(): ?int
    {
        return $this->id_image;
    }

    /**
     * @return Images_accueil
     * @param int $id_image
     */
    public function setId_image($id_image): Images_accueil
    {
        $this->id_image = $id_image;

        return $this;
    }

    /**
     * @return string
     */
    public function getFile(): ?string
    {
        return $this->file;
    }

    /**
     * @return Images_accueil
     * @param string $file
     */
    public function setFile($file): Images_accueil
    {
        $this->file = $file;

        return $this;
    }

    /**
     * @return string
     */
    public function getImage_size(): ?string
    {
        return $this->image_size;
    }

    /**
     * @return Images_accueil
     * @param string $image_size
     */
    public function setName($image_size): Images_accueil
    {
        $this->image_size = $image_size;

        return $this;
    }
}