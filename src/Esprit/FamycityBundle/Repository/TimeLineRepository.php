<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 29/06/2017
 * Time: 14:50
 */

namespace Esprit\FamycityBundle\Repository;
use Doctrine\ORM\EntityRepository ;

class TimeLineRepository extends  EntityRepository
{

    public function creatOneById(int $id){

        $query = $this->_em->createQuery(
            "
              SELECT tp FROM EspritFamycityBundle:TimeLinePostes tp
              WHERE tp.idPublication =:id
              "
            )
        ;
        $query->setParameter('id',$id);
        return $query ;

    }

    public function creatFindALl(){

        $query = $this->_em->createQuery(
            "
              SELECT tp FROM EspritFamycityBundle:TimeLinePostes tp
            "

        )
        ;

        return $query ;

    }


}