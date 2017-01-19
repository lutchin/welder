<?php
namespace Welding\WeldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Articles controller.
 */
class ArticlesController extends Controller
{
    /**
     * Show a articles entry
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('WeldingWeldBundle:Articles')->find($id);

        if (!$blog) {
            throw $this->createNotFoundException('Статья не найдена');
        }

        return $this->render('WeldingWeldBundle:Articles:show.html.twig', array(
            'blog'      => $blog,
        ));
    }
}