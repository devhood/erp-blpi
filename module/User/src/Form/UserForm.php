<?php
namespace User\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($om = null)
    {
        parent::__construct('user');



        $this->add( array(
            'name' => 'userName',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'userName',
            )
        ));
        $this->add( array(
            'name' => 'fullName',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'fullName',
            )
        ));
        $this->add( array(
            'name' => 'password',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'password',
            )
        ));
        $this->add(array(
        'name' => 'designations[designationId]',
        'type' => 'DoctrineModule\Form\Element\ObjectSelect',
        'options' => array(
          'object_manager' => $om,
          'target_class'   => 'Database\Entity\Designations',
          'property'       => 'designationName',
        ),
        'attributes' => array(
            'class' => 'select2me form-control',
            'tabindex' => '1',
            'id' => 'productId',
        ),

        ));

        $this->add( array(
            'name' => 'userStatus',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'userStatus',
            )
        ));
        $this->add( array(
            'name' => 'email',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'email',
            )
        ));
        $this->add( array(
            'name' => 'mobile',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'mobile',
            )
        ));

    }
}
