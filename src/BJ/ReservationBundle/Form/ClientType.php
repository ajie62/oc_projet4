<?php

namespace BJ\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, array(
                'label' => 'Prénom',
            ))
            ->add('lastname', TextType::class, array(
                'label' => 'Nom',
            ))
            ->add('birthdate', BirthdayType::class, array(
                'label' => 'Date de naissance',
                'widget' => 'single_text',
            ))
            ->add('country', CountryType::class, array(
                'label' => 'Pays',
                'placeholder' => 'Choisissez votre pays',
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Continuer'
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BJ\ReservationBundle\Entity\Client'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bj_reservationbundle_client';
    }


}
