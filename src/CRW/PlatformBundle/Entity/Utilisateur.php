<?php

namespace CRW\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="CRW\PlatformBundle\Repository\UtilisateurRepository")
 */
class Utilisateur extends  BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\OneToMany(targetEntity="CRW\PlatformBundle\Entity\Annonce", mappedBy="auteur")
     */
    private $annonces;


    public function __construct()
    {
        parent::__construct();
        $this->annonces = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Utilisateur
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
     * Add annonce
     *
     * @param \CRW\PlatformBundle\Entity\Annonce $annonce
     *
     * @return Utilisateur
     */
    public function addAnnonce(\CRW\PlatformBundle\Entity\Annonce $annonce)
    {
        $this->annonces[] = $annonce;

        return $this;
    }

    /**
     * Remove annonce
     *
     * @param \CRW\PlatformBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\CRW\PlatformBundle\Entity\Annonce $annonce)
    {
        $this->annonces->removeElement($annonce);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }
}
