<?php

namespace App\Form;
use App\Entity\Missionfreelencer;
use App\Entity\DemandeMission;
use App\Entity\Rechercheoffre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DemandeMissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('message', TextareaType::class, [
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le message ne peut pas être vide.'
                ]),
                new Assert\Length([
                    'min' => 10,
                    'minMessage' => 'Le message doit contenir au moins {{ limit }} caractères.',
                    'max' => 1000,
                    'maxMessage' => 'Le message ne peut pas dépasser {{ limit }} caractères.',
                ]),
            ],
        ])
        ->add('portfolio', TextType::class, [
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le portfolio ne peut pas être vide.'
                ]),
                new Assert\Url([
                    'message' => 'Le portfolio doit être une URL valide.'
                ]),
            ],
        ])            ->add('status')
            ->add('Offremission', EntityType::class, [
                'class' => Missionfreelencer::class,
                'choice_label' => 'titre',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeMission::class,
        ]);
    }
}
