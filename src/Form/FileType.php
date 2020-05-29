<?php

namespace App\Form;

use App\Entity\File;
use App\Entity\Product;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', \Symfony\Component\Form\Extension\Core\Type\FileType::class, [
                'mapped' => false,
                'required' => false
            ])->add('product', EntityType::class, [
                'required' => false,
                'class' => Product::class,
                'choice_label' => 'title'
            ])->add('user', EntityType::class, [
                'required' => false,
                'class' => User::class,
                'choice_label' => 'username'
            ])->add('description');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => File::class,
        ]);
    }
}
