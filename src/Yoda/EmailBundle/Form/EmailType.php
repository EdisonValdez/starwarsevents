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
            ->add('captcha', 'captcha')
            ->add('tracking', 'hidden')
            #->add('imageFile', 'file')
            #->add('imageName',  'vich_image', array(
             #   'required'      => false,
              #  'allow_delete'  => true, // not mandatory, default is true
               # 'download_link' => true, // not mandatory, default is true
            #))
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
                    'Kilogram'   => 'Kilogram',
                    'Is a Service' => 'Is a Service' ),

                'required'=> true))
            ->add('username', 'hidden')
            ->add('image', 'hidden', array(
             'label'=> 'Have an Image?',
             'required' => false
            ))
            ->add('file', 'file', array(
                'label'=> 'Have an Image?',
                'required' => false
            ))

            ->add('email', 'hidden')
            ->add('name', 'hidden')

            ->add('emailTo','hidden')
            ->add('time', 'date', array(

                'widget' => 'choice',
                'label'=> 'WHen do you need it?',
                // this is actually the default format for single_text

                'required' => false
            ));

    }

    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Yoda\EmailBundle\Entity\Email',
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
