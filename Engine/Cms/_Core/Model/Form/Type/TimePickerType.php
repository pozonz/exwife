<?php

namespace ExWife\Engine\Cms\_Core\Model\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TimePickerType extends AbstractType
{
    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'timepicker';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'compound' => false
        ));
    }
}
