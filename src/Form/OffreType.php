<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; // Add this line

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('prix')
            ->add('description')
            ->add('datelimite')
            ->add('specialite', ChoiceType::class, [
                'choices'  => [
                    'Web Development' => 'web_development',
                    'Data Science' => 'data_science',
                    'Graphic Design' => 'graphic_design',
                    'Marketing' => 'marketing',
                    // Add other choices as needed...
                ],
                'placeholder' => 'Select a specialty', // Optional, for default text
                'required' => true,
                'attr' => [
                    'class' => 'form-control', // Add a class for styling
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
