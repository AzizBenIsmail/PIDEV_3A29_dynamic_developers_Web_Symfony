<?php

namespace App\Form;

use App\Entity\Voyage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Destination')
            ->add('Nom_Voyage',null, [
                'attr' => [
                    'placeholder' => 'Nom_Voyage',
                ]])
            ->add('Duree_Voyage',null, [
                'attr' => [
                    'placeholder' => 'Duree voyage',
                ]])
            ->add('Prix_Voyage',null, [
                'attr' => [
                    'placeholder' => 'Prix_Voyage',
                ]])
            ->add('date')
            ->add('valabilite',null, [
                'attr' => [
                    'placeholder' => 'Disponibilite...(oui/non/bientot disponible)',
                ]])
            ->add('ID_Client')
            ->add('image',FileType::class,[
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2Mi',
                        'mimeTypesMessage' => 'Please upload a valid image file',
                    ])
                ],
            ])
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
