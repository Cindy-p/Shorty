<?php

namespace Shorty\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shorty\FirstBundle\Entity\Url;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /*
    public function indexAction($name
    {
        return $this->render('ShortyFirstBundle:Default:index.html.twig', array('name' => $name));
    }
     * */

    
    public function newAction(Request $request){
        $url = new Url();
        $url->setUrl("Entrez votre url...");
        $form = $this->createFormBuilder($url)
                ->add("url", "text")
                ->add("Envoyer","submit")
                ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()){
        
            return $this->redirect($this->generateUrl("url_success"));
        } else {
            return $this->render(
                'ShortyFirstBundle:Default:index.html.twig',
                array('form' => $form->createView())
            );
        }
        
    }
    
    public function urlSuccessAction()
    {
        return $this->render('ShortyFirstBundle:Default:urlSuccess.html.twig');
    }
}
