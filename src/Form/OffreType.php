<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\TextType; // Bon import
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class OffreType extends AbstractType
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
