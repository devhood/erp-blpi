<?php
namespace Sales\Form;

use Zend\Form\Form;

class OrderForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('sales');

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
                'name' => 'shippingAddress[shippingAddressId]',
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
                'name' => 'billingAddress[billingAddressId]',
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
                'name' => 'shippingMode[shippingModeId]',
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
                'name' => 'salesExecutive[salesExecutiveId]',
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
                'name' => 'paymentTerms[paymentTermsId]',
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
                'name' => 'deliveryDate[deliveryDateId]',
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
                'name' => 'priceType[priceTypeId]',
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
                    'id' => 'Items',
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



        //Ordered Items Value
        $this->add(array(
                'name' => 'items[itemsId]',
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
                'name' => 'discount[discountId]',
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
                'name' => 'freebie[freebieId]',
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
    }
}
