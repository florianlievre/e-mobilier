<?php

namespace CRW\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array(
                'label' => "Titre de l'annonce",
            ))



            ->add('description', TextareaType::class, array(
                'attr' => array(
                    'row' => '9',
                    )
            ))

            ->add('typedebien', ChoiceType::class, array(
                'choices' => array(
                    'Appartement' => '0',
                    'Maison' => '1',
                )
            ))


            ->add('prix', TextType::class, array(
                'label' => "Prix",
            ))


            ->add('surface', TextType::class, array(
                'label' => "Surface",
            ))


            ->add('nbdepiece', IntegerType::class, array(
                'label' => "Nombre de pièce",

            ))



            ->add('dpe', ChoiceType::class, array(
                'choices' => array(
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C',
                    'D' => 'D',
                    'E' => 'E',
                    'F' => 'F',
                    'G' => 'G',
                )
            ))

            ->add('ges', ChoiceType::class, array(
                'choices' => array(
                    'A' => 'A',
                    'B' => 'B',
                    'C' => 'C',
                    'D' => 'D',
                    'E' => 'E',
                    'F' => 'F',
                    'G' => 'G',
                )
            ))



            ->add('image', TextType::class, array(
                'label' => "image",
            ))

            ->add('envoyer', SubmitType::class, array(
                'attr' => array('class' => 'save'),
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CRW\PlatformBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_annonce';
    }


}
