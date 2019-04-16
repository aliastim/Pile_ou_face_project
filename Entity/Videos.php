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
     *@return php
     *
     */
    public function setId($id): php
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
     *@return php
     */
    public function setName($name): php
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
     *@return php
     */
    public function setFile($file): php
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
     *@return php
     */
    public function setDescription($description): php
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
     *@return php
     */
    public function setLieu($lieu): php
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
     *@return php
     */
    public function setCategorie($categorie): php
    {
        $this->categorie = $categorie;

        return $this;
    }
}