<?php

namespace App\Form;

use App\Entity\Offre;
use App\Entity\TypeContrat;
use App\Entity\TypeOffre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomposte', TextType::class, [
                'label' => 'Nom du Poste',
                'required' => true,
                'attr' => ['placeholder' => 'Ex: Développeur Web'],
            ])
            ->add('entreprise', TextType::class, [
                'label' => 'Entreprise',
                'required' => true,
                'attr' => ['placeholder' => 'Nom de l\'entreprise'],
            ])
            ->add('localisation', TextType::class, [
                'label' => 'Localisation',
                'required' => true,
                'attr' => ['placeholder' => 'Ex: Paris, Tunisie...'],
            ])
            ->add('salaire', NumberType::class, [
                'label' => 'Salaire (€)',
                'required' => true,
                'attr' => ['min' => 0, 'placeholder' => 'Ex: 35000'],
            ])
            ->add('typecontrat', EntityType::class, [
                'class' => TypeContrat::class, // L'entité associée au champ
                'choice_label' => 'nom', // La propriété de TypeContrat affichée dans le choix
                'label' => 'Type de Contrat',
                'placeholder' => 'Sélectionnez un type de contrat',
            ])
            ->add('typeOffre', EntityType::class, [
                'class' => TypeOffre::class,
                'choice_label' => 'nom',
                'label' => 'Type d\'Offre',
                'placeholder' => 'Sélectionnez un type d\'offre',
            ])
            ->add('disponibilite', CheckboxType::class, [
                'label' => 'Disponible',
                'required' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'Image (JPEG ou PNG)', // Libellé du champ
                'mapped' => false, // Ce champ n'est pas mappé à une propriété d'entité
                'required' => true, // Le champ est requis
                'constraints' => [
                    new File([
                        'maxSize' => '2M', // Taille maximale de 2Mo
                        'mimeTypes' => [
                            'image/jpeg', // Type MIME pour JPEG
                            'image/png', // Type MIME pour PNG
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier image valide (JPEG ou PNG).', // Message d'erreur en cas de type de fichier incorrect
                    ]),
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
