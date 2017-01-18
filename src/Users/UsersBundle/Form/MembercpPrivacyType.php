<?php

namespace Users\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembercpPrivacyType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('privacy', ChoiceType::class, array(
                'choices' => array(
                    'Strong' => 'strong',
                    'Normal' => 'normal',
                    'Low' => 'low'),
                'label' => 'Privacy',
                'multiple'=>false,
                'expanded'=>true
            ))
            ->add('acceptpms', ChoiceType::class, array(
                'choices' => array(
                    'From All' => 'yes',
                    'From Staff Only' => 'no'),
                'label' => 'Accept PMs',
                'multiple'=>false,
                'expanded'=>true
            ))
            ->add('clear', ResetType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Users\UsersBundle\Entity\Users'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'users_usersbundle_users';
    }


}
