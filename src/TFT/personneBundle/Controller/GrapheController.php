<?php
namespace TFT\personneBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GrapheController extends Controller{

 public function chartLineAction(){
     
$ob = new Highchart();
$ob->chart->renderTo('piechart');
$ob->title->text('Statistique Joueur');
$ob->plotOptions->pie(array(
 'allowPointSelect' => true,
 'cursor' => 'pointer',
 'dataLabels' => array('enabled' => false),
 'showInLegend' => true));

     $em=$this->getDoctrine()->getManager();
     //$query=$em->createQuery('SELECT count(u.id) as rang FROM  TFTpersonneBundle:Chart u ');
     $query=$em->createQuery('SELECT u.nom as Nom , u.rangjoueur as Rang  FROM  TFTpersonneBundle:User u ');
     $resultat=$query->getResult();
//     var_dump($resultat);
     $data=array();
    foreach ($resultat as  $values) {
       // $a = array(intval($values['rang']));
    $a = array($values['Nom'],intval($values['Rang']));
    array_push($data, $a); }
    

$ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));
return $this->render('TFTpersonneBundle:Graphe:ChartLine.html.twig', array('chart' => $ob));}}