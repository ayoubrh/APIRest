<?php

namespace Prof\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $professeurs=$this->getDoctrine()->getManager()->getRepository('ProfAPIBundle:Professeur')->findall();
        return $this->render('ProfAPIBundle:Default:index.html.twig', array('name' => $name,
        'prof' => $professeurs));
    }
}
