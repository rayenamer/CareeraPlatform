<?php

namespace App\Form;

use App\Entity\TypeOffre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class TypeOffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom du Type d\'Offre',
            'attr' => ['class' => 'form-control', 'placeholder' => 'Entrez le nom du type d\'offre'],
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le nom du type d\'offre est obligatoire.',
                ]),
                new Assert\Length([
                    'min' => 3,
                    'max' => 50,
                    'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                    'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                ]),
                new Assert\Regex([
                    'pattern' => "/^[a-zA-ZÀ-ÿ\s-]+$/",
                    'message' => 'Le nom ne peut contenir que des lettres et des espaces.',
                ]),
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypeOffre::class,
        ]);
    }
}
