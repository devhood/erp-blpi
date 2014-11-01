<?php
namespace Customer\Form;

use Zend\Form\Form;
use Zend\Form\Annotation\Options;

class AddressForm extends Form
{

	public function __construct($om = null)
	{
		parent::__construct('address');
		
		$this->add( array(
			'name' => 'shipping',
			'type' => 'checkbox',
			'attributes' => array(
				'class' => 'form-control',
				'label' => 'Shipping',
				'id' => 'shipping',
				'checked_value' => '1',
				'unchecked_value' => '0'
			)
		));
		
		$this->add( array(
			'name' => 'billing',
			'type' => 'checkbox',
			'attributes' => array(
				'class' => 'form-control',
				'label' => 'Billing',
				'id' => 'billing',
				'checked_value' => '1',
				'unchecked_value' => '0'
			)
		));
		
		$this->add(array(
				'name' => 'streetLandmark',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Street Landmark',
						'id' => 'streetLandmark',
				)
		));
		
		$this->add(array(
				'name' => 'city[cityId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Cities',
						'property'       => 'cityName',
						'display_empty_item' => true,
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'cityId',
				),
		));
		
		$this->add(array(
				'name' => 'province[provinceId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Provinces',
						'property'       => 'provinceName',
						'display_empty_item' => true,
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'provinceId',
				),
		));
		
		$this->add(array(
				'name' => 'country[countryId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Countries',
						'property'       => 'countryName',
						'display_empty_item' => true,
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'countryId',
				),
		));
		
		$this->add( array(
				'name' => 'zipcode',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Zipcode',
						'id' => 'zipcode',
				)
		));
		
	}
}