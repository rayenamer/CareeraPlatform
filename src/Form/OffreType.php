<?php

namespace App\Form;

use App\Entity\Offre;
use App\Entity\TypeContrat;
use App\Entity\TypeOffre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomposte', TextType::class, [
                'label' => 'Nom du Poste',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du poste est obligatoire.']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le nom du poste doit comporter au moins 3 caractères.',
                        'maxMessage' => 'Le nom du poste ne peut pas dépasser 50 caractères.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'Le nom du poste ne peut contenir que des lettres et des espaces.',
                    ]),
                ],
                'attr' => ['placeholder' => 'Ex: Développeur Web'],
            ])
            ->add('entreprise', TextType::class, [
                'label' => 'Entreprise',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom de l\'entreprise est obligatoire.']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le nom de l\'entreprise doit comporter au moins 2 caractères.',
                        'maxMessage' => 'Le nom de l\'entreprise ne peut pas dépasser 50 caractères.',
                    ]),
                ],
                'attr' => ['placeholder' => 'Nom de l\'entreprise'],
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La localisation est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex: Paris, Tunisie...'],
            ])
            ->add('salaire', NumberType::class, [
                'label' => 'Salaire DT',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le salaire est obligatoire.']),
                    new Assert\Positive(['message' => 'Le salaire doit être un nombre positif.']),
                ],
                'attr' => ['min' => 0, 'placeholder' => 'Ex: 35000'],
            ])
            ->add('typecontrat', EntityType::class, [
                'class' => TypeContrat::class,
                'choice_label' => 'nom',
                'label' => 'Type de Contrat',
                'placeholder' => 'Sélectionnez un type de contrat',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner un type de contrat.']),
                ],
            ])
            ->add('typeOffre', EntityType::class, [
                'class' => TypeOffre::class,
                'choice_label' => 'nom',
                'label' => 'Type d\'Offre',
                'placeholder' => 'Sélectionnez un type d\'offre',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner un type d\'offre.']),
                ],
            ])
            ->add('disponibilite', CheckboxType::class, [
                'label' => 'Disponible',
                'required' => false,
                'data' => true, // Définit la valeur par défaut à true
            ])
            
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false, // Très important ! On ne mappe pas directement l'image à l'entité
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '5M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/jpg'],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG, JPG)',
                    ])
                ],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
