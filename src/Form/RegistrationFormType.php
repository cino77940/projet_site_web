<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Nom',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre nom',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre nom doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Prénom',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre prénom',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre prénom doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre prénom ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('pseudo', TextType::class, [
                'label' => 'Pseudo',
                'attr' => [
                    'placeholder' => 'Pseudo',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre pseudo',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre pseudo doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre pseudo ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Email',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre email',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre email doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre email ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('date_de_naissance', BirthdayType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'attr' => [
                    'placeholder' => 'Date de naissance',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre date de naissance',
                    ]),
                ],
            ])


            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'attr' => [
                    'placeholder' => 'Adresse',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre adresse',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre adresse doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre adresse ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('ville',TextType::class, [
                'label' => 'Ville',
                'attr' => [
                    'placeholder' => 'Ville',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre ville',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre ville doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre ville ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])

            ->add('code_postal', TextType::class, [
                'label' => 'Code postal',
                'attr' => [
                    'placeholder' => 'Code postal',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre code postal',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre code postal doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre code postal ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('pays', CountryType::class, [
                'label' => 'Pays',
                'attr' => [
                    'placeholder' => 'Pays',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez selectionner votre pays',
                    ]),
                ],
            ])


            ->add('numero_mobile', TextType::class, [
                'label' => 'Numéro mobile',
                'attr' => [
                    'placeholder' => 'Numéro mobile',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre numéro mobile',
                    ]),
                    new Length([
                        'min' => 10,
                        'max' => 14,
                        'minMessage' => 'Votre numéro mobile doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre numéro mobile ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('genre' , ChoiceType::class, [
                'label' => 'Genre',
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                ],
                'expanded' => true,
                'multiple' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez selectionner votre genre',
                    ]),
                ],
            ])


            ->add('description' , TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Description',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer votre description',
                    ]),
                    new Length([
                        'min' => 1,
                        'max' => 255,
                        'minMessage' => 'Votre description doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre description ne peut pas être plus long que {{ limit }} caractères',
                    ]),
                ],
            ])


            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])


            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 300,
                    ]),
                ],
            ])

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
