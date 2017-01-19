<?php

namespace Users\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\FormBuilderInterface;

class SignupType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class)
            ->add('age', DateType::class, array(
                'format' => 'dd - MMMM - yyyy',
                'years' => range(date('Y'), date('Y')-100)
            ))
            ->add('email', EmailType::class)
            ->add('email_confirm', EmailType::class)
            ->add('password', PasswordType::class)
            ->add('password_confirm', PasswordType::class)
            ->add('country', CountryType::class)
            ->add('client', TextType::class)
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'Male',
                    'Female' => 'Female',
                    '(unspecified)' => 'Unknown'),
                'choices_as_values' => true,
                'multiple'=>false,
                'expanded'=>true
            ))
            ->add('tzoffset', TimezoneType::class)
            ->add('clear', ResetType::class)
        ;
    }
}
