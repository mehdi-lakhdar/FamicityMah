<?php
/**
 * Created by PhpStorm.
 * User: adm
 * Date: 27/06/2017
 * Time: 21:41
 */

namespace Esprit\FamycityBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class User2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('prenom')
            ->add('roles', ChoiceType::class, array('label' =>'Rôle ', 'choices' =>array('Mére' =>'ROLE_MERE', 'Enfant' =>'ROLE_ENFANT'), 'required' =>true, 'multiple' =>true,))

            ->add('save',SubmitType::class)
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FamycityBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esprit_famycitybundle_user';
    }
}