<?php

namespace Prof\APIBundle\Controller;



header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS ');
header('Allow GET, POST, PUT, DELETE, OPTIONS ');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, *');

use JMS\SerializerBundle\JMSSerializerBundle;
use Prof\APIBundle\Form\PersonneType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

use Prof\APIBundle\Entity\Professeur;


class ProfAPIController extends Controller
{
    /**
     * @return array
     * @View()
     *
     */
    public function getProfesseursAction()
    {
        $professeurs=$this->getDoctrine()->getManager()->getRepository('ProfAPIBundle:Professeur')->findall();
        return array('professeurs' => $professeurs);
    }

    /**
     * @param Professeur $prof
     * @return array
     * @View()
     * @Paramconverter("prof",class="ProfAPIBundle:Professeur")
     */
    public function getProfesseurAction(Professeur $prof){
        return array('professeur'=>$prof);
    }



    /**
     * POST action
     * Create new Professeur (in batch)
     * @var Request $request json request
     * @return View|array
     */
    public function postAddprofAction(Request $request)
    {
        $prof=new Professeur();
        $form = $this->createForm(new PersonneType(), $prof);
        $em = $this->getDoctrine()->getManager();
            $form->bind($request);
            if ($form->isValid()) {
                $em->persist($prof);
                $em->flush();
                return array(
                    'success' => true,
                );
            }
        return array(
            'form' => $form,
            'csrf_protection' => false
        );
    }

}
