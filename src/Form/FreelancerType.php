<?php

namespace App\Form;

use App\Entity\Freelancer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class FreelancerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 50])
                ]
            ])
            ->add('prenom', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 50])
                ]
            ])
            ->add('email', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Email()
                ]
            ])
            ->add('tel', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Regex([
                        'pattern' => '/^\d{8,15}$/',
                        'message' => 'Le numéro de téléphone doit contenir entre 8 et 15 chiffres.'
                    ])
                ]
            ])
            ->add('Adresse', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 255])
                ]
            ])
            
            ->add('motdepasse', PasswordType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 6, 'max' => 50])
                ]
            ])
            ->add('confirmpasse', PasswordType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 6, 'max' => 50]),
                    new Callback(function($object, ExecutionContextInterface $context) {
                        // Check if $object is the form, not just a string.
                        if (method_exists($object, 'getMotdepasse') && method_exists($object, 'getConfirmpasse')) {
                            if ($object->getMotdepasse() !== $object->getConfirmpasse()) {
                                $context->buildViolation('Les mots de passe ne correspondent pas.')
                                    ->atPath('confirmpasse')
                                    ->addViolation();
                            }
                        }
                    })
                ]
            ])
            ->add('domaine', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 100])
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
            ])
            
            ->add('sexe', ChoiceType::class, [
                'choices' => [
                    'Femme' => 'Femme',
                    'Homme' => 'Homme',
                    'Autre' => 'Autre',
                ],
                'expanded' => false,
                'multiple' => false,
                'label' => 'Sexe'  
            ])
            ->add('datedenais', DateType::class, [
                'widget' => 'single_text', // Permet de gérer correctement les dates dans les inputs HTML5
                'input' => 'datetime_immutable', // Permet la conversion automatique en \DateTimeImmutable
                'required' => true,
            ])

            ->add('cv', FileType::class, [
                'label' => 'CV (PDF ou image)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez télécharger un CV.']),
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier PDF ou Word valide.',
                    ]),
                ],
            ])
            
            ->add('experience', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\PositiveOrZero()
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Freelancer::class,
        ]);
    }
}
