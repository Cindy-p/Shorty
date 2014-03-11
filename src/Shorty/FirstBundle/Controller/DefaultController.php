<?php

namespace Shorty\FirstBundle\Controller;

use Shorty\FirstBundle\Entity\ShortenedUrl;
use Shorty\FirstBundle\Form\Type\ShortenedUrlType;
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

        $shortenedUrl = new ShortenedUrl();
        $form = $this->createForm(
            new ShortenedUrlType(),
            $shortenedUrl,
            array(
                'action' => $this->generateUrl("url_success"),
                "method" => "GET"
            ));
        $form->handleRequest($request);

        if ($form->isValid()){
            return $this->redirect($this->generateUrl("url_success"));
        }

        return $this->render(
                'ShortyFirstBundle:Default:index.html.twig',
                array('form' => $form->createView())
            );
        
    }
    
    public function urlSuccessAction()
    {
        return $this->render('ShortyFirstBundle:Default:urlSuccess.html.twig');
    }
}
