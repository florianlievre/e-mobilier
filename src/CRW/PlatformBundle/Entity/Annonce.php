<?php

namespace CRW\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="CRW\PlatformBundle\Repository\AnnonceRepository")
 * @Vich\Uploadable
 */
class Annonce
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=true)
     */
    private $dateCreation;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", nullable=true)
     */
    private $filename;

    /**
     * @var boolean
     *
     * @ORM\Column(name="typedebien", type="boolean", length=255)
     */
    private $typedebien;


    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", length=255)
     */
    private $prix;


    /**
     * @var boolean
     *
     * @ORM\Column(name="surface", type="integer", length=255)
     */
    private $surface;


    /**
     * @var int
     *
     * @ORM\Column(name="nbdepiece", type="integer", length=255)
     */
    private $nbdepiece;


    /**
     * @var string
     *
     * @ORM\Column(name="dpe", type="string", length=255)
     */
    private $dpe;


    /**
     * @var string
     *
     * @ORM\Column(name="ges", type="string", length=255)
     */
    private $ges;




    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="CRW\PlatformBundle\Entity\Utilisateur", inversedBy="annonces")
     */
    private $auteur;


    /**
     * @Vich\UploadableField(mapping="media", fileNameProperty="mediaName")
     *
     * @var Media
     */
    private $mediaFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $mediaName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;








    /**
     *
     */

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Annonce
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Annonce
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set auteur
     *
     * @param \CRW\PlatformBundle\Entity\Utilisateur $auteur
     *
     * @return Annonce
     */
    public function setAuteur(\CRW\PlatformBundle\Entity\Utilisateur $auteur = null)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return \CRW\PlatformBundle\Entity\Utilisateur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set typedebien
     *
     * @param boolean $typedebien
     *
     * @return Annonce
     */
    public function setTypedebien($typedebien)
    {
        $this->typedebien = $typedebien;

        return $this;
    }

    /**
     * Get typedebien
     *
     * @return boolean
     */
    public function getTypedebien()
    {
        return $this->typedebien;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Annonce
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return integer
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set surface
     *
     * @param integer $surface
     *
     * @return Annonce
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return integer
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set nbdepiece
     *
     * @param integer $nbdepiece
     *
     * @return Annonce
     */
    public function setNbdepiece($nbdepiece)
    {
        $this->nbdepiece = $nbdepiece;

        return $this;
    }

    /**
     * Get nbdepiece
     *
     * @return integer
     */
    public function getNbdepiece()
    {
        return $this->nbdepiece;
    }

    /**
     * Set dpe
     *
     * @param boolean $dpe
     *
     * @return Annonce
     */
    public function setDpe($dpe)
    {
        $this->dpe = $dpe;

        return $this;
    }

    /**
     * Get dpe
     *
     * @return boolean
     */
    public function getDpe()
    {
        return $this->dpe;
    }

    /**
     * Set ges
     *
     * @param boolean $ges
     *
     * @return Annonce
     */
    public function setGes($ges)
    {
        $this->ges = $ges;

        return $this;
    }

    /**
     * Get ges
     *
     * @return boolean
     */
    public function getGes()
    {
        return $this->ges;
    }


    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Annonce
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }


    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $annonce
     *
     * @return Annonce
     */
    public function setMediaFile(File $annonce = null)
    {
        $this->mediaFile = $annonce;

        if ($annonce)
            $this->updatedAt = new \DateTimeImmutable();

        return $this;
    }

    /**
     * @return File|null
     */
    public function getMediaFile()
    {
        return $this->mediaFile;
    }

    /**
     * @param string $mediaName
     *
     * @return Annonce
     */
    public function setMediaName($mediaName)
    {
        $this->mediaName = $mediaName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMediaName()
    {
        return $this->mediaName;
    }
}
