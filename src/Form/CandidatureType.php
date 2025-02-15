<?php

namespace App\Form;

use App\Entity\Candidature;
use App\Entity\Offre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

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
            'data' => 'en_attente',  // Définit la valeur par défaut
            'expanded' => false,      // Afficher comme un select
            'multiple' => false,      // Permet de sélectionner une seule option
            'label' => 'Statut',
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
