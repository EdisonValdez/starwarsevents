<?php
/**
 * Created by PhpStorm.
 * User: Yerno
 * Date: 5/6/15
 * Time: 8:42 PM
 */

namespace Yoda\EventBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EventAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', 'text', array('label' => 'Name Title'))
            ->add('owner')
            ->add('details') //if no type is specified, SonataAdminBundle tries to guess it
            ->add('location')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('owner')
            ->add('details')
            ->add('location')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('owner')
            ->add('details')
            ->add('location')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}