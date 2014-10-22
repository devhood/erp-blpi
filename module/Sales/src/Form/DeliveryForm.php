<?php
namespace Sales\Form;

use Zend\Form\Form;

class DeliveryForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('sales');

        $this->add( array(
                'name' => 'drno',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'drno',
                )
        ));

         $this->add( array(
                'name' => 'sono',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'sono',
                )
        ));

         $this->add(array(
                'name' => 'trasanctionTypes[transactionTypeId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'transactionTypeId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));
    }
}
