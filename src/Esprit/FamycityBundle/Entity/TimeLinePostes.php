<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 29/06/2017
 * Time: 08:51
 */

namespace Esprit\FamycityBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="Esprit\FamycityBundle\Repository\TimeLineRepository")
 * @ORM\Table(name="Publication")
 *
 */
class TimeLinePostes
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idPublication;
    /**
     * @ORM\Column(name="categorie", type="string")
     *
     */
    private $type;
    /**
     * @ORM\Column(type="date")
     *
     */
    private $pubDate;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $libelle;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $imageSrc;

    /**
     * @ORM\Column(type="string")
     *
     */
    private $videoSrc;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     *
     */
    private $participants;

    /**
     * @ORM\ManyToOne(targetEntity="Commentaires")
     *
     */
    private $comments;

    /**
     * @ORM\OneToOne(targetEntity="User")
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
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
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

    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->libelle."" ;
    }


}