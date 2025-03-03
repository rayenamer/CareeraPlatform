<?php

namespace App\Form; 
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver; 
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Regex;

use App\Entity\Offre;
use App\Entity\TypeContrat;
use App\Entity\TypeEvent;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\File; 


class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder 

        ->add('id') 
        ->add('nom', TextType::class, [
            'label' => 'nom',
            'required' => true,
            'attr' => ['placeholder' => 'évènement'],
            'constraints' => [
                new NotBlank([
                    'message' => 'La description ne peut pas être vide.',
                ]),
            ],
        ])
            
        ->add('description', TextType::class, [
            'label' => 'description',
            'required' => true,
            'attr' => ['placeholder' => 'description'],
            'constraints' => [
                new NotBlank([
                    'message' => 'La description ne peut pas être vide.',
                ]),
            ],
        ])


        ->add('date', DateTimeType::class, [
            'widget' => 'single_text', // Permet d'afficher un seul champ combiné
            'attr' => ['class' => 'form-control'],
            'label' => 'Date et Heure', 
            'constraints' => [
                new NotBlank(['message' => 'Ce champ est obligatoire.']),
            ],
        ])
            ->add('lieu', TextType::class, [
                'label' => 'Localisation',
                'required' => true,
                'attr' => ['placeholder' => 'Ex: Paris, Tunisie...'], 
                'constraints' => [
                new NotBlank(['message' => 'ce champ est obligatoire.']),
                
            ]
            ])
            ->add('TypeEvent', EntityType::class, [
                'class' => TypeEvent::class,
                'choice_label' => 'nom',
                'label' => 'Type événement'
            ]) 
            ->add('imageUrl', TextType::class, [
                'label' => 'URL de l\'image ',
                'required' => false, // L'image n'est pas obligatoire
                'attr' => [
                    'placeholder' => 'Collez le lien ici',
                ],
            ])
             



            ->add('disponibilite', CheckboxType::class, [
                'label' => 'Disponible',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
