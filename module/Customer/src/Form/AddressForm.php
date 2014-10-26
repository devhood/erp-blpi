<?php
namespace Customer\Form;

use Zend\Form\Form;
use Zend\Form\Annotation\Options;

class AddressForm extends Form
{

	public function __construct($om = null)
	{
		parent::__construct('address');
		
		$this->add(array(
			'name' => 'addressType',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'addressType',
			),
			'options' => array(
				'value_options' => array(
					'0'=>'Shipping',
					'1'=>'Billing',
					'2'=>'Company'
				),
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
				'name' => 'cities[cityId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Cities',
						'property'       => 'cityName',
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'cityId',
				),
		));
		
		$this->add(array(
				'name' => 'provinces[provinceId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Provinces',
						'property'       => 'provinceName',
				),
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'provinceId',
				),
		));
		
		$this->add(array(
				'name' => 'countries[countryId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Countries',
						'property'       => 'countryName',
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