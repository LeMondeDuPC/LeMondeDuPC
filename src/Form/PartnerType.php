<?php

namespace App\Form;

use App\Entity\Partner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PartnerType
 * @package App\Form
 */
class PartnerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('link', UrlType::class, [
                'label' => 'Lien',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('visibled_in_list', ChoiceType::class, [
                'label' => 'Visible en tant que partenaire ?',
                'choices' => [
                    'Oui' => true,
                    'Non' => false,
                ],
            ])
            ->add('rss', ChoiceType::class, [
                'label' => 'Flux RSS',
                'choices' => [
                    'Non' => false,
                    'Oui' => true,
                ],
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Partner::class,
        ]);
    }
}
