<?php
/**
 * Created by PhpStorm.
 * User: LeNovo
 * Date: 27/06/2017
 * Time: 23:44
 */

namespace Esprit\FamycityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="Esprit\FamycityBundle\Repository\EventRepository")
 * @ORM\Table(name="event")
 */
class Event

{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idEvent;
    /**
     * @ORM\Column(name="categorie", type="string")
     */
    private $categorie;
    /**
     * @ORM\Column(name="lieu", type="string")
     */
    private $lieu;
    /**
     * @ORM\Column(name="img", type="string")
     */
    private $image;

    /**
     * @ORM\Column(name="description", type="string")
     */
    private $description;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDebut;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateFin;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelle;
    /**
     * @ORM\Column(type="float")
     */
    private $cost;
    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $participants;
    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $addUser;

    /**
     * Event constructor.
     */
    public function __construct()
    {
    }

    function __toString()
    {
        return $this->categorie;
    }



    /**
     * @return mixed
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param mixed $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }

    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param mixed $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @return mixed
     */
    public function getAddUser()
    {
        return $this->addUser;
    }

    /**
     * @param mixed $addUser
     */
    public function setAddUser($addUser)
    {
        $this->addUser = $addUser;
    }
    /**
     * @return mixed
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param mixed $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}
