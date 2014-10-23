<?php
namespace Sales\Form;

use Zend\Form\Form;

class OrderForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('sales');

        $this->add( array(
                'name' => 'sono'    ,
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
                'name' => 'customers',
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
                'name' => 'Address[shippingAddressId]',
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
                'name' => 'Address[billingAddressId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => ' billingAddress',
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
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
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
                    'id' => 'salesExecutiveId',
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
                    'id' => 'paymentTerms',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));


        $this->add(array(
                'name' => 'sales[deliveryDate]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'deliveryDateId',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));

        $this->add(array(
                'name' => 'sales[orderedBy]',
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
                    'id' => 'orderedBy',
                ),
                'options' => array(
        // 						'value_options' => array(
        // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
        // 						),
                )
        ));

        $this->add(array(
                'name' => 'sales[promo]',
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
                'name' => 'sales[percentageVat]',
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








        //Ordered Items Value for Modal
        $this->add(array(
                'name' => 'products[productId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'itemsId',
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
                    'id' => 'freebieId',
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
                    'id' => 'total',

                )
        ));


    }
}
