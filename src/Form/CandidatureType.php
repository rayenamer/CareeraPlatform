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
                    'Acceptée' => 'acceptee',
                    'Refusée' => 'refusee',
                ],
                'data' => 'en_attente',  // Valeur par défaut
                'expanded' => false,      // Afficher comme un select
                'multiple' => false,      // Sélection unique
                'label' => 'Statut',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez sélectionner un statut.']),
                    new Assert\Choice([
                        'choices' => ['en_attente', 'acceptee', 'refusee'],
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
