<?php

namespace App\Form;

use App\Entity\ReservationExcursion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Date_Reservation_Excursion')
            ->add('ID_Client')
            ->add('ID_Excursion')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationExcursion::class,
        ]);
    }
}
