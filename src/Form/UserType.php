<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\Length;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email', EmailType::class)
            ->add('plainPassword', PasswordType::class, [
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit faire au moins {{ limit }} caractères',
                        'max' => 4096,
                    ]),
                ],
            ]);
        if ($options['security']->isGranted('ROLE_MANAGE_USERS') and $options['data']->getId() !== $options['security']->getUser()->getId()) {
            $builder->add('validated', ChoiceType::class, [
                'label' => 'Compte validé ?',
                'choices' => [
                    'Oui' => true,
                    'Non' => false
                ]
            ])
                ->add('roles', ChoiceType::class, [
                    'expanded' => true,
                    'multiple' => true,
                    'label' => 'Rôles',
                    'choices' => $options['roles']
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'security' => Security::class,
            'roles' => [],
        ]);
    }
}