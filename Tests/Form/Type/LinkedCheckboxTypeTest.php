<?php

namespace Codepeak\LinkedCheckboxBundle\Tests\Form\Type;

use Codepeak\LinkedCheckboxBundle\Form\Type\LinkedCheckboxType;
use Symfony\Component\Form\Tests\Extension\Core\Type\TypeTestCase;

class LinkedCheckboxTypeTest extends TypeTestCase
{

    public function testBindValidData()
    {
        // Set the value
        $formData = array(
            'checked' => true,
            'route' => '/',
            'link_text' => 'make sure to visit %link_start%github.com/codepeak/LinkedCheckboxBundle%link_end%',
            'link_class' => 'handle-me-with-js',
        );

        // Setup a new type
        $type = new LinkedCheckboxType();

        // Create a new form
        $form = $this->factory->create($type);

        // Bind data to form
        $form->bind($formData);

        // Run some basic tests
        $this->assertTrue($form->isSynchronized());
        $this->assertEquals('linkedcheckbox', $type->getName());
        $this->assertTrue(method_exists($type, 'buildView'));
        $this->assertTrue(method_exists($type, 'setDefaultOptions'));
        $this->assertTrue(method_exists($type, 'getParent'));
        $this->assertTrue(method_exists($type, 'getName'));
    }

}