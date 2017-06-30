<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 29/06/2017
 * Time: 08:51
 */

namespace Esprit\FamycityBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

use JMS\Serializer\Annotation as JMSSerializer;

class Publication  implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMSSerializer\Expose
     */
    private $idPublication;
    /**
     * @ORM\Column(name="categorie", type="string")
     * @JMSSerializer\Expose
     */
    private $type;
    /**
     * @ORM\Column(type="date")
     * @JMSSerializer\Expose
     */
    private $pubDate;

    /**
     * @ORM\Column(type="string")
     * @JMSSerializer\Expose
     */
    private $libelle;

    /**
     * @ORM\Column(type="string")
     * @JMSSerializer\Expose
     */
    private $imageSrc;

    /**
     * @ORM\Column(type="string")
     * @JMSSerializer\Expose
     */
    private $videoSrc;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @JMSSerializer\Expose
     */
    private $participants;

    /**
     * @ORM\ManyToOne(targetEntity="Commentaires")
     * @JMSSerializer\Expose
     */
    private $comments;

    /**
     * @ORM\OneToOne(targetEntity="User")
     * @JMSSerializer\Expose
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

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}