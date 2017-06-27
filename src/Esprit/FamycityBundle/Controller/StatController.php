<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 27/06/2017
 * Time: 16:23
 */

namespace Esprit\FamycityBundle\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\FamycityBundle\Entity\Reclamation;
use Zend\Json\Expr;

class StatController  extends Controller
{




    public function indexAction()
    {

        $em=$this->getDoctrine()->getManager();
        $classes =$em->getRepository('EspritFamycityBundle:Reclamation')->findAll();


        $categories= array();
        $nbEtudiants=array();
        foreach($classes as $classe)
        { array_push($categories,$classe->getDate());
            array_push($nbEtudiants,$classe->getTitre());
        } $series = array(
            array( 'name' => 'Reclamation', 'type' => 'column', 'color' => '#4572A7', 'yAxis' => 0, 'data' => $nbEtudiants, ) );
        $yData = array(
            array( 'labels' => array( 'formatter' => new Expr('function () { return this.value + "" }'),
                'style' => array('color' => '#4572A7') ), 'gridLineWidth' => 0, 'title' => array(
                    'text' => 'Nombre des réclamations', 'style' => array('color' => '#4572A7') ), ), );


        $ob = new Highchart();
        $ob->chart->renderTo('container'); // The #id of the div where to render the chart
        $ob->chart->type('column');
        $ob->title->text('Nombre des réclamations ');
        $ob->xAxis->categories($categories);

        $ob->yAxis($yData);
        $ob->legend->enabled(false);
        $formatter = new Expr('function () { 
        var unit = { "Etudiant": "étudiant(s)", }
        [this.series.name];
         return this.x + ": <b>" + this.y + "</b> " + unit; }');
        $ob->tooltip->formatter($formatter);
        $ob->series($series);
        return $this->render('EspritFamycityBundle:Stat:Stat.html.twig',
            array( 'chart' => $ob ));
    }






}