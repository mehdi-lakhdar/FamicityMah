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
class Commentaires

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
     * Commentaires constructor.
     * @param $idCom
     * @param $owner
     * @param $value
     */
    public function __construct($idCom, $owner, $value)
    {
        $this->idCom = $idCom;
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
     * @param mixed $idCom
     */
    public function setIdCom($id)
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

    function __toString()
    {
        // TODO: Implement __toString() method.
        return "Owner is ". $this->idCom . " Value is ". $this->value ;
    }


}
