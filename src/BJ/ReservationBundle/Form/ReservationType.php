<?php

namespace BJ\ReservationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array(
                'label' => 'Date',
                'attr' => ['class' => 'js-datepicker'],
                'widget' => 'single_text',
                'format' => "dd/MM/yyyy",
                'constraints' => [
                    new Assert\Range(array(
                        'min' => 'yesterday',
                        'max' => '+8760 hours',
                        'minMessage' => "La date est dans le passé.",
                        'maxMessage' => "Vous êtes allé trop loin !",
                    ))
                ]
            ))
            ->add('type', ChoiceType::class, array(
                'choices' => array(
                    'Demi-journée' => 'demi-journée',
                    'Journée' => 'journée',
                ),
                'placeholder' => "Choisissez le type de billet souhaité",
                'multiple' => false,
                'expanded' => true,
            ))
            ->add('ticketsNumber', IntegerType::class, array(
                'label' => 'Nombre de billets',
                'required' => true,
                'constraints' => [
                    new Assert\Range(array(
                        'min' => 1,
                        'max' => 20,
                        'minMessage' => "Vous devez au moins réserver {{ limit }} billet.",
                        'maxMessage' => "Il est impossible de réserver plus de {{ limit }} billets.",
                    ))
                ],
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
