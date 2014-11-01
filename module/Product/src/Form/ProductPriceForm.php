<?php

namespace Product\Form;

use Zend\Form\Form;

class ProductPriceForm extends Form {
	public function __construct($om = null) {
		parent::__construct ( 'productPrice' );
		
		$this->add ( array (
				'name' => 'priceType[priceTypeId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $om,
						'target_class' => 'Database\Entity\PriceTypes',
						'property' => 'priceTypeName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'priceTypeId',
						'required' => true
				) 
		) );
		
		$this->add ( array (
				'name' => 'price',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'price' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'currency[currencyId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $om,
						'target_class' => 'Database\Entity\Currencies',
						'property' => 'currencyName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'currencyId',
						'required' => true
				) 
		) );
	}
}
