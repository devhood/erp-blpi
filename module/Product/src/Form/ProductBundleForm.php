<?php

namespace Product\Form;

use Zend\Form\Form;

class ProductBundleForm extends Form {
	public function __construct($om = null) {
		parent::__construct ( 'productBundle' );
		
		$this->add ( array (
				'name' => 'products[productId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $om,
						'target_class' => 'Database\Entity\Products',
						'property' => 'productName' 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'childProductId' 
				) 
		)
		 );
		$this->add ( array (
				'name' => 'bundleQuantity',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'bundleQuantity' 
				) 
		) );
	}
}
