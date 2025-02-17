<?php

namespace App\Form;

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
use App\Entity\TypeOffre;
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
            
        ->add('description', TextType::class, [
            'label' => 'Nom du Poste',
            'required' => true,
            'attr' => ['placeholder' => 'Ex: Développeur Web'],
            'constraints' => [
                new NotBlank([
                    'message' => 'La description ne peut pas être vide.',
                ]),
            ],
        ])


            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'label' => 'Date',
            ])
            ->add('lieu', TextType::class, [
                'label' => 'Localisation',
                'required' => true,
                'attr' => ['placeholder' => 'Ex: Paris, Tunisie...'],
            ])
            ->add('TypeEvent', EntityType::class, [
                'class' => TypeContrat::class, // L'entité associée au champ
                'choice_label' => 'nom', // La propriété de TypeContrat affichée dans le choix
                'label' => 'Type de Contrat',
                'placeholder' => 'Sélectionnez un type de contrat',
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
