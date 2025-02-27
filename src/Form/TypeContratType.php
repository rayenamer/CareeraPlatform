<?php

namespace App\Form;

use App\Entity\TypeContrat;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as Assert;

class TypeContratType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du type de contrat est obligatoire.']),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le nom doit comporter au moins 3 caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser 50 caractères.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-Z\s]+$/',
                        'message' => 'Le nom ne peut contenir que des lettres et des espaces.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'required' => 'required',
                    'minlength' => '3',
                    'maxlength' => '50',
                    'pattern' => '^[a-zA-Z\s]+$',
                    'title' => 'Seules les lettres et les espaces sont autorisés.'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TypeContrat::class,
        ]);
    }
}
