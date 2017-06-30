<?php
/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 28/06/2017
 * Time: 11:48
 */

namespace Esprit\FamycityBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;



/**
 * @ORM\Entity(repositoryClass="Esprit\FamycityBundle\Repository\CourseRepository")
 * @ORM\Table(name="Course")
 *
 */
class Course
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCourse;


    /**

     * @ORM\Column(type="string",length=255)
     */
    private $nom;

    /**

     * @ORM\Column(type="string",length=512)
     */
    private $description;

    /**

     * @ORM\Column(type="float")
     */
    private $budget ;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User" , inversedBy="$coursesCree")
     * @ORM\JoinColumn(name="createur", referencedColumnName="id")
     */
    private $createur ;



    /**
     *
     * @ORM\ManyToOne(targetEntity="User" , inversedBy="coursesValider")
     * @ORM\JoinColumn(name="coursier", referencedColumnName="id")
     */
    private $coursier ;




    /**

     * @ORM\Column(type="string",length=255)
     */
    private $courseDate ;




    /**

     * @ORM\Column(type="string",length=512)
     */
    private $adresse;



    /**

     * @ORM\Column(type="string",length=512)
     */
    private $status;



    /**
     * @return mixed
     */
    public function getIdCourse()
    {
        return $this->idCourse;
    }

    /**
     * @param mixed $idCourse
     */
    public function setIdCourse($idCourse)
    {
        $this->idCourse = $idCourse;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param mixed $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * @param mixed $createur
     */
    public function setCreateur($createur)
    {
        $this->createur = $createur;
    }

    /**
     * @return mixed
     */
    public function getCoursier()
    {
        return $this->coursier;
    }

    /**
     * @param mixed $coursier
     */
    public function setCoursier($coursier)
    {
        $this->coursier = $coursier;
    }

    /**
     * @return mixed
     */
    public function getCourseDate()
    {
        return $this->courseDate;
    }

    /**
     * @param mixed $courseDate
     */
    public function setCourseDate($courseDate)
    {
        $this->courseDate = $courseDate;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }











}