<?php

namespace Product\Form;

use Zend\Form\Form;

class ProductUomForm extends Form {
	public function __construct($om = null) {
		parent::__construct ( 'productuom' );
		
		$this->add ( array (
				'name' => 'uom[uomId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array (
						'object_manager' => $om,
						'target_class' => 'Database\Entity\Uoms',
						'property' => 'uomName',
						'display_empty_item' => true,
						'empty_item_label' => ' '
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'uomId',
						'required' => true
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
	}
}
