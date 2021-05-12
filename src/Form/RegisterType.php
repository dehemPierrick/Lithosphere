<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class,[
                'label' => 'Prénom :',
                'constraints' => new Length([
                    'min' => 2,
                    'max' =>30
                ]),
                'attr' => [
                    'placeholder' => 'Merci de saisir votre prénom',
                    'class' =>'form-control'
                ]
            ])
            ->add('lastname', TextType::class,[
                'label' => 'Nom :',
                'constraints' => new Length([
                    'min' => 2,
                    'max' =>30
                ]),
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom',
                    'class' =>'form-control'
                ]
            ])
            ->add('email',EmailType::class,[
                'label' => 'Email :',
                'constraints' => new Length([
                    'min' => 2,
                    'max' =>55
                ]),
                'attr' => [
                    'placeholder' => 'Merci de saisir votre email',
                    'class' =>'form-control'
                ]
            ]) // équivalent à un input email
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => "Les mots de passe ne sont pas identiques.",
                'required' => true,
                'first_options' => [
                    'label' =>'Mot de passe :',
                    'attr' => [
                        'placeholder' => 'Merci de saisir un mot de passe',
                        'class' =>'form-control mb-3'
                    ]
                ],
                'second_options' => [
                    'label' =>'Confirmation du mot de passe :',
                    'attr' => [
                        'placeholder' => 'Merci de confirmer le mot de passe',
                        'class' =>'form-control mb-3'
                    ]
                ]
            ])

            ->add('submit', SubmitType::class,[
                'label' => "S'inscrire",
                'attr' => [
                    'class' =>'btn btn-lg btn-primary btn-block text-uppercase'
                ]

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
