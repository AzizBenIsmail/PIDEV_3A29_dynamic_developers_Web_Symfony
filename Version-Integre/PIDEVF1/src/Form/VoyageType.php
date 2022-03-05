<?php

namespace App\Form;

use App\Entity\Voyage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class VoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
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
            ->add('Prix')
            ->add('date')
            ->add('valabilite',null, [
                'attr' => [
                    'placeholder' => 'Disponibilite...(oui/non/bientot disponible)',
                ]])
            ->add('Clien')
            ->add('Image',FileType::class,[
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

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Voyage::class,
        ]);
    }
}
