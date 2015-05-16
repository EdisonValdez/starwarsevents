<?php

namespace Yoda\EmailBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\BlankValidator;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Collection;

class EmailType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tracking', 'hidden')
            ->add('quotationSender','hidden')
            ->add('product', 'text', array(
                'attr' => array(
                    'placeholder' => 'What\'s the product or service you want?',
                    'pattern'     => '.{2,}' //minlength
                ),
                'label'=> 'What do You Need?',
                'required'=> true))
            ->add('city', 'text', array(
                'label'=>'Which City?',
                'required'=> true,
                'attr' => array(
        'placeholder' => 'Enter a City Name',
        'pattern'     => '.{2,}' //minlength
    )))
            ->add('category', 'text', array(
                'label'=> 'Select a Category',
                'required'=> true, 'attr' => array(
                    'placeholder' => 'It\'ll be more accurate if you enter a category',
                    'pattern'     => '.{2,}' //minlength
                )))
            ->add('message', 'textarea',  array(
                'attr' => array(
                    'cols' => 50,
                    'rows' => 10,
                    'placeholder' => 'Add a longer message ...'
                ),
            'label' => 'Message'))
            //->add('messageId', 'hidden', array(
              //  'data'=> 'Message ID Field'))
            ->add('quantity', 'number', array(
                'label'=> 'Quantity',
                'required'=> true, 'attr' => array(
                    'placeholder' => 'Please add Numbers only',
                    'pattern'     => '.{1,}' //minlength
                )
            ))
            ->add('qtyType', 'choice', array(
                'choices' => array(
                    'Pieces'   => 'Pieces',
                    'Unit' => 'unit',
                    'Kilogram'   => 'Kilogram'),

                'required'=> true))
            ->add('username', 'hidden')
            ->add('image', 'file', array(
                'label'=> 'Have an Image?',
                'required' => false
            ))

            ->add('email', 'hidden')
            ->add('captcha', 'captcha')
            ->add('emailTo','hidden');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $collectionConstraint = new Collection(array(
                'city' => array(
                    new NotBlank(array('message'=>'You should select a city!')),
                    new Length(array('min' => 2))
                ),
                'message' => array(
                    new NotBlank(array('message' => 'Message should not be blank.')),
                    new Length(array('min' => 10))
                ),
                'product' => array(
                    new NotBlank(array('message' => 'product should not be blank.'))
                ),
                'qtyType' => array(
                    new NotBlank(array('message' => 'qtyType should not be blank.'))
                ),
                'emailTo' => array(
                    new NotBlank(array('message' => 'Sorry, it seems no suppliers. Change your values.')),
                    new Length(array('min' => 5))
                ),
                'category' => array(
                    new NotBlank(array('message' => 'emailTo should not be blank.')),
                    new Length(array('min' => 3))
                ),
                'quantity' => array(
                    new NotBlank(array('message' => 'emailTo should not be blank.')),
                    new Length(array('min' => 1))
                ),
                'username' => array(
                    new Length(array('min' => 1))
                ),
                'quotationSender' => array(
                    new Length(array('min' => 1))
                ),

                'tracking' => array(
                    new Length(array('min' => 1))
                ),
                'image' => array(
                    new Length(array('min' => 1))
                ),
                'email' => array(
                    new Length(array('min' => 1))
                ),
                'captcha' => array(
                    new NotBlank(array('message' => 'Please, prove you are not a robot!'))
                ),
         )
        );
        $resolver->setDefaults(array(
            'constraints' => $collectionConstraint
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'email';
    }
}
