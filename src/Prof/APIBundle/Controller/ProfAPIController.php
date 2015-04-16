<?php

namespace Prof\APIBundle\Controller;



header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS ');
header('Allow GET, POST, PUT, DELETE, OPTIONS ');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type, *');

use JMS\SerializerBundle\JMSSerializerBundle;
use Prof\APIBundle\Form\EtudiantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Symfony\Component\Security\Acl\Exception\Exception;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

use Prof\APIBundle\Entity\Professeur;
use Prof\APIBundle\Entity\Etudiant;
use Prof\APIBundle\Form\PersonneType;


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
     * @param Professeur $prof
     * @return array
     * @View()
     * @Paramconverter("prof",class="ProfAPIBundle:Professeur")
     */
    public function getListetudiantAction(Professeur $prof){
        $em = $this->getDoctrine()->getManager();
        $etd=$em->getRepository('ProfAPIBundle:Etudiant')->getetudiants($prof->getId());
        return array('etudiants'=>$etd);
    }




    /**
     * @param Etudiant $etd
     * @return array
     * @View()
     * @Paramconverter("etd",class="ProfAPIBundle:Etudiant")
     */
    public function getEtudiantAction(Etudiant $etd){
        return array('etudiant'=>$etd);
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
        //$request = $this->getRequest();
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
            //if ($form->isValid()) {
                //$prof = $form->getData();
        try{        //var_dump($prof);
            if($em->getRepository('ProfAPIBundle:Professeur')->getprofbyemail($prof->getEmail()) == null){
                $em->persist($prof);
                $em->flush();
                return array(
                    'success' => true,
                    'id' => $prof->getId()
                );
            } else{
                $p = $em->getRepository('ProfAPIBundle:Professeur')->getprofbyemail($prof->getEmail());
                return array(
                    'success' => false,
                    'professeur' => $p,
                );
            }
         }catch (Exception $exception) {
            return array(
                'form' => $form,
            );
        }

           // }

    }




    /**
     * POST action
     * Create new Etudiant (in batch)
     * @var Request $request json request
     * @return View|array
     * @Paramconverter("prof",class="ProfAPIBundle:Professeur")
     */
    public function postAddetudiantAction(Request $request,Professeur $prof)
    {
        $etud=new Etudiant();
        $form = $this->createForm(new PersonneType(), $etud);
        //$request = $this->getRequest();
        $form->handleRequest($request);
        //if ($form->isValid()) {
        //$prof = $form->getData();
        try{        //var_dump($prof);
            $etud->setProfesseur($prof);
            $em = $this->getDoctrine()->getManager();
            $em->persist($etud);
            $em->flush();
            return array(
                'success' => true,
            );
        }catch (Exception $exception) {
            return array(
                'error' => false,
            );
        }

        // }

    }





    /**
     * @param Etudiant $etd
     * @return array
     * @View()
     * @Paramconverter("etd",class="ProfAPIBundle:Etudiant")
     */
    public function getSupetudiantAction(Etudiant $etd){


        try{        //var_dump($prof);
            $em = $this->getDoctrine()->getManager();
            $em->remove($etd);
            $em->flush();
            return array(
                'success' => true,
            );
        }catch (Exception $exception) {
            return array(
                'error' => false,
            );
        }
    }




    /**
     * POST action
     * Create new Etudiant (in batch)
     * @var Request $request json request
     * @return View|array
     */
    public function postTestAction(Request $request)
    {
        $etud=new Etudiant();
        $form = $this->createForm(new EtudiantType(), $etud);
        //$request = $this->getRequest();
        $form->handleRequest($request);
        //if ($form->isValid()) {
        //$prof = $form->getData();

            return array(
                'form' => $form,
            );

        // }

    }


    /**
     * POST action
     * @var Request $request json request
     * @return View|array
     * @Paramconverter("etd",class="ProfAPIBundle:Etudiant")
     */
    public function postModifetudiantAction(Request $request,Etudiant $etd)
    {
        $form = $this->createForm(new EtudiantType(), $etd);
        $form->handleRequest($request);
        //if ($form->isValid()) {
        //$prof = $form->getData();
        try{        //var_dump($prof);
            //$etud->setProfesseur($prof);
            $em = $this->getDoctrine()->getManager();
            $em->persist($etd);
            $em->flush();
            return array(
                'success' => true,
                //'form' => $form
            );
        }catch (Exception $exception) {
            return array(
                'error' => false,
            );
        }
    }



    /*
     *
     * @param Etudiant $etd
     *
     * @return array
     * @View()
     *
     * @Paramconverter("etd",class="ProfAPIBundle:Etudiant")
     */
    public function getNoteAction(Etudiant $etd){

        $message = \Swift_Message::newInstance()
            ->setSubject('Les Notes ')
            ->setFrom($etd->getProfesseur()->getEmail())
            ->setTo($etd->getEmail())
            ->setBody($this->renderView('ProfAPIBundle:Mail:noteemail.txt.twig', array(
                'etd' => $etd,
                'prof'=> $etd->getProfesseur())));

        if($this->get('mailer')->send($message)){
            return array(
                'success' => true,
                //'form' => $form
            );
        }else  return array(
            'success' => false,
        );
    }

    /*
     *
     * @param Etudiant $etd
     *
     * @return array
     * @View()
     *
     * @Paramconverter("etd",class="ProfAPIBundle:Etudiant")
     */
    public function getAllnoteAction(Professeur $prof){



        $etd = $this->getDoctrine()->getManager()->getRepository('ProfAPIBundle:Etudiant')->getetudiants($prof->getId());
        $v = 1;
        foreach ($etd as $e){
            $message = \Swift_Message::newInstance()
                ->setSubject('Les Notes ')
                ->setFrom($prof->getEmail())
                ->setTo($e->getEmail())
                ->setBody($this->renderView('ProfAPIBundle:Mail:noteemail.txt.twig', array(
                    'etd' => $e,
                    'prof'=> $prof)));
            if(!$this->get('mailer')->send($message)){
                $i= 0;
            }
        }

        if($v == 1){
            return array(
                'success' => true,
                //'form' => $form
            );
        }else  return array(
            'success' => false,
        );
    }





    /**
     * Create new Professeur (in batch)
     * @var Request $request json request
     * @return View|array
     */
    public function newpersonneAction(Request $request)
    {
        //la route get /personne_ws/new sera automatiquement générée
        //$request = $this->getRequest();
        $link = $request->get('link');

        $entity = new Professeur();
        $form    = $this->createForm(new PersonneType(), $entity);

        $view = $this->render('ProfAPIBundle:Personne:new.json.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'link'   => $link
        ));
        return $view;


    }




    /**
     * Create new Professeur (in batch)
     * @var Request $request json request
     * @return View|array
     */
    public function newprofAction(Request $request)
    {
        $prof=new Professeur();
        $form = $this->createForm(new PersonneType(), $prof);
        //$request = $this->getRequest();
        $form->handleRequest($request);
        //if ($form->isValid()) {
        //$prof = $form->getData();
        try{        //var_dump($prof);
            $em = $this->getDoctrine()->getManager();
            $em->persist($prof);
            $em->flush();
            return array(
                'success' => true,
            );
        }catch (InvalidFormException $exception) {
            return array(
                'form' => $form,
            );
        }
    }



}
