<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description', TextareaType::class)
            ->add('content', TextareaType::class, ['attr' => ['class' => 'ckeditor']])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name'
            ]);
        if ($options['security']->isGranted('ROLE_MANAGE_PRODUCTS')) {
            $builder->add('validated', ChoiceType::class, [
                'label' => 'Mettre en ligne ?',
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
            'security' => Security::class,
        ]);
    }
}
