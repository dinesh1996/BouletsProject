<?php

namespace Boulets\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machine
 *
 * @ORM\Table(name="machine")
 * @ORM\Entity(repositoryClass="Boulets\BackBundle\Repository\MachineRepository")
 */
class Machine
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
     * @ORM\Column(name="ip", type="string", length=15)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var int
     *
     * @ORM\Column(name="ram", type="integer", length=10)
     */
    private $ram;

    /**
     * @var int
     *
     * @ORM\Column(name="disque", type="integer", length=10)
     */
    private $disque;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=20)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="incident", type="string", length=200)
     */
    private $incident;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * Get id
     *
     * @return int
     */

    /**
     * @var int
     *
     * @ORM\Column(name="id_salle", type="integer")
<<<<<<< HEAD
     */
    private $id_salle;

=======

     */
    private $id_salle;



>>>>>>> origin/tableau_parc
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Machine
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Machine
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
     * Set type
     *
     * @param string $type
     *
     * @return Machine
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ram
     *
     * @param integer $ram
     *
     * @return Machine
     */
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get ram
     *
     * @return int
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set disque
     *
     * @param integer $disque
     *
     * @return Machine
     */
    public function setDisque($disque)
    {
        $this->disque = $disque;

        return $this;
    }

    /**
     * Get disque
     *
     * @return int
     */
    public function getDisque()
    {
        return $this->disque;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Machine
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set incident
     *
     * @param string $incident
     *
     * @return Machine
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Machine
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date
     *
     * @param int $id_salle
     *
     * @return Machine
     */
    public function setId_salle($id_salle)
    {
        $this->id_salle = $id_salle;
<<<<<<< HEAD
        return $this;
    }
=======

        return $this;
    }

>>>>>>> origin/tableau_parc
    /**
     * Get id_salle
     *
     * @return int
     */
    public function getId_salle()
    {
        return $this->id_salle;
    }
}

