<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Yoda\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Yoda\UserBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadUsers implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
 {
    /**
     *
     * @var ContainerInterface
     */
    private $container;
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('darth');
        //$user->setPassword($this->encodePassword($user, 'darthpass')); 
        $user->setPlainPassword('darthpass');
        $user->setEmail('darth@deathstar.com');
        $manager->persist($user);
        
        $admin = new User();
        $admin->setUsername('wayne');
        //$admin->setPassword($this->encodePassword($admin, 'waynepass')); 
        $admin->setPlainPassword('waynepass');
        $admin->setEmail('wayne@deathstar.com');
        $admin->setRoles(array('ROLE_ADMIN'));
     
        $manager->persist($admin);

        $edison = new User();
        $edison->setUsername('EdisonValdez');
        //$user->setPassword($this->encodePassword($user, 'darthpass'));
        $edison->setPlainPassword('Thesecret1');
        $edison->setEmail('eddynvg@hotmail.com');
        $edison->setRoles(array('ROLE_ADMIN'));
        $manager->persist($edison);

        $Martha = new User();
        $Martha->setUsername('Martha');
        //$user->setPassword($this->encodePassword($user, 'darthpass'));
        $Martha->setPlainPassword('Marthat1');
        $Martha->setEmail('mvp@hotmail.com');
        $Martha->setRoles(array('ROLE_USER'));
        $manager->persist($Martha);
        
        $manager->flush();
    }

    public function setContainer(ContainerInterface $container = null) {
     $this->container = $container;   
    }

    /**
     * Get the order of the fixture
     * @return int
     * 
     */
    public function getOrder() {
        return 10;
    }

}