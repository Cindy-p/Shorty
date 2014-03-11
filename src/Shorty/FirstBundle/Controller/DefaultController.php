<?php

namespace Shorty\FirstBundle\Controller;

use Shorty\FirstBundle\Entity\ShortenedUrl;
use Shorty\FirstBundle\Form\Type\ShortenedUrlType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Shorty\FirstBundle\Services\Sha1;
use Shorty\FirstBundle\Services\SlugGenerator;
use Shorty\FirstBundle\Services\Md5;


class DefaultController extends Controller
{
    /*
    public function indexAction($name
    {
        return $this->render('ShortyFirstBundle:Default:index.html.twig', array('name' => $name));
    }
     * */

    
    public function newAction(Request $request){
        
        $slugGenerator = new SlugGenerator(new Sha1());
        $mot = $slugGenerator->generateSlug("http://gogle.fr");
        
        $slugGenerator = new SlugGenerator(new Md5());
        $mot2 = $slugGenerator->generateSlug("http://gogle.fr");
        
        $shortenedUrl = new ShortenedUrl();
        $form = $this->createForm(new ShortenedUrlType(),$shortenedUrl,array("method" => "GET"));
        $form->handleRequest($request);

        if ($form->isValid()){
            return $this->redirect($this->generateUrl("url_success"));
        }

        return $this->render(
                'ShortyFirstBundle:Default:index.html.twig',
                array('form' => $form->createView(),
                    'mot' => $mot,
                     'mot2' => $mot2)
            );
        
    }
    
    public function urlSuccessAction()
    {
        return $this->render('ShortyFirstBundle:Default:urlSuccess.html.twig');
    }
}
