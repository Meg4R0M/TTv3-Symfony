<?php

namespace Users\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('added')
            ->add('ip')
            ->add('uploaded')
            ->add('downloaded')
            ->add('donated')
            ->add('notifs')
            ->add('modcomment')
            ->add('warned')
            ->add('lastBrowse')
            ->add('forumbanned')
            ->add('commentpm')
            ->add('passkey')
            ->add('comments')
            ->add('stylesheet')
            ->add('info')
            ->add('avatar')
            ->add('country')
            ->add('language')
            ->add('acceptpms')
            ->add('title')
            ->add('gender')
            ->add('client')
            ->add('age')
            ->add('signature')
            ->add('team')
            ->add('tzoffset')
            ->add('hideshoutbox')
            ->add('moods')
            ->add('privacy')
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
