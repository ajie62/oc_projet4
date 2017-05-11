<?php

namespace BJ\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

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
                'required' => true,
                'constraints' => new Assert\Type('string'),
            ))
            ->add('lastname', TextType::class, array(
                'label' => 'Nom',
                'required' => true,
                'constraints' => new Assert\Type('string'),
            ))
            ->add('email', EmailType::class, array(
                'label' => 'Email',
                'required' => true,
            ))
            ->add('birthdate', BirthdayType::class, array(
                'label' => 'Date de naissance',
                'placeholder' => array(
                    'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année',
                ),
                'format' => 'dd/MM/yyyy',
            ))
            ->add('country', CountryType::class, array(
                'label' => 'Pays',
                'placeholder' => 'Choisissez votre pays',
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Continuer',
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
