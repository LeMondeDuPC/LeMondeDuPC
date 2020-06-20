<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\File;

/**
 * Class ProductType
 * @package App\Form
 */
class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('content', CKEditorType::class, [
                'label' => 'Contenu',
            ])
            ->add('category', EntityType::class, [
                'label' => 'Catégorie associée',
                'class' => Category::class,
                'choice_label' => 'name',
            ])
            ->add('file', FileType::class, [
                'label' => 'Miniature',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg',
                            'image/gif'
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image de type : png, jpeg/jpg ou gif',
                    ]),
                ],
            ])
            ->add('file_description', TextType::class, [
                'label' => 'Description de la miniature',
                'mapped' => false,
                'required' => false,
            ]);
        if ($options['security']->isGranted('ROLE_MANAGE_PRODUCTS')) {
            $builder
                ->add('validated', ChoiceType::class, [
                    'label' => 'Mettre en ligne ?',
                    'choices' => [
                        'Oui' => true,
                        'Non' => false,
                    ],
                ]);
        }
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'security' => Security::class,
        ]);
    }
}
