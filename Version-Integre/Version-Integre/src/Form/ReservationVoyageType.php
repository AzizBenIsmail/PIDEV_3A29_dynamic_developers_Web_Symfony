<?php

namespace App\Form;

use App\Entity\ReservationVoyage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationVoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Date_Reservation',ChoiceType::class,[
                'choices' => [
                    'now' => new \DateTime('now'),
                    'tomorrow' => new \DateTime('+1 day'),
                    '1 week' => new \DateTime('+1 week'),
                    '1 month' => new \DateTime('+1 month'),
                ],
                'group_by' => function($choice, $key, $value) {
                    if ($choice <= new \DateTime('+3 days')) {
                        return 'Soon';
                    }

                    return 'Later';
                },
            ])
            ->add('Travel_Class',ChoiceType::class, [
                'choices' => [
                    'Economy class' => 'Economy class',
                    'First class' => 'First class',
                    'Business class' => 'Business class',
                ]])
            ->add('Age',null, [
                'attr' => [
                    'placeholder' => 'Age',
                ]])
            ->add('Client')
            ->add('Voyage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ReservationVoyage::class,
        ]);
    }
}
