<?php

namespace BJ\ReservationBundle\Form;

use BJ\ReservationBundle\Entity\typeTicket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array(
                'label' => 'Date de la visite',
                'attr' => ['class' => 'js-datepicker'],
                'widget' => 'single_text',
                'format' => 'M/d/y',
            ))
            ->add('type', ChoiceType::class, array(
                'required' => true,
            ))
            ->add('ticketsNumber', NumberType::class, array(
                'label' => 'Nombre de billets',
                'required' => true,
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Continuer',
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BJ\ReservationBundle\Entity\Reservation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bj_reservationbundle_reservation';
    }
}