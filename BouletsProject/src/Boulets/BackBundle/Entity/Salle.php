<?php

namespace Boulets\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="Boulets\BackBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_machines", type="string", length=50)
     */
    private $nbMachines;

    /**
     * @var string
     *
     * @ORM\Column(name="administrateurs", type="string", length=50)
     */
    private $administrateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="incident", type="string", length=200)
     */
    private $incident;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreation", type="datetime")
     */
    private $datecreation;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Salle
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
     * Set nbMachines
     *
     * @param string $nbMachines
     *
     * @return Salle
     */
    public function setNbMachines($nbMachines)
    {
        $this->nbMachines = $nbMachines;

        return $this;
    }

    /**
     * Get nbMachines
     *
     * @return string
     */
    public function getNbMachines()
    {
        return $this->nbMachines;
    }

    /**
     * Set administrateurs
     *
     * @param string $administrateurs
     *
     * @return Salle
     */
    public function setAdministrateurs($administrateurs)
    {
        $this->administrateurs = $administrateurs;

        return $this;
    }

    /**
     * Get administrateurs
     *
     * @return string
     */
    public function getAdministrateurs()
    {
        return $this->administrateurs;
    }

    /**
     * Set incident
     *
     * @param string $incident
     *
     * @return Salle
     */
    public function setIncident($incident)
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * Get incident
     *
     * @return string
     */
    public function getIncident()
    {
        return $this->incident;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Salle
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }
}

