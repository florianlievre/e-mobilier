<?php

namespace CRW\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity(repositoryClass="CRW\PlatformBundle\Repository\AnnonceRepository")
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
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var text
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var text
     *
     * @ORM\Column(name="arrondissement", type="text")
     */
    private $arrondissement;



    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="CRW\PlatformBundle\Entity\Utilisateur", inversedBy="annonces")
     */
    private $auteur;


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
     * Set image
     *
     * @param string $image
     *
     * @return Annonce
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Annonce
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set arrondissement
     *
     * @param string $arrondissement
     *
     * @return Annonce
     */
    public function setArrondissement($arrondissement)
    {
        $this->arrondissement = $arrondissement;

        return $this;
    }

    /**
     * Get arrondissement
     *
     * @return string
     */
    public function getArrondissement()
    {
        return $this->arrondissement;
    }
}
