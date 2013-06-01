<?php

namespace Codepeak\LinkedCheckboxBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class LinkedCheckboxType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars = array_replace($view->vars, array(
            'checked' => null !== $form->getViewData(),
            'route' => $options['route'],
            'link_text' => $options['link_text'],
            'link_class' => $options['link_class']
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'checked' => null,
            'route' => null,
            'link_text' => null,
            'link_class' => null,
            'text' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'form';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'linkedcheckbox';
    }
}