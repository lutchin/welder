<?php
namespace Welding\WeldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WelderController extends Controller
{
    public function titaniumAction($materialId, $depthId, $weldId)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $titans= $em->createQueryBuilder('b')
            ->select('b')
            ->from('WeldingWeldBundle:Welder', 'b')
           // ->leftJoin('WeldingWeldBundle:Gas', 'g', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.gasId = g.id')
        //    ->leftJoin('WeldingWeldBundle:Material', 'm', \Doctrine\ORM\Query\Expr\Join::WITH, 'b.materialId = m.id')
         //  ->leftJoin('WeldingWeldBundle:Depth', 'd', \Doctrine\ORM\Query\Expr\Join::WITH, 'b.depthId = d.id')
         //   ->leftJoin('WeldingWeldBundle:Wolfram', 'w', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.wolframId = w.id')
        //    ->leftJoin('WeldingWeldBundle:Weld', 'wd', \Doctrine\ORM\Query\Expr\Join::WITH, 'b.weldId = wd.id')
         //   ->leftJoin('WeldingWeldBundle:Nozzle', 'n', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.nozzleId = n.id')
         //   ->leftJoin('WeldingWeldBundle:Advice', 'ad', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.adviceId = ad.id')
         //   ->leftJoin('WeldingWeldBundle:Additive', 'add', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.additiveId = add.id')
         //   ->leftJoin('WeldingWeldBundle:Current', 'c', \Doctrine\ORM\Query\Expr\Join::WITH, 'a.currentId = c.id')
          //  ->where('materialId =:materialId')
           ->where('b.weldId=:weldId AND b.depthId=:depthId AND b.materialId =:materialId')
         //   ->where('b.depthId=:depthId')
            ->setParameter( 'materialId', $materialId)
            ->setParameter('weldId', $weldId)
            ->setParameter('depthId', $depthId)
            //->setParameter()
            //->where()
            ->addOrderBy('b.id', 'DESC')
            ->getQuery()
            ->getResult();



        return $this->render('WeldingWeldBundle:Weld:create.html.twig', array(
            'titans' => $titans
        ));
    }
}