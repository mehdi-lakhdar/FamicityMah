<?php

/**
 * Created by PhpStorm.
 * User: LeNovo
 * Date: 28/06/2017
 * Time: 20:15
 */
namespace Esprit\FamycityBundle\Repository;
use Doctrine\ORM\EntityRepository ;

class EventRepository extends EntityRepository
{
  public function findEvent()
  {
$query = $this->getEntityManager()->createQuery("select e  from EspritFamycityBundle:Event e ");
return $query->getResult();
  }
}