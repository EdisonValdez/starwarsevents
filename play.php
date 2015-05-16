<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$loader = require_once __DIR__.'/app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);
 
// all the setupis done

use Doctrine\ORM\EntityManager;
/**
* @var EntityManager $em
*/
$em = $container->get('doctrine')->getManager();

$wayne = $em->getRepository('UserBundle:User')
        ->findOneByUsernameOrPassword('wayne');

$countries->setPassword('newpass');
$em->persist($wayne);
$em->flush();
//echo $templating->render($event);
//$templating = $container->get('templating');

//echo $templating->render(
  // 'EventBundle:Default:index.html.twig',
   // array('name' => 'vader', 
     //       'count' => 4 )); 