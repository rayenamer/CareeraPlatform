<?php

namespace App\Form;

use App\Entity\Moderateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\File;

class ModerateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le nom est requis']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le nom doit comporter au moins {{ limit }} caractères',
                    ]),
                ]
            ])
            ->add('prenom', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le prénom est requis']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le prénom doit comporter au moins {{ limit }} caractères',
                    ]),
                ]
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est requis']),
                    new Email(['message' => 'Veuillez entrer un email valide']),
                ]
            ])
            ->add('tel', TelType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de téléphone est requis']),
                    new Regex([
                        'pattern' => '/^\+?[0-9]{10,15}$/',
                        'message' => 'Veuillez entrer un numéro de téléphone valide'
                    ])
                ]
            ])
            ->add('motdepasse', PasswordType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le mot de passe est requis']),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères',
                    ]),
                    
                ]
            ])
            ->add('confirmpasse', PasswordType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le mot de passe est requis']),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Le mot de passe doit comporter au moins 8 caractères',
                    ]),
                    
                ]
            ])
            ->add('Adresse', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'L\'adresse est requise']),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'L\'adresse doit comporter au moins {{ limit }} caractères',
                    ]),
                ]
            ])
            ->add('domaine', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'Le domaine est requis']),
                    new Length([
                        'min' => 3,
                        'minMessage' => 'Le domaine doit comporter au moins {{ limit }} caractères',
                    ]),
                ]
            ])
            ->add('photo', FileType::class, [
                'label' => 'Photo de profil',
                'mapped' => false,
                'required' => true,  // Rendre le champ obligatoire
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, JPG)',
                    ])
                ],
            ])// Si vous avez des contraintes sur l'upload, ajoutez-les ici
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme',
                    'Autre' => 'autre',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le sexe est requis']),
                ],
                'placeholder' => 'Choisissez une option', // Optionnelle : pour avoir une option par défaut
                'attr' => [
                    'class' => 'form-control', // Applique les styles Bootstrap à la liste déroulante
                ]
            ])
            ->add('societe', TextType::class, [
                'constraints' => [
                    new NotBlank(['message' => 'La société est requise']),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Le nom de la société doit comporter au moins {{ limit }} caractères',
                    ]),
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Moderateur::class,
        ]);
    }
}
