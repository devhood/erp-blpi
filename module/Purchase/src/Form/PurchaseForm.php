<?php

namespace Purchase\Form;

use Zend\Form\Form;

class PurchaseForm extends Form {
	public function __construct($em = null) {
		parent::__construct ( 'purchase' );
		
		$this->add ( array (
				'name' => 'purchase[purchaseId]',
				'type' => 'Text',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'purchaseId',
						'disabled' => 'true' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'supplier[supplierId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'required' => true,
				'options' => array (
						'object_manager' => $em,
						'target_class' => 'Database\Entity\Suppliers',
						'property' => 'supplierName' 
				),
				'attributes' => array (
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'supplierId' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'referenceNo',
				'type' => 'Text',
				'required' => true,
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'referenceNo' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'purchaseDate',
				'type' => 'text',
				'required' => true,
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'purchaseDate' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'expectedArrivalDate',
				'type' => 'text',
				'required' => true,
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'expectedArrivalDate' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'purchaseNotes',
				'type' => 'Textarea',
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'purchaseNotes',
						'rows' => '1' 
				) 
		) );
		
		$this->add ( array (
				'name' => 'purchaseStatus',
				'type' => 'Text',
				'required' => true,
				'attributes' => array (
						'class' => 'form-control',
						'id' => 'purchaseStatus' 
				) 
		) );
	}
}
