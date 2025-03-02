<?php

namespace App\Form;

use App\Entity\Missionfreelencer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\TextType; // Bon import
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class MissionfreelencerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(['message' => 'Le titre ne peut pas être vide.']),
            ],
        ])
        ->add('prix', NumberType::class, [
            'constraints' => [
                new Assert\GreaterThan(['value' => 0, 'message' => 'Le prix doit être supérieur à zéro.']),
            ],
        ])
        ->add('description', TextType::class, [
            'constraints' => [
                new Assert\Length(['max' => 500, 'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.']),
            ],
        ])
            ->add('datelimite')
            ->add('specialite', ChoiceType::class, [
                'choices'  => [
                    'Web Development' => 'web_development',
                    'Data Science' => 'data_science',
                    'Graphic Design' => 'graphic_design',
                    'Marketing' => 'marketing',
                    // Add other choices as needed...
                ],
                'placeholder' => 'Select a specialty', // Optional, for default text
                'required' => true,
                'attr' => [
                    'class' => 'form-control', // Add a class for styling
                ]
            ])
            
            // Ajoutez d'autres champs ici
           
         ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,  // Important si tu ne veux pas lier le champ au modèle
                'required' => false,
                'attr' => ['accept' => 'image/*'],
            ]);
            
    }

    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Missionfreelencer::class,
        ]);
    }
}
