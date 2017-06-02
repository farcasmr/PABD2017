<?php

namespace Uab\FlorinBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class StudentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nume')
            ->add('prenume')
            ->add('dataNasterii', BirthdayType::class)
            ->add('specializare')
            ->add('universitate', EntityType::class, array(
                'class' => 'Uab\FlorinBundle\Entity\Universitate',
                'choice_label' => 'nume',
                'data' => $options['preselectedUni'],
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Uab\FlorinBundle\Entity\Student',
            'preselectedUni' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'uab_florinbundle_student';
    }


}
