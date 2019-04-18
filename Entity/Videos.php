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
 * @ORM\Entity(repositoryClass="App\Repository\VideosRepository")
 * @ORM\Table(name="videos")
 */
class Videos
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
     * @ORM\Column(type="string", nullable=true)
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
    private $categorie;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *@return Videos
     *
     */
    public function setId($id): Videos
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
     * @param string $name
     *@return Videos
     */
    public function setName($name): Videos
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
     * @param string $file
     *@return Videos
     */
    public function setFile($file): Videos
    {
        $this->file = $file;

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
     * @param string $description
     *@return Videos
     */
    public function setDescription($description): Videos
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
     * @param string $lieu
     *@return Videos
     */
    public function setLieu($lieu): Videos
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * @return string
     */
    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    /**
     * @param string $categorie
     *@return Videos
     */
    public function setCategorie($categorie): Videos
    {
        $this->categorie = $categorie;

        return $this;
    }
}