<?php

namespace Yoda\EventBundle\Controller;

class DefaultController extends Controller
{
       
    public function indexAction($name, $count)
    {   
        //$em = $this->container->get('doctrine')->getManager();
    $em = $this->getDoctrine()->getManager();
    $repo = $em->getRepository('EventBundle:Event');
    
    $event = $repo->
            findOneBy(
               array('name' => 'Daphne coming soon')
           
            );
    
        return $this->render(
                'EventBundle:Default:index.html.twig',
                array('name' => $name,
                      'count' => $count, 
                      'event'=> $event));
  
    }
}
