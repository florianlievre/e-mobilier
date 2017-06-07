<?php
// CRW/PlatformBundle/ContactType.php

namespace CRW\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array('attr' => array('placeholder' => 'Votre nom'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez mentionner votre nom")),
                )
            ))
            ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Votre email'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez mentionner votre email")),
                    new Email(array("message" => "Your email doesn't seems to be valid")),
                )
            ))
            ->add('telephone', NumberType::class, array('attr' => array('placeholder' => 'Votre numéro de téléphone'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez mentionner votre numéro de telephone")),
                )
            ))
            ->add('message', TextareaType::class, array('attr' => array('placeholder' => 'Votre message'),
                'constraints' => array(
                    new NotBlank(array("message" => "Veuillez mentionner votre message")),
                )
            ))
            ->add('submit', SubmitType::class, array('attr' => array('placeholder' => 'Envoyer')
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'error_bubbling' => true
        ));
    }

    public function getName()
    {
        return 'contact_form';
    }
}