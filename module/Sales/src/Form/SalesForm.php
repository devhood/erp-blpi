<?php

namespace Sales\Form;

use Zend\Form\Form;

class SalesForm extends Form {
	public function __construct($em) {
		parent::__construct ( 'sales' );
		
		$this->add ( array (
				'name' => 'orno',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'orno',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'prno',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'prno',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'proformaInvoiceNo',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'proformaInvoiceNo',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalItemsReturn',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalItemsReturn',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalItems',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalItems',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalVatReturn',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalVatReturn',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalVat',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalVat',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalSalesReturn',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalSalesReturn',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalSales',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalSales',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'grandTotal',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'grandTotal',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'paymentNo',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'paymentNo',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'prono',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'prono',
						'readonly' => 'readonly' 
				) 
		) );
		
		// credit memo
		$this->add ( array (
				'name' => 'cmno',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'cmno',
						'readonly' => 'readonly' 
				) 
		) );
		
		// return
		$this->add ( array (
				'name' => 'rmrno',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'rmrno',
						'readonly' => 'readonly' 
				) 
		) );
		
		// delivery
		$this->add ( array (
				'name' => 'drno',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'drno',
						'readonly' => 'readonly' 
				) 
		) );
		
		// sales invoice
		$this->add ( array (
				'name' => 'sino',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'sino',
						'readonly' => 'readonly' 
				) 
		) );
		
		// sales order
		$this->add ( array (
				'name' => 'sono',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'sono',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'transactionType[transactionTypeId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\TransactionTypes',
						'property' => 'transactionTypeName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'transactionTypeId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'customer[customerId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Customers',
						'property' => 'companyName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'customerId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'inventoryLocation[inventoryLocationId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\InventoryLocations',
						'property' => 'locationName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'inventoryLocationId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'shippingAddressId',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Address',
						'property' => 'addressName',
						'display_empty_item' => true,
						'label_generator' => function ($row) {
							return $row->getStreetLandmark () . ', ' . $row->getCity ()->getCityName () . ', ' . $row->getProvince ()->getProvinceName () . ', ' . $row->getCountry ()->getCountryName () . ', ' . $row->getZipcode ();
						} 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shippingAddressId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'billingAddressId',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Address',
						'property' => 'addressName',
						'display_empty_item' => true,
						'label_generator' => function ($row) {
							return $row->getStreetLandmark () . ', ' . $row->getCity ()->getCityName () . ', ' . $row->getProvince ()->getProvinceName () . ', ' . $row->getCountry ()->getCountryName () . ', ' . $row->getZipcode ();
						} 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'billingAddressId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'orderSource[orderSourceId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\OrderSource',
						'property' => 'orderSourceName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'orderSourceId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'shippingMode[shippingModeId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\ShippingModes',
						'property' => 'shippingModeName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shippingModeId' 
				) 
		) );
		
		$this->add ( array (
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'name' => 'user[userId]',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Users',
						'property' => 'userName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'userId' 
				) 
		) );
		
		$this->add ( array (
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'name' => 'paymentTerm[paymentTermId]',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\PaymentTerms',
						'property' => 'paymentTermName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'paymentTermId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'deliveryDate',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control date-picker',
						'id' => 'deliveryDate' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'orderedBy',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'orderedBy' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'priceType[priceTypeId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\PriceTypes',
						'property' => 'priceTypeName',
						'display_empty_item' => true 
				),
				'attributes' => array (
						'class' => 'form-control select2me',
						'tabindex' => '1',
						'id' => 'priceTypeId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'salesNotes',
				'type' => 'Textarea',
				'attributes' => array (
						'class' => 'text-area form-control',
						'id' => 'salesNotes',
						'rows' => '1' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'percentVat',
				'type' => 'Text ',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'percentVat' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'items',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'items',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'sales',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'sales',
						'readonly' => 'readonly' 
				) 
		) );
		$this->add ( array (
				'name' => 'totalVat',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalVat',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'totalSales',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'totalSales',
						'readonly' => 'readonly' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'discount',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'discount',
						'readonly' => 'readonly'
				)
		) );
	}
}
