<?php

namespace Esprit\FamycityBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('categorie')





            ->add('libelle')->add('cost')
           /* ->add('participants',CollectionType::class,
                array('entry_type'   => User::class,
                    'entry_options'  => array('attr' => array('class' => 'id'))))



            ->setMethod('GET')
           ->add('dateDebut',DateType::class)

           ->add('dateFin',DateType::class)
           */
            ->add('save',SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\FamycityBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'esprit_famycitybundle_event';
    }


}
