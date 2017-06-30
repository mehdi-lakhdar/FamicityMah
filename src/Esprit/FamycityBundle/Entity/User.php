<?php

namespace Esprit\FamycityBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser ;
use Doctrine\ORM\Mapping as ORM ;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * @ORM\OneToMany(targetEntity="Course" , mappedBy="User")
     */
    private $coursesCree ;

    /**
     * @ORM\ManyToMany(targetEntity="TimeLinePostes", inversedBy="participants",cascade={"remove"})
     * @ORM\JoinTable(name="user_Like_Publication")
     */
    private $timeLinePosts;

    /**
     * @ORM\OneToMany(targetEntity="Course" , mappedBy="User")
     */
    private $coursesValider ;


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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    /**

     * @ORM\Column(type="string",length=255)
     */
    private $nom;
    /**

     * @ORM\Column(type="string",length=255)
     */
    private  $prenom;

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
     * @ORM\Column(type="string")
     */

    /**
     * @ORM\Column(type="string")
     * @JMSSerializer\Expose
     */
    private $image;

    /**
     * @return mixed
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * @param mixed $courses
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;
    }

    /**
     * @return mixed
     */
    public function getCoursesCree()
    {
        return $this->coursesCree;
    }

    /**
     * @param mixed $coursesCree
     */
    public function setCoursesCree($coursesCree)
    {
        $this->coursesCree = $coursesCree;
    }

    /**
     * @return mixed
     */
    public function getTimeLinePosts()
    {
        return $this->timeLinePosts;
    }

    /**
     * @param mixed $timeLinePosts
     */
    public function setTimeLinePosts($timeLinePosts)
    {
        $this->timeLinePosts = $timeLinePosts;
    }

    /**
     * @return mixed
     */
    public function getCoursesValider()
    {
        return $this->coursesValider;
    }

    /**
     * @param mixed $coursesValider
     */
    public function setCoursesValider($coursesValider)
    {
        $this->coursesValider = $coursesValider;
    }

    public function addpub(TimeLinePostes $t){
        if (!$this->timeLinePosts->contains($t)) {
            $this->timeLinePosts[] = $t;

        }
    }
    /**
     * @return mixed
     */
    public function getCoursesCree()
    {
        return $this->coursesCree;
    }

    /**
     * @param mixed $coursesCree
     */
    public function setCoursesCree($coursesCree)
    {
        $this->coursesCree = $coursesCree;
    }

    /**
     * @return mixed
     */
    public function getCoursesValider()
    {
        return $this->coursesValider;
    }

    /**
     * @param mixed $coursesValider
     */
    public function setCoursesValider($coursesValider)
    {
        $this->coursesValider = $coursesValider;
    }


    /**
     *@ORM\ManyToOne(targetEntity="User")
     *@ORM\JoinColumn(name="idfamille", referencedColumnName="id",onDelete="CASCADE")
     */
    protected $idFamille;

    /**
     * @return mixed
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     * @param mixed $idFamille
     */
    public function setIdFamille($idFamille)
    {
        $this->idFamille = $idFamille;
    }


    protected $nbCourse ;

    /**
     * @return mixed
     */
    public function getNbCourse()
    {
        return $this->nbCourse;
    }

    /**
     * @param mixed $nbCourse
     */
    public function setNbCourse($nbCourse)
    {
        $this->nbCourse = $nbCourse;
    }








}