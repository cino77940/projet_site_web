<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Security\Core\Encoder\PasswordHasherEncoder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Email',
                ],
            ])
            ->add('role', ChoiceType::class, [
                'label' => 'Rôle',
                'choices' => ['Utilisateur' => 'USER',
                'Administrateur' => 'ADMIN',],
                'required' => true,
                'mapped' => false,
                ])

            ->add('plainPassword', PasswordType::class,
                ['label' => 'Mot de passe',
                'required' => false,
                'mapped' => false,
                ])

            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Nom',
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prenom',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Prenom',
                ],
            ])
            ->add('pseudo', TextType::class, [
                'label' => 'Pseudo',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Pseudo',
                ],
            ])
            ->add('date_de_naissance', BirthdayType::class, [
                'label' => 'Date de naissance',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Date de naissance',
                ],
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Adresse',
                ],
            ])
            ->add('ville', TextType::class, [
                'label' => 'Ville',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ville',
                ],
            ])
            ->add('pays', CountryType::class, [
                'label' => 'Pays',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Pays',
                ],
            ])
            ->add('numero_mobile', TextType::class, [
                'label' => 'Numero mobile',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Numero mobile',
                ],
            ])
            ->add('genre', ChoiceType::class, [
                'label' => 'Genre',
                'required' => true,
                'choices' => [
                    'Homme' => 'Homme',
                    'Femme' => 'Femme',
                    'Autre' => 'Autre',
                ],
                'expanded' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Description',
                ],
            ])
            ->add('code_postal', TextType::class, [
                'label' => 'Code postal',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Code postal',
                ],
            ])
            ->add('isVerified', RadioType::class, [
                'label' => 'Activer le compte',
            
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
