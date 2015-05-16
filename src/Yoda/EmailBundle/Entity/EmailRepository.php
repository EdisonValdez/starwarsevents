<?php

namespace Yoda\EmailBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EmailRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EmailRepository extends EntityRepository
{

    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e FROM EmailBundle:Email e ORDER BY e.name ASC'
            )
            ->getResult();
    }

}
