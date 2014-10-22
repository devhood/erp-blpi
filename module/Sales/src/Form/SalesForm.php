<?php
namespace Sales\Form;

use Zend\Form\Form;

class SalesForm extends Form
{
  public function __construct($name = null)
  {
    parent::__construct('sales');

    $this->add( array(
        'name' => 'sono',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'placeholder' => 'Enter Sales Order Number',
            'id' => 'sono',
        )
    ));

$this->add(array(
    'name' => 'transactionType[transactionTypeId]',
    'type' => 'Select',
    'attributes' => array(
        'class' => 'select2me form-control',
        'data-placeholder' => 'Choose Transaction Type',
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
    'name' => 'customer[customerId]',
    'type' => 'Select',
    'attributes' => array(
        'class' => 'select2me form-control',
        'data-placeholder' => 'Choose Customer',
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
    'name' => 'inventoryLocation[inventoryLocationId]',
    'type' => 'Select',
    'attributes' => array(
        'class' => 'select2me form-control',
        'data-placeholder' => 'Choose Inventory Location',
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
        'data-placeholder' => 'Choose Shipping Address',
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
        'data-placeholder' => 'Choose Billing Address',
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
        'data-placeholder' => 'Choose Order Source ',
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
        'data-placeholder' => 'Choose Shipping Mode',
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
        'data-placeholder' => 'Choose Sales Executive',
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
        'data-placeholder' => 'Choose Payment Terms',
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
        'data-placeholder' => 'Choose Delivery Date',
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
        'data-placeholder' => 'Choose Ordered By',
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
        'data-placeholder' => 'Choose Price Type',
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
        'data-placeholder' => 'Choose Promo Id',
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
						'placeholder' => 'Enter Description',
						'id' => 'notes',
						'rows' => '6'
				)
		));

$this->add(array(
    'name' => 'vatPercentage[vatPercentageId]',
    'type' => 'Select',
    'attributes' => array(
        'class' => 'select2me form-control',
        'data-placeholder' => 'Choose Vat Percentage',
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
            'placeholder' => 'Enter Items',
              'id' => 'Items',
        )
    ));
    $this->add( array(
        'name' => 'sales',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'placeholder' => 'Enter Sales',
              'id' => 'sales',
        )
    ));
    $this->add( array(
        'name' => 'vat',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'placeholder' => 'Enter VAT',
              'id' => 'vat',
        )
    ));
    $this->add( array(
        'name' => 'total',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'placeholder' => 'Enter VAT',
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
        'data-placeholder' => 'Choose Items',
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
        'placeholder' => 'Enter Quantity',
          'id' => 'quantity',

    )
));

$this->add( array(
    'name' => 'price',
    'type' => 'Text',
    'attributes' => array(
        'class' => 'form-control',
        'placeholder' => 'Enter Quantity',
          'id' => 'quantity',

    )
));

$this->add(array(
    'name' => 'discount[discountId]',
    'type' => 'Select',
    'attributes' => array(
        'class' => 'select2me form-control',
        'data-placeholder' => 'Choose Discount',
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
        'data-placeholder' => 'Choose Freebie',
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
