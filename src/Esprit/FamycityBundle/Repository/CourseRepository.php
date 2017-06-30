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
        $query = $this->getEntityManager()->createQuery("select e  from EspritFamycityBundle:Course e WHERE e.status = 'En Cours' ");
        return $query->getResult();
    }


    public function findAllCoursesAuhtorized()
    {
        $query = $this->getEntityManager()->createQuery("select e  from EspritFamycityBundle:Course e WHERE e.status = 'Valid' ");
        return $query->getResult();
    }

    public function findMesCoursesEncours($id)
    {
        $query = $this->getEntityManager()->createQuery("select e  from EspritFamycityBundle:Course e WHERE e.status = 'En Cours' AND e.coursier =:id ");
        $query->setParameter('id',$id);
        return $query->getResult();
    }

    public function countCourses()
    {
        $query = $this->getEntityManager()->createQuery('SELECT COUNT(e.idCourse) FROM EspritFamycityBundle:Course e');
        return  $query->getSingleScalarResult();
    }

    public function countCoursesByUser($id)
    {
        $query = $this->getEntityManager()->createQuery('SELECT COUNT(e.idCourse) FROM EspritFamycityBundle:Course e WHERE e.coursier=:id');
        $query->setParameter('id',$id);
        return  $query->getSingleScalarResult();
    }



}