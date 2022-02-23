<?php

namespace App\Form;

use App\Entity\Excursion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcursionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom_Excursion')
            ->add('Description_Excursion')
            ->add('Date')
            ->add('Type_Excursion')
            ->add('Lieu')
            ->add('valabilite',ChoiceType::class, [
                'choices' => [
                    'Validé' => 'Valide',
                    'Proposition' => 'Proposition',
                ]])
            ->add('ID_Client')
            ->add('image')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excursion::class,
        ]);
    }
}
