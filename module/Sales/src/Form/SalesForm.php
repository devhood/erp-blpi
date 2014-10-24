<?php
namespace Sales\Form;

use Zend\Form\Form;

class SalesForm extends Form
{
  public function __construct($em)
  {
    parent::__construct('sales');

    $this->add( array(
      'name' => 'paymentNo',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'paymentNo',
      )
    ));
    $this->add( array(
      'name' => 'performaInvoiceNo',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'performaInvoiceNo',
      )
    ));
    //credit memo
    $this->add( array(
      'name' => 'cmno',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'cmno',
      )
    ));

    //return
    $this->add( array(
      'name' => 'rmrno',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'rmrno',
      )
    ));
    //delivery
    $this->add( array(
      'name' => 'drno',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'drno',
      )
    ));

    //sales invoice
    $this->add(array(
      'name' => 'sino',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'sino',
      ),
    ));

    //sales order
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
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
        'object_manager'  => $em,
        'target_class'    => 'Database\Entity\TransactionTypes',
        'property'           => 'transactionTypeName',
        'display_empty_item' => true,
        'empty_item_label'   => '---'
      ),
      'attributes' => array(
        'class' => 'select2me form-control',
        'tabindex' => '1',
        'id' => 'transactionTypeId',
      ),
    ));


    $this->add(array(
      'name' => 'customers[customerId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
        'object_manager'  => $em,
        'target_class'    => 'Database\Entity\Customers',
        'property'           => 'companyName',
        'display_empty_item' => true,
        'empty_item_label'   => '---'
      ),
      'attributes' => array(
        'class' => 'select2me form-control',
        'tabindex' => '1',
        'id' => 'customerId',
      ),
    ));




    $this->add(array(
      'name' => 'inventoryLocations[inventoryLocationId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
        'object_manager'  => $em,
        'target_class'    => 'Database\Entity\InventoryLocations',
        'property'           => 'LocationName',
        'display_empty_item' => true,
        'empty_item_label'   => '---'
      ),
      'attributes' => array(
        'class' => 'select2me form-control',
        'tabindex' => '1',
        'id' => 'inventoryLocationId',
      ),
    ));



    $this->add(array(
      'name' => 'shippingAddress[addressId]',
  'type' => 'DoctrineModule\Form\Element\ObjectSelect',
  'options' => array(
    'object_manager'  => $em,
    'target_class'    => 'Database\Entity\Address',
    'property'           => 'AddressId',
    'display_empty_item' => true,
    'empty_item_label'   => '---',
    'label_generator' => function($row) {
        return $row->getStreetLandmark() . ', '
            . $row->getCity()->getCityName() . ', '
            . $row->getProvince()->getProvinceName() . ', '
            . $row->getCountry()->getCountryName() . ', '
            . $row->getZipcode();
    },
  ),
  'attributes' => array(
    'class' => 'select2me form-control',
    'tabindex' => '1',
    'id' => 'addressId',
  ),
));



    $this->add(array(
      'name' => 'billingAddress[addressId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
  'options' => array(
    'object_manager'  => $em,
    'target_class'    => 'Database\Entity\Address',
    'property'           => 'AddressId',
    'display_empty_item' => true,
    'empty_item_label'   => '---',
    'label_generator' => function($row) {
        return $row->getStreetLandmark() . ', '
            . $row->getCity()->getCityName() . ', '
            . $row->getProvince()->getProvinceName() . ', '
            . $row->getCountry()->getCountryName() . ', '
            . $row->getZipcode();
    },
  ),
  'attributes' => array(
    'class' => 'select2me form-control',
    'tabindex' => '1',
    'id' => 'addressId',
  ),
));


    $this->add(array(
    'name' => 'orderSource[orderSourceId]',
    'type' => 'DoctrineModule\Form\Element\ObjectSelect',
    'options' => array(
    'object_manager'  => $em,
    'target_class'    => 'Database\Entity\OrderSource',
    'property'           => 'orderSourceName',
    'display_empty_item' => true,
    'empty_item_label'   => '---',
  ),
  'attributes' => array(
    'class' => 'select2me form-control',
    'tabindex' => '1',
    'id' => 'orderSourceId',
  ),
));



    $this->add(array(
      'name' => 'shippingModes[shippingModeId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
      'object_manager' => $em,
      'target_class' => 'Database\Entity\ShippingModes',
      'property'           => 'shippingModeName',
      'display_empty_item' => true,
      'empty_item_label'   => '---',
      ),
       'attributes' => array(
            'class' => 'select2me form-control',
            'tabindex' => '1',
            'id' => 'shippingModeId',
        ),
    ));

    $this->add(array(
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'name' => 'users[userId]',
      'options' => array(
      'object_manager' => $em,
      'target_class' => 'Database\Entity\Users',
      'property'           => 'userName',
      'display_empty_item' => true,
      'empty_item_label'   => '---',
      ),
       'attributes' => array(
            'class' => 'select2me form-control',
            'tabindex' => '1',
            'id' => 'userId',
        ),
    ));


    $this->add(array(
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'name' => 'paymentTerms[paymentTermId]',
      'options' => array(
      'object_manager' => $em,
      'target_class' => 'Database\Entity\PaymentTerms',
      'property'           => 'paymentTermName',
      'display_empty_item' => true,
      'empty_item_label'   => '---',
      ),
       'attributes' => array(
            'class' => 'select2me form-control',
            'tabindex' => '1',
            'id' => 'paymentTermId',
        ),
    ));




    $this->add(array(
      'name' => 'deliveryDate',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control date-picker',
        'id' => 'deliveryDate',
      ),
    ));
    $this->add(array(
        'name' => 'orderedBy',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'id' => 'orderedBy',
        ),
    ));



    $this->add(array(
      'name' => 'priceTypes[priceTypeId]',
        'type' => 'DoctrineModule\Form\Element\ObjectSelect',
     'options' => array(
      'object_manager' => $em,
      'target_class' => 'Database\Entity\PriceTypes',
      'property'           => 'priceTypeName',
      'display_empty_item' => true,
      'empty_item_label'   => '---',
      ),
       'attributes' => array(
            'class' => 'select2me form-control',
            'tabindex' => '1',
            'id' => 'priceTypeId',
        ),
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
        'readonly' => 'readonly',
      ),
    ));

    $this->add( array(
      'name' => 'items',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'items',
        'readonly' => 'readonly',
      )
    ));
    $this->add( array(
      'name' => 'sales',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'sales',
        'readonly' => 'readonly',
      )
    ));
    $this->add( array(
      'name' => 'totalVat',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'totalVat',
        'readonly' => 'readonly',
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

  }
}
