<?php
namespace Sales\Form;

use Zend\Form\Form;

class InvoiceForm extends Form
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

        $this->add(array(
            'name' => 'sino',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'sino',
            ),
            'options' => array(
                // 						'value_options' => array(
                // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
                // 						),
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
                'name' => 'transactionTypes[transactionTypeId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'transactionTypeId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
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
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
             )
        ));



        $this->add(array(
                'name' => 'inventoryLocations[inventoryLocationId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'Inventory Location',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
              )
        ));


        $this->add(array(
                'name' => 'shippingAddress[addressId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'addressId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
              )
        ));



        $this->add(array(
                'name' => 'billingAddress[AddressId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => ' addressId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
             )
        ));


        $this->add(array(
                'name' => 'orderSource[orderSourceId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => ' orderSourceId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' f=> $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
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
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
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
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));


        $this->add(array(
                'name' => 'paymentTerms[paymentTermId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'paymentTermsId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));


        $this->add(array(
                'name' => 'deliveryDate',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control date-picker',

                    'id' => 'deliveryDate',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));

        $this->add(array(
                'name' => 'orderedBy[orderedById]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'orderedBy',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
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
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));

        $this->add(array(
                'name' => 'promo[promoId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'promoId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
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

        $this->add(array(
                'name' => 'percentVat',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'percentVat',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));
        $this->add( array(
                'name' => 'items',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'items',
                )
        ));
        $this->add( array(
                'name' => 'sales',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'sales',
                )
        ));
        $this->add( array(
                'name' => 'totalVat',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                      'id' => 'totalVat',
                )
        ));
        $this->add( array(
                'name' => 'totalSales',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'totalSales',
                    'readonly' => 'readonly',
                )
        ));



        //Invoice Items Value for Modal
        $this->add(array(
                'name' => 'salesItems[salesItemId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'salesItemId',
                ),
                'options' => array(
            // 						'value_options' => array(
            // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
            // 						),
                )
        ));

        $this->add( array(
                'name' => 'quantity',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'quantity',

                )
        ));

        $this->add( array(
                'name' => 'price',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'quantity',

                )
        ));

        $this->add(array(
                'name' => 'discounts[discountId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'discountId',
                ),
                'options' => array(
            // 						'value_options' => array(
            // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
            // 						),
                )
        ));

        $this->add(array(
                'name' => 'salesItems[freebie]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'freebie',
                ),
                'options' => array(
            // 						'value_options' => array(
            // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
            // 						),
                )
        ));

    
        $this->add( array(
                'name' => 'totalSales',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'totalSales',

                )
        ));
    }
}
