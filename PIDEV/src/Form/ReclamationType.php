<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Reclamation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('ID_Reclamation',TextareaType::class,['label'=>'Nom Reclamation','attr'=>['placeholder'=>'saisie le nom du Reclamation']])
            ->add('Type_De_Reclamation',TextareaType::class,['attr'=>['placeholder'=>'saisie le type du Reclamation']])
            ->add('Description_Reclamation' ,TextareaType::class,['attr'=>['placeholder'=>'Decrire votre Reclamation']])
            ->add('Date')
            ->add('ID_Client')
        ;
    }
//EntityType::class,['class' => Client::class,'choice_label'=>'Nom']
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
