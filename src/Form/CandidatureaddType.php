<?php

namespace App\Form;

use App\Entity\Candidature;
use App\Entity\Offre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class CandidatureaddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('datesoumission', null, [
                'widget' => 'single_text',
            ])
            ->add('utilisateur')
            ->add('cv', FileType::class, [
                'label' => 'CV (PDF or Word)',
            
                // Define constraints if needed (e.g., file type and size)
                'constraints' => [
                    new File([
                        'maxSize' => '2M', // Maximum file size, e.g., 2MB
                        'mimeTypes' => [
                            'application/pdf',
                            'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid PDF or Word document.',
                    ])
                    ],])
            ->add('lettremotivation')
            ->add('offre', EntityType::class, [
                'class' => Offre::class,
                'choice_label' => 'nomposte',
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Candidature::class,
        ]);
    }
}
