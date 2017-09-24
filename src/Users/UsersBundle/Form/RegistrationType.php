<?php
/**
 * Created by PhpStorm.
 * User: fdurano
 * Date: 23/09/17
 * Time: 18:08
 */

namespace Users\UsersBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', RepeatedType::class, array(
            'type' => EmailType::class,
            'options' => array('translation_domain' => 'FOSUserBundle'),
            'first_options' => array('label' => 'form.email'),
            'second_options' => array('label' => 'form.email_confirmation')
        ))
        ->add('age', DateType::class, array(
            'label' => 'form.birthdate'
        ))
        ->add('gender', ChoiceType::class, array(
            'choices' => array(
                'Male' => 'Male',
                'Female' => 'Female',
                'Unknown' => 'Unknown',
            ),
            'expanded' => true,
        ))
        ->add('tzoffset', ChoiceType::class, array(
            'choices' => array(
                '(GMT -12:00) Eniwetok, Kwajalein' => '-12',
                '(GMT -11:00) Midway Island, Samoa' => '-11',
                '(GMT -10:00) Hawaii' => '-10',
                '(GMT -9:00) Alaska' => '-9',
                '(GMT -8:00) Pacific Time (US & Canada)' => '-8',
                '(GMT -7:00) Mountain Time (US & Canada)' => '-7',
                '(GMT -6:00) Central Time (US & Canada), Mexico City' => '-6',
                '(GMT -5:00) Eastern Time (US & Canada), Bogota, Lima' => '-5',
                '(GMT -4:30) Caracas' => '-4.5',
                '(GMT -4:00) Atlantic Time (Canada), La Paz, Santiago' => '-4',
                '(GMT -3:30) Newfoundland' => '-3.5',
                '(GMT -3:00) Brazil, Buenos Aires, Georgetown' => '-3',
                '(GMT -2:00) Mid-Atlantic' => '-2',
                '(GMT -1:00 hour) Azores, Cape Verde Islands' => '-1',
                '(GMT) Western Europe Time, London, Lisbon, Casablanca' => '0',
                '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris' => '1',
                '(GMT +2:00) Kaliningrad, South Africa, Cairo' => '2',
                '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg' => '3',
                '(GMT +3:30) Tehran' => '3.5',
                '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi' => '4',
                '(GMT +4:30) Kabul' => '4.5',
                '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent' => '5',
                '(GMT +5:30) Mumbai, Kolkata, Chennai, New Delhi' => '5.5',
                '(GMT +5:45) Kathmandu' => '5.75',
                '(GMT +6:00) Almaty, Dhaka, Colombo' => '6',
                '(GMT +6:30) Yangon, Cocos Islands' => '6.5',
                '(GMT +7:00) Bangkok, Hanoi, Jakarta' => '7',
                '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong' => '8',
                '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk' => '9',
                '(GMT +9:30) Adelaide, Darwin' => '9.5',
                '(GMT +10:00) Eastern Australia, Guam, Vladivostok' => '10',
                '(GMT +11:00) Magadan, Solomon Islands, New Caledonia' => '11',
                '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka' => '12'),
            'preferred_choices' => array('(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris', '1')
        ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

}
