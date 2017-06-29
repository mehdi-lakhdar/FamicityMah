<?php
/**
 * Created by PhpStorm.
 * User: mehdi
 * Date: 29/06/2017
 * Time: 00:35
 */

namespace Esprit\FamycityBundle\Repository;


use Doctrine\ORM\EntityRepository;

class CourseRepository extends EntityRepository
{

    public function findAllCoursesOnhold()
    {
        $query = $this->getEntityManager()->createQuery("select e  from EspritFamycityBundle:Course e WHERE e.status = 'En Attente' ");
        return $query->getResult();
    }

    public function findAllCoursesValid()
    {
        $query = $this->getEntityManager()->createQuery("select e  from EspritFamycityBundle:Course e WHERE e.status = 'valider' ");
        return $query->getResult();
    }

}