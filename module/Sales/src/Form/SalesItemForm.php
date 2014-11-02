<?php

namespace Sales\Form;

use Zend\Form\Form;

class SalesItemForm extends Form {
	public function __construct($em) {
		parent::__construct ( 'salesitem' );
		// Value for Modal
		$this->add ( array (
				'name' => 'salesItemId',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'tabindex' => '1',
						'id' => 'salesItemId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'product[productId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Products',
						'property' => 'productName',
						'display_empty_item' => true
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'productId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'productPrice[ppId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\ProductPrice',
						'property' => 'price',
						'display_empty_item' => true
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'ppId'
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
				'name' => 'quantity',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'quantity'
				)
					
		) );
		$this->add ( array (
				'name' => 'sales',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'sales' ,
						'readonly' => 'readonly'
				)
				 
		) );
		
		$this->add ( array (
				'name' => 'discount',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'tabindex' => '1',
						'id' => 'discount' ,
						'readonly' => 'readonly'
				) 
		) );
		
		$this->add ( array (
				'name' => 'freebie',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'tabindex' => '1',
						'id' => 'freebie',
						'readonly' => 'readonly'
				) 
		) );
	}
}
