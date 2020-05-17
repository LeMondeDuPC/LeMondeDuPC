<?php

namespace App\Form;

use App\Entity\Locations;
use App\Entity\Posts;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class PostsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description', TextareaType::class)
            ->add('content', TextareaType::class, ['attr' => ['class' => 'ckeditor']])
            ->add('location', EntityType::class, [
                'class' => Locations::class,
                'choice_label' => 'name'
            ]);
        if ($options['security']->isGranted('ROLE_MANAGE_POSTS')) {
            $builder->add('validated', ChoiceType::class, [
                'label' => 'Mettre en ligne ?',
                'choices' => [
                    'Oui' => 1,
                    'Non' => 0
                ]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Posts::class,
            'security' => Security::class
        ]);
    }
}
