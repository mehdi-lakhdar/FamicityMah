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
 * @ORM\Entity
 * @ORM\Table(name="Commentaires")
 */
class Commentaires implements  \JsonSerializable

{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\OneToOne(targetEntity="User")
     */
    private $owner;

    /**
     * @ORM\Column(type="string")
     */
    private $value;
    /**
     * @ORM\Column(type="date")
     */
    private $comDate;

    /**
     * @return mixed
     */


    /**
     * Commentaires constructor.
     * @param $id
     * @param $owner
     * @param $value
     */
    public function __construct($id, $owner, $value)
    {
        $this->id = $id;
        $this->owner = $owner;
        $this->value = $value;
    }

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
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getComDate()
    {
        return $this->comDate;
    }

    /**
     * @param mixed $comDate
     */
    public function setComDate($comDate)
    {
        $this->comDate = $comDate;
    }
    function __toString()
    {
        // TODO: Implement __toString() method.
        return "Owner is ". $this->id . " Value is ". $this->value ;
    }

    function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return [
            'id' => $this->id ,
            'owner' =>$this->owner ,
            'value' => $this->value ,
            'date' => $this->comDate,
        ];
    }

}
