<?php
namespace Sales\Form;

use Zend\Form\Form;

class CreditmemoForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('sales');
        
        $this->add( array(
            'name' => 'cmno',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'cmno',
            )
        ));

        $this->add( array(
            'name' => 'rmrno',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'rmrno',
            )
        ));
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
                'name' => 'shippingAddress[AddressId]',
                'type' => 'Select',
                'attributes' => array(
                    'class' => 'select2me form-control',
                    'tabindex' => '1',
                    'id' => 'shippingAddress[',
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
                    'id' => 'paymentTerms',
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
                'name' => 'promos[promoId]',
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
                'name' => 'vatPercentage[vatPercentageId]',
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
                'name' => 'vat',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                      'id' => 'vat',
                )
        ));
        $this->add( array(
                'name' => 'total',
                'type' => 'Text',
                'attributes' => array(
                    'class' => 'form-control',
                    'id' => 'vat',
                    'readonly' => 'readonly',
                )
        ));
        $this->add( array(
            'name' => 'qtyreturn',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'qtyReturn',
            )
        ));
        



        //Invoice Ordered Items Value
        $this->add(array(
                'name' => 'sales_items[salesItemId]',
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
                    'id' => 'freebieId',
                ),
                'options' => array(
            // 						'value_options' => array(
            // 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
            // 						),
                )
        ));

        $this->add(array( 'name' => 'totalSales', 'type' => 'Text', 'attributes'=> array( 'class' => 'form-control', 'id'=> 'totalSales') ));

    }
}
