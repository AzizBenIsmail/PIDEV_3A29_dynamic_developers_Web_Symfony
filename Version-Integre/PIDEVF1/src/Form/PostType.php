<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('visibilite',ChoiceType::class, [
                'choices' => [
                    'selectionner'=>'',
                    'Public' => 'Public',
                    'Anonyme' => 'Anonyme',
                ]])

            ->add('DescriptionP', TextareaType::class , [
                'attr' => [
                    'class'=>'desc',
                    'placeholder'=>'partagez avec nous vos meilleurs moments'
                ]
            ])
            ->add('HashtagP',TextType::class, [
                'attr' => [
                    'placeholder'=>'ajouter hashtag ... (Voyage/Excursion/Restaurant)'
                ]
            ])
            ->add('ImageP',FileType::class,[
                'label' => '',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '9Mi',
                        'mimeTypesMessage' => 'Please upload a valid image file',
                    ])
                ],
            ])
            ->add('Publier',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
