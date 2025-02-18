<?php
namespace App\Form;

use App\Entity\Chercheur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ChercheurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom est requis.']),
                    new Assert\Length(['max' => 50])
                ]
            ])
            ->add('prenom', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le prénom est requis.']),
                    new Assert\Length(['max' => 50])
                ]
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'email est requis.']),
                    new Assert\Email(['message' => 'Veuillez renseigner un email valide.'])
                ]
            ])
            ->add('tel', TelType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le numéro de téléphone est requis.']),
                    new Assert\Regex([
                        'pattern' => '/^\d{8,15}$/',
                        'message' => 'Le numéro de téléphone doit contenir entre 8 et 15 chiffres.'
                    ])
                ]
            ])
            ->add('motdepasse', PasswordType::class, [
                'required' => false, 
                'empty_data' => '', // Empêche d'avoir un null
            ])
            
            ->add('confirmpasse', PasswordType::class, [
                'mapped' => false, // Si ce champ n'existe pas dans l'entité
                'required' => false,
            ])
            ->add('Adresse', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'adresse est requise.']),
                    new Assert\Length(['max' => 255])
                ]
            ])
            ->add('domaine', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le domaine est requis.']),
                    new Assert\Length(['max' => 100])
                ]
            ])
            ->add('photo', FileType::class, [
                'label'    => 'Photo de profil',
                'mapped'   => false,
                'required' => true,  // Champ obligatoire
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, JPG).',
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
            
            ->add('cv', FileType::class, [
                'label'    => 'CV (PDF ou image)',
                'mapped'   => false,
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
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chercheur::class,
        ]);
    }
}
