<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints as Assert;

class ReplyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('content', TextareaType::class, [
            'label' => 'Content',
            'attr' => ['class' => 'form-control', 'rows' => 4, 'placeholder' => 'Write your discussion here...'],
            'constraints' => [
                new Assert\NotBlank([
                    'message' => 'Le champ ne peut pas être vide.',
                ]),
                new Assert\Length([
                    'min' => 5,
                    'minMessage' => 'Votre réponse est trop courte (minimum 5 caractères).',
                    'max' => 20,
                    'maxMessage' => 'Votre réponse est trop longue (maximum 20 caractères).',
                ]),
                new Assert\Regex([
                    'pattern' => '/\b(grosmot1|grosmot2|grosmot3)\b/i',
                    'match' => false,
                    'message' => 'Votre réponse contient des mots inappropriés.',
                ]),
            ],
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Submit',
            'attr' => ['class' => 'btn btn-primary'],
        ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
