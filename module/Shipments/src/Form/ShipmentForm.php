<?php
namespace Shipments\Form;

use Zend\Form\Form;

class ShipmentForm extends Form
{
	public function __construct($em = null)
	{
		parent::__construct('shipment');
		
		$this->add( array(
			'name' => 'shipmentId',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'shipmentId',
				'disabled' => 'true',
			),
		));
		
		$this->add( array(
				'name' => 'supplierId',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'supplierId',
						'disabled' => 'true',
				),
		));
		
		$this->add( array(
				'name' => 'referenceNo',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'referenceNo',
				),
				'required' => true,
		));
		
		$this->add(array(
				'name' => 'shipmentStatus',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shipmentStatus',
				),
				'options' => array(
						'value_options' => array(
								'0'=>'Active',
								'1'=>'Inactive',
								'2'=>'Discontinued',
								'3'=>'Cancelled'
						),
				)
		));
		
		
		$this->add(array(
				'name' => 'arrivalDate',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control date-picker',
						'id' => 'arrivalDate',
				),
		));
		
		$this->add( array(
				'name' => 'notes',
				'type' => 'Textarea',
				'attributes' => array(
						'class' => 'text-area form-control',
						'id' => 'notes',
						'rows' => '6'
				)
		));
		
		$this->add( array(
				'name' => 'confirmedBy',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'confirmedBy',
				),
				'required' => true,
		));
		
		$this->add( array(
				'name' => 'approveBy',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'approveBy',
				),
				'required' => true,
		));
		
		$this->add( array(
				'name' => 'shipmentItemId',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'shipmentItemId',
						'disabled' => 'true',
				),
		));
	}
}
