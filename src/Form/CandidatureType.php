<?php

namespace App\Form;

use App\Entity\Candidature;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'en_attente',
                    'Acceptée' => 'acceptée',
                    'Rejetée' => 'rejetée',
                ],
                'data' => 'en_attente',  
                'expanded' => false,     
                'multiple' => false,     
                'label' => 'Statut',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner un statut.']),
                    new Assert\Choice([
                        'choices' => ['en_attente', 'acceptée', 'rejetée'],
                        'message' => 'Choix invalide, veuillez sélectionner un statut valide.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
