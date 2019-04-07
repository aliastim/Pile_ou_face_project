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
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $image_size;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $type;

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
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return Images_accueil
     * @param string $name
     */
    public function setName($name): Images_accueil
    {
        $this->name = $name;

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
    public function setImage_size($image_size): Images_accueil
    {
        $this->image_size = $image_size;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return Images_accueil
     * @param string $description
     */
    public function setDescription($description): Images_accueil
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    /**
     * @return Images_accueil
     * @param string $lieu
     */
    public function setLieu($lieu): Images_accueil
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return Images_accueil
     * @param string $type
     */
    public function setType($type): Images_accueil
    {
        $this->type = $type;

        return $this;
    }
}