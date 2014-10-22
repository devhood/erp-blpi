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

        $this->add(array(
                'name' => 'customers[customerId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'customerId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'inventorylocations[inventoryLocationId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'inventoryLcationId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'shippingAddress[AddressId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'shippingAddress',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'billingAddress[AddressId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'billingAddress',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'orderSource[orderSourceId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'orderSourceId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'shippingModes[shippingModeId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'shippingModeId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'users[userId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'userId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add(array(
                'name' => 'paymentTerms[paymentTermId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'paymentTermId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

        $this->add( array(
                'name' => 'deliveryDate',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control date-picker',
                    'id' => 'deliveryDate',
                )
        ));

         $this->add(array(
                'name' => 'priceTypes[priceTypeId]',
                'type' => 'Select',
                'attributes' => array(
                        'class' => 'select2me form-control',
                        'tabindex' => '1',
                        'id' => 'priceTypeId',
                ),
                'options' => array(
//                      'value_options' => array(
//                              'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
//                      ),
                )
        ));

       $this->add( array(
            'name' => 'notes',
            'type' => 'Textarea',
            'attributes' => array(
                    'class' => 'wysihtml5 form-control',
                    'id' => 'notes',
                    'rows' => '6'
                )
        ));
    }
}
