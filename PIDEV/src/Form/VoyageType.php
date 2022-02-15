<?php

namespace App\Form;

use App\Entity\Voyage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Destination')
            ->add('Nom_Voyage')
            ->add('Duree_Voyage')
            ->add('Prix_Voyage')
            ->add('date')
            ->add('valabilite',ChoiceType::class, [
        'choices' => [
            'Validé' => 'Valide',
            'Proposition' => 'Proposition',
        ]])
            ->add('ID_Client')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}
