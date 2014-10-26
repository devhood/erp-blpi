<?php
namespace User\Form;

use Zend\Form\Form;

class UserAccessListForm extends Form
{
    public function __construct($om = null)
    {
        parent::__construct('formUserAccessList');



        $this->add( array(
            'name' => 'accessName',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'accessName',
            )
        ));
        $this->add( array(
            'name' => 'permission',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'permission',
            )
        ));


    }
}
