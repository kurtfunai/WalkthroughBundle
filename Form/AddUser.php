<?php
/**
 * Created by http://kurtfunai.com
 * Date: 11-12-22
 */

namespace kurtfunai\WalkthroughBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AddUser extends AbstractType
{
    /**
     * Builds the AddUser form
     * @param  \Symfony\Component\Form\FormBuilder $builder
     * @param  array $options
     * @return void
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('middleName');
        $builder->add('group');
    }

    /**
     * Returns the default options for this form type.
     * @param array $options
     * @return array The default options
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'kurtfunai\WalkthroughBundle\Entity\User'
        );
    }

    /**
     * Gets the unique name of this form type
     * @return string
     */
    public function getName()
    {
        return 'add_user';
    }
}