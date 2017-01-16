<?php

namespace Users\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MembercpType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, array(
                'choices' => array(
                    'Male' => 'Male',
                    'Female' => 'Female',
                    'Unknown' => 'Unknown'),
                'choices_as_values' => true,'multiple'=>false,'expanded'=>true,
                'data'=> 'Unknown'
            ))
            ->add('age', DateType::class, array(
                'required' => true,
                'years' => $this->buildYearChoices()
            ))
            ->add('country', CountryType::class)
            ->add('title', TextType::class, array('required' => false,
                'attr' => array('class' => 's')
            ))
            ->add('moods', ChoiceType::class, array('attr' => array('class' => 's')))
            ->add('clear', ResetType::class)
        ;
    }

    public function buildYearChoices() {
        $yearsBefore = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y") - 100));
        $yearsAfter = date('Y', mktime(0, 0, 0, date("m"), date("d"), date("Y")));
        return array_combine(range($yearsBefore, $yearsAfter), range($yearsBefore, $yearsAfter));
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
