<?php
namespace Customer\Form;

use Zend\Form\Form;

class CustomerForm extends Form
{
	public function __construct($om)
	{
		parent::__construct('customer');


		$this->add(
		array(
			'name' => 'categories[categoryId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'options' => array(
				'object_manager' => $om,
				'target_class'   => 'Database\Entity\Categories',
				'property'       => 'categoryName',
			),
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'categoryId',
			),
		));

		$this->add(array(
			'name' => 'customerTypes[customerTypeId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'options' => array(
				'object_manager' => $om,
				'target_class'   => 'Database\Entity\CustomerTypes',
				'property'       => 'customerTypeName',
			),
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'customerTypeId',
			),
		));


		$this->add( array(
			'name' => 'companyName',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Company Name',
				'id' => 'companyName',
			)
		));

		$this->add( array(
			'name' => 'branch',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Branch',
				'id' => 'branch',
			)
		));

		$this->add( array(
			'name' => 'tradeName',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Trade Name',
				'id' => 'tradeName',
			)
		));

		$this->add( array(
			'name' => 'tinNumber',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Tin Number',
				'id' => 'tinNumber',
			)
		));

		$this->add( array(
			'name' => 'phone',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Tin Number',
				'id' => 'phone',
			)
		));

		$this->add( array(
			'name' => 'email',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Email Address',
				'id' => 'email',
			)
		));


		$this->add( array(
			'name' => 'website',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Website',
				'id' => 'website',
			)
		));

		$this->add( array(
			'name' => 'secNumber',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Sec Number',
				'id' => 'secNumber',
			)
		));


		$this->add( array(
			'name' => 'consignee',
			'type' => 'checkbox',
			'attributes' => array(
				'class' => 'form-control',
				'label' => 'Consignee',
				'id' => 'consignee',
				'checked_value' => '1',
				'unchecked_value' => '0'
			)
		));



		$this->add( array(
			'name' => 'franchise',
			'type' => 'checkbox',
			'attributes' => array(
				'class' => 'form-control',
				'label' => 'Franchise',
				'id' => 'franchise',
				'checked_value' => '1',
				'unchecked_value' => '0'
			)
		));


		$this->add( array(
			'name' => 'creditLimit',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Credit Limit',
				'id' => 'unpaidTransactionLimit',
			)
		));

		$this->add( array(
			'name' => 'unpaidTransactionLimit',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Unpaid Transaction Limit',
				'id' => 'unpaidTransactionLimit',
			)
		));


		$this->add(array(
			'name' => 'paymentTerms[paymentTermId]',
					'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\PaymentTerms',
						'property'       => 'paymentTermName',
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'paymentTermId',
					),
		));

		$this->add( array(
			'name' => 'percentCommission',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter % Commission',
				'id' => 'percentCommission',
			)
		));

		$this->add(array(
			'name' => 'shippingModes[shippingModeId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\ShippingModes',
						'property'       => 'shippingModeName',
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shippingModeId',
					),
		));

		$this->add(array(
			'name' => 'users[userId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Users',
							'label_generator' => function($row) {
								return $row->getFullName();	
							},
							'is_method'      => true,
							'find_method'    => array(
									'name'   => 'findBy',
									'params' => array(
											'criteria' => array('designation' => 2),

									),
							),
	
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'userId',
					),
		));

		$this->add(array(
			'name' => 'priceTypes[priceTypeId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\PriceTypes',
						'property'       => 'priceTypeName',
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'priceTypeId',
					),
		));


		$this->add(array(
			'name' => 'customerStatus',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'customerStatus',
			),
			'options' => array(
				'value_options' => array(
					'0'=>'Active',
					'1'=>'Inactive',
					'2'=>'Suspended',
					'3'=>'Block'
				),
			)
		));


		


		//Modal Properties (ADDRESS)
		

		//Modal Properties (CONTACT)
		

	}
}
