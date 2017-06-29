<?php

/**
 * Created by PhpStorm.
 * User: LeNovo
 * Date: 28/06/2017
 * Time: 20:15
 */
namespace Esprit\FamycityBundle\Repository;
use Doctrine\ORM\EntityRepository ;

class PublicationRepository extends EntityRepository
{
  public function creatFindOneById(int $id)
  {
      $query = $this->_em->createQuery(
          "
              SELECT fp FROM EspritFamycityBundle:Publication fp 
              WHERE fp.idPublication =:id
              "

      )
      ;
      $query->setParameter('id',$id);
      return $query ;
  }

    public function creatFindAllById()
    {
        $query = $this->_em->createQuery(
            "
              SELECT fp FROM EspritFamycityBundle:Publication fp 
              
              "

        )
        ;

        return $query ;
    }
}