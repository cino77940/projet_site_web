<?php

namespace App\Form;

use App\Entity\Carousel;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('image_name', TextType::class, [
                'label' => 'Nom de l\'image',
                'required' => true,
            ])

            ->add('imageFile', FileType::class,[
                "label"=>"Image :",
                "required"=>true
            ])

            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'required' => true,
            ])
            
            ->add('texte', TextareaType::class, [
                'label' => 'Texte',
                'required' => true,
            ])
            // ->add('updated_at')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
}
