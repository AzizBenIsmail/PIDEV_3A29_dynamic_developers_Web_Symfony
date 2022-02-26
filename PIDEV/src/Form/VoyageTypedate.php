<?php

namespace App\Form;

use App\Entity\Voyage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VoyageTypedate extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('date')
            ->add('valabilite',null, [
                'attr' => [
                    'placeholder' => 'Disponibilite...(oui/non/bientot disponible)',
                ]])
            ->add('ID_Client')
            ->add('image',null, [
                'attr' => [
                    'placeholder' => 'Image du Destination',
                ]])
        ;
    }
//,ChoiceType::class, [
//'choices' => [
//'Validé' => 'Valide',
//'Proposition' => 'Proposition',
//]]
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}
