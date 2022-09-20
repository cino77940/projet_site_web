<?php

namespace App\Form;

use App\Entity\Demande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if($options['choix']=="autres"){
            $builder
                ->add('categorie', null, [
                    'label' => 'Catégorie',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Catégorie',
                    ],
                ])
                ->add('sousCategorie', null, [
                    'label' => 'Sous-catégorie',
                    'attr' => [
                        'class' => 'form-control',
                        'placeholder' => 'Sous-catégorie',
                    ],
                ])
                ;
        }
        $builder
            ->add('titre', null, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre',
                ],
            ])
            ->add('description', null, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Description',
                ],
            ])
            ->add('startDate', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Date de début',
                ],
            ])
            ->add('localisation', null, [
                'label' => 'Localisation',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Localisation',
                ],
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Image',
                ],
            ])
            ->add('vehicule' , null, [
                'label' => 'Véhicule',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Véhicule',
                ],
                
            ])
            ->add('budget', null, [
                'label' => 'Budget',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Budget',
                ],
            ])
            ->add('Publier', SubmitType::class
            , [
                'attr' => [
                    'class' => 'btn btn-dark',
                    'style' => 'margin-top: 10px',
                    'placeholder' => 'Publier',
                    'onclick' => 'return confirm("Voulez-vous vraiment publier cette demande ?")',
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Demande::class,
            'choix'=>null,
        ]);
    }
}
