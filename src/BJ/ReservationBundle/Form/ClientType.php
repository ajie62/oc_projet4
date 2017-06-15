<?php

namespace BJ\ReservationBundle\Form;

use BJ\ReservationBundle\Validator\Constraints\ContainsLettersAndAccents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
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
                'constraints' => [
                    new ContainsLettersAndAccents(),
                ],
            ))
            ->add('lastname', TextType::class, array(
                'label' => 'Nom',
                'required' => true,
                'constraints' => [
                    new ContainsLettersAndAccents(),
                ],
            ))
            ->add('birthdate', BirthdayType::class, array(
                'label' => 'Date de naissance',
                'placeholder' => array(
                    'day' => 'Jour', 'month' => 'Mois', 'year' => 'Année',
                ),
                'format' => 'ddMMyyyy',
            ))
            ->add('country', CountryType::class, array(
                'label' => 'Pays',
                'placeholder' => 'Choisissez votre pays',
            ))
            ->add('discount', CheckboxType::class, array(
                'label' => 'Dispose du prix réduit',
                'required' => false,
            ))
        ;
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
