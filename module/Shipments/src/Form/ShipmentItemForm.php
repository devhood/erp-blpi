<?php
namespace Shipments\Form;

use Zend\Form\Form;

class ShipmentItemForm extends Form
{
	public function __construct($em = null)
	{
		parent::__construct('items');
		
		
		
		$this->add(array(
				'name' => 'shipmentItemId',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'tabindex' => '1',
						'id' => 'shipmentItemId',
				),
		));
		
		$this->add(array(
				'name' => 'shipmentId',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'tabindex' => '1',
						'id' => 'shipmentItemId',
				),
		));
		
		$this->add(array(
				'name' => 'productId',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'tabindex' => '1',
						'id' => 'shipmentItemId',
				),
		));
		
		$this->add( array(
				'name' => 'itemQuantity',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'itemQuantity',
		
				)
		));
		
		$this->add( array(
				'name' => 'cost',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'cost',
		
				)
		));
		
		$this->add( array(
				'name' => 'currencyId',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'currrencyId',
		
				)
		));
		
		$this->add( array(
				'name' => 'expiryDate',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'expiryDate',
		
				)
		));
		
		$this->add( array(
				'name' => 'condition',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'condition',
		
				)
		));
		$this->add(array(
				'name' => 'currencies[currencyId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Currencies',
						'property'       => 'currencyName',
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'currencyId',
				),
		
		));
		
		
	}
}
