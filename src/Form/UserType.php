<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;

/**
 * Class UserType
 * @package App\Form
 */
class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, [
                'label' => 'Identifiant',
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'Mot de passe',
                'attr' => [
                    'autocomplete' => 'off',
                ],
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
            $builder
                ->add('validated', ChoiceType::class, [
                    'label' => 'Compte validé ?',
                    'choices' => [
                        'Oui' => true,
                        'Non' => false,
                    ],
                ])
                ->add('roles', ChoiceType::class, [
                    'label' => 'Rôles',
                    'expanded' => true,
                    'multiple' => true,
                    'choices' => $options['roles'],
                ]);
        }
        if ($options['security']->isGranted('ROLE_USER') and $options['data']->getId() === $options['security']->getUser()->getId()) {
            $builder
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
                ->add('newsletter', ChoiceType::class, [
                    'label' => 'Inscription newsletter ?',
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
            'data_class' => User::class,
            'security' => Security::class,
            'roles' => [],
        ]);
    }
}
