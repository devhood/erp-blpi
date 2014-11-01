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
			'name' => 'category[categoryId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'options' => array(
				'object_manager' => $om,
				'target_class'   => 'Database\Entity\Categories',
				'property'       => 'categoryName',
				'empty_item_label' => null,
			),
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'categoryId',
			),
		));

		$this->add(array(
			'name' => 'customerType[customerTypeId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'options' => array(
				'object_manager' => $om,
				'target_class'   => 'Database\Entity\CustomerTypes',
				'property'       => 'customerTypeName',
				'empty_item_label' => ' ',
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
				'id' => 'companyName',
			)
		));

		$this->add( array(
			'name' => 'branch',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'branch',
			)
		));

		$this->add( array(
			'name' => 'tradeName',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'tradeName',
			)
		));

		$this->add( array(
			'name' => 'tin',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'tinNumber',
			)
		));

		$this->add( array(
			'name' => 'phone',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'phone',
			)
		));

		$this->add( array(
			'name' => 'email',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'email',
			)
		));


		$this->add( array(
			'name' => 'website',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'website',
			)
		));

		$this->add( array(
			'name' => 'secNumber',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
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
				'checked_value' => 'Yes',
				'unchecked_value' => 'No'
			)
		));



		$this->add( array(
			'name' => 'franchise',
			'type' => 'checkbox',
			'attributes' => array(
				'class' => 'form-control',
				'label' => 'Franchise',
				'id' => 'franchise',
				'checked_value' => 'Yes',
				'unchecked_value' => 'No'
			)
		));


		$this->add( array(
			'name' => 'creditLimit',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'unpaidTransactionLimit',
			)
		));

		$this->add( array(
			'name' => 'unpaidTransactionLimit',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'unpaidTransactionLimit',
			)
		));


		$this->add(array(
			'name' => 'paymentTerm[paymentTermId]',
					'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\PaymentTerms',
						'property'       => 'paymentTermName',
						'empty_item_label' => ' ',
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'paymentTermId',
					),
		));

		$this->add( array(
			'name' => 'permanentDiscount',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'permanentDiscount',
			)
		));

		$this->add(array(
			'name' => 'shippingMode[shippingModeId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\ShippingModes',
						'property'       => 'shippingModeName',
						'empty_item_label' => ' ',
					),
					'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'shippingModeId',
					),
		));

		$this->add(array(
			'name' => 'salesExecutive[userId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\Users',
							'empty_item_label' => ' ',
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
			'name' => 'priceType[priceTypeId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
					'options' => array(
						'object_manager' => $om,
						'target_class'   => 'Database\Entity\PriceTypes',
						'property'       => 'priceTypeName',
						'empty_item_label' => ' ',
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
				'empty_item_label' => ' ',
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

	}
}
