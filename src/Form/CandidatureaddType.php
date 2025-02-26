<?php

namespace App\Form;

use App\Entity\Candidature;
use App\Entity\Offre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;

class CandidatureaddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //->add('datesoumission', DateType::class, [
            //    'widget' => 'single_text',
            //    'label' => 'Date de soumission',
            //    'constraints' => [
            //        new NotBlank(['message' => 'Veuillez entrer une date.']),
            //    ],
            //])
            //->add('utilisateur', TextType::class, [])
            //->add('cv', FileType::class, [
            //    'label' => 'CV (PDF ou DOCX)',
            //    'mapped' => false, // Si le fichier est géré manuellement
            //    'required' => true, // Rendre obligatoire
            //    'constraints' => [
            //        new NotBlank(),
            //        new File([
            //            'maxSize' => '2M',
            //            'mimeTypes' => ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'],
            //            'mimeTypesMessage' => 'Veuillez télécharger un fichier PDF ou DOCX valide',
            //        ]),
            //    ],
            //])
            
            
            ->add('lettremotivation', TextType::class, [
                'label' => 'Lettre de motivation',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez fournir une lettre de motivation.']),
                ],
            ])
            ->add('offre', EntityType::class, [
                'class' => Offre::class,
                'choice_label' => 'nomposte',
                'label' => 'Offre associée',
                'placeholder' => 'Sélectionnez une offre',
                'constraints' => [
                    new NotBlank(['message' => 'Veuillez sélectionner une offre.']),
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
