<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 29/06/2017
 * Time: 08:51
 */

namespace Esprit\FamycityBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Esprit\FamycityBundle\Repository\TimeLineRepository")
 * @ORM\Table(name="TimeLinePosts")
 *
 */
class TimeLinePostes
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPublication;
    /**
     * @ORM\Column(name="categorie", type="string")
     *
     */
    private $type;
    /**
     * @ORM\Column(type="datetime")
     *
     */
    private $pubDate;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", nullable=true)
     *
     */
    private $imageSrc;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $videoSrc;


    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="timeLinePosts")
     *
     */
    private $participants;

    /**
     * @ORM\OneToMany(targetEntity="Commentaires", mappedBy="timeLinePost",cascade={"remove"})
     */
    private $comments;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     *
     */
    private $createur;

    /**
     * @return mixed
     */
    public function getIdPublication()
    {
        return $this->idPublication;
    }

    /**
     * @param mixed $idPublication
     */
    public function setIdPublication($idPublication)
    {
        $this->idPublication = $idPublication;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getPubDate()
    {
        return $this->pubDate;
    }

    /**
     * @param mixed $pubDate
     */
    public function setPubDate($pubDate)
    {
        $this->pubDate = $pubDate;
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
    public function getImageSrc()
    {
        return $this->imageSrc;
    }

    /**
     * @param mixed $imageSrc
     */
    public function setImageSrc($imageSrc)
    {
        $this->imageSrc = $imageSrc;
    }

    /**
     * @return mixed
     */
    public function getVideoSrc()
    {
        return $this->videoSrc;
    }

    /**
     * @param mixed $videoSrc
     */
    public function setVideoSrc($videoSrc)
    {
        $this->videoSrc = $videoSrc;
    }

    /**
     * @return mixed
     */
    public  function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param mixed $participants
     */
    public function setParticipants( $participants)
    {
        $this->participants =  new ArrayCollection($participants);
    }
    public function addParticipants(User $u)
    {

        if (!$this->participants->contains($u)) {
            $this->participants[] = $u;
            $u->addpub($this);
        }

        return $this;
         }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = new ArrayCollection($comments);
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


    public function __construct()
    {
       // $this->participants = new ArrayCollection() ;
        $this->comments = new ArrayCollection() ;
        $this->pubDate = new \DateTime() ;

    }






}