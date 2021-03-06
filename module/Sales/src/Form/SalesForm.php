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
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'transactionTypeId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'customer[customerId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Customers',
						'property' => 'companyName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'customerId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'inventoryLocation[locationId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\InventoryLocations',
						'property' => 'locationName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'inventoryLocationId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'shippingAddress[addressId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Address',
						'property' => 'addressName',
						'display_empty_item' => true,
						'empty_item_label' => ' ',
						'label_generator' => function ($row) {
							return $row->getStreetLandmark () . ', ' . $row->getCity()->getCityName() . ', ' . $row->getProvince ()->getProvinceName () . ', ' . $row->getCountry ()->getCountryName () . ', ' . $row->getZipcode ();
						} 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shippingAddressId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'billingAddress[addressId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Address',
						'property' => 'addressName',
						'display_empty_item' => true,
						'empty_item_label' => ' ',
						'label_generator' => function ($row) {
							return $row->getStreetLandmark () . ', ' . $row->getCity()->getCityName () . ', ' . $row->getProvince ()->getProvinceName () . ', ' . $row->getCountry ()->getCountryName () . ', ' . $row->getZipcode ();
						} 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'billingAddressId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'orderSource[orderSourceId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\OrderSource',
						'property' => 'orderSourceName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'orderSourceId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'shippingMode[shippingModeId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\ShippingModes',
						'property' => 'shippingModeName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shippingModeId',
						'required' => true
				) 
		) );
		
		$this->add(array(
			'name' => 'salesExecutive[userId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $em,
						'target_class'   => 'Database\Entity\Users',
							'display_empty_item' => true,
							'empty_item_label' => " ",
							'label_generator' => function($row) {
								return $row->getFullName();	
							},
							'is_method'      => true,
							'find_method'    => array(
									'name'   => 'findBy',
									'params' => array(
									'criteria' => array('designation' => 2),

									),
							),
	
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'userId',
						'required' => true
					),
		));
		
		$this->add ( array (
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'name' => 'paymentTerm[paymentTermId]',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\PaymentTerms',
						'property' => 'paymentTermName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
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
						'display_empty_item' => true,
						'empty_item_label' => ' '
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
						'rows' => '1',
						'required' => true
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
