<?php
namespace Welding\WeldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Welding\WeldBundle\Entity\Welder;
use Symfony\Component\HttpFoundation\Request;
use Welding\WeldBundle\Entity\Enquiry;
use Welding\WeldBundle\Form\EnquiryType;
use Welding\WeldBundle\Form\WelderType;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $articles = $em->createQueryBuilder()
            ->select('b')
            ->from('WeldingWeldBundle:Articles',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->setMaxResults( '3' )
            ->getQuery()
            ->getResult();
        $articles_footer = $em->createQueryBuilder()
            ->select('b')
            ->from('WeldingWeldBundle:Articles',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->setFirstResult( '3' )
            ->getQuery()
            ->getResult();


        return $this->render('WeldingWeldBundle:Page:index.html.twig', array(
            'articles' => $articles,
            'articles_footer' => $articles_footer
        ));
    }


    public function aboutAction()
    {
        $em = $this->getDoctrine()
            ->getManager();

        $articles_footer = $em->createQueryBuilder()
            ->select('b')
            ->from('WeldingWeldBundle:Articles',  'b')
            ->addOrderBy('b.created', 'DESC')
            ->getQuery()
            ->getResult();


        return $this->render('WeldingWeldBundle:Page:about.html.twig', array(

            'articles_footer' => $articles_footer
        ));
    }




    public function contactAction()
    {
        $enquiry = new Enquiry();

        $form = $this->createForm(EnquiryType::class, $enquiry);

       $request = $this->getRequest();

        if ($request->isMethod($request::METHOD_POST)) {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Сообщение с сайта WELDING')
                    ->setFrom('lutchin@gmail.com')
                    ->setTo($this->container->getParameter('welding_weld.emails.contact_email'))
                    ->setBody($this->renderView('WeldingWeldBundle:Page:contactEmail.txt.twig', array('enquiry' => $enquiry)));


                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->add('welding-notice', 'Ваше сообщение отправлено. Спасибо!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('WeldingWeldBundle_contact'));
            }
        }

        return $this->render('WeldingWeldBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }




    public function aluminiumAction(Request $request)
    {

        $welder = new Welder();
        $welder->setMaterialID(1);

        $form   = $this->createForm(WelderType::class, $welder);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $request->query->keys();

            $materialId = $request->get('welding_weldbundle_weldertype')['materialId'];
            $depthId = $request->get('welding_weldbundle_weldertype')['depthId'];
            $weldId = $request->get('welding_weldbundle_weldertype')['weldId'];

            return $this->redirectToRoute('WeldingWeldBundle_weld_create', array('materialId' =>  $materialId, 'depthId' => $depthId, 'weldId' => $weldId));
        }

        return $this->render('WeldingWeldBundle:Page:aluminium.html.twig', array(
            'form'   => $form->createView()
        ));
    }




    public function cooperAction(Request $request)
    {
        $welder = new Welder();
        $welder->setMaterialID(2);

        $form   = $this->createForm(WelderType::class, $welder);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $request->query->keys();

            $materialId = $request->get('welding_weldbundle_weldertype')['materialId'];
            $depthId = $request->get('welding_weldbundle_weldertype')['depthId'];
            $weldId = $request->get('welding_weldbundle_weldertype')['weldId'];

            return $this->redirectToRoute('WeldingWeldBundle_weld_create', array('materialId' =>  $materialId, 'depthId' => $depthId, 'weldId' => $weldId));
        }

        return $this->render('WeldingWeldBundle:Page:cooper.html.twig', array(
            'form'   => $form->createView()
        ));
    }




    public function steelAction(Request $request)
    {
        $welder = new Welder();
        $welder->setMaterialID(3);

        $form   = $this->createForm(WelderType::class, $welder);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $request->query->keys();

            $materialId = $request->get('welding_weldbundle_weldertype')['materialId'];
            $depthId = $request->get('welding_weldbundle_weldertype')['depthId'];
            $weldId = $request->get('welding_weldbundle_weldertype')['weldId'];

            return $this->redirectToRoute('WeldingWeldBundle_weld_create', array('materialId' =>  $materialId, 'depthId' => $depthId, 'weldId' => $weldId));
        }

        return $this->render('WeldingWeldBundle:Page:steel.html.twig', array(
            'form'   => $form->createView()
        ));
    }




    public function titaniumAction(Request $request)
    {
        $welder = new Welder();
        $welder->setMaterialId(4);

        $form   = $this->createForm(WelderType::class, $welder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $request->query->keys();

            $materialId = $request->get('welding_weldbundle_weldertype')['materialId'];
            $depthId = $request->get('welding_weldbundle_weldertype')['depthId'];
            $weldId = $request->get('welding_weldbundle_weldertype')['weldId'];

            return $this->redirectToRoute('WeldingWeldBundle_weld_create', array('materialId' =>  $materialId, 'depthId' => $depthId, 'weldId' => $weldId));
        }
        return $this->render('WeldingWeldBundle:Page:titanium.html.twig', array(
            'form'   => $form->createView()
        ));

    }
}