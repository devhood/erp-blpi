<?php
namespace Purchasing\Form;

use Zend\Form\Form;

class PurchaseForm extends Form
{
	public function __construct($em = null)
	{
		parent::__construct('purchase');
		
		$this->add( array(
			'name' => 'purchaseId',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'purchaseId',
				'disabled' => 'true',
			),
		));
		
		$this->add( array(
			'name' => 'supplierId',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'supplierId',
			),
			'required' => true,
		));
		
		$this->add( array(
			'name' => 'referenceNo',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'referenceNo',
			)
		));
		
		$this->add( array(
			'name' => 'purchaseDate',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'purchaseDate',
			)
		));
		
		$this->add( array(
				'name' => 'expectedArrivalDate',
				'type' => 'Text',
				'required' => true,
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'expectedArrivalDate',
				)
		));
		
		$this->add( array(
				'name' => 'purchaseStatus',
				'type' => 'Text',
				'required' => true,
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'purchaseStatus',
				)
		));
		
		$this->add( array(
				'name' => 'purchaseNotes',
				'type' => 'Text',
				'required' => true,
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'purchaseNotes',
				)
		));
		
// 		$this->add(array(
// 			'name' => 'designation[designationId]',
// 			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
// 			'required' => true,
// 			'options' => array(
// 				'object_manager'	=> $em,
// 				'target_class'		=> 'Database\Entity\Designations',
// 				'property'			=> 'designationName',
// 			),
// 			'attributes' => array(
// 				'class' => 'select2me form-control',
// 				'tabindex' => '1',
// 				'id' => 'designationId',
// 			),

// 		));

// 		$this->add( array(
// 			'name' => 'userStatus',
// 			'type' => 'Text',
// 			'required' => true,
// 			'attributes' => array(
// 				'class' => 'form-control',
// 				'id' => 'userStatus',
// 			)
// 		));
		
// 		$this->add( array(
// 			'name' => 'email',
// 			'type' => 'Text',
// 			'required' => true,
// 			'attributes' => array(
// 				'class' => 'form-control',
// 				'id' => 'email',
// 			)
// 		));
		
// 		$this->add( array(
// 			'name' => 'mobile',
// 			'type' => 'Text',
// 			'required' => true,
// 			'attributes' => array(
// 				'class' => 'form-control',
// 				'id' => 'mobile',
// 			)
// 		));

	}
}
