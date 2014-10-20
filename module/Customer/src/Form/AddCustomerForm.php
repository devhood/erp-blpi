<?php
namespace Customer\Form;

use Zend\Form\Form;

class AddCustomerForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('customer');


		$this->add(array(
			'name' => 'customerCategory[customerCategoryId]',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Category',
				'tabindex' => '1',
				'id' => 'customerCategoryId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));

		$this->add(array(
			'name' => 'customerType[customerTypeId]',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose a Type',
				'tabindex' => '1',
				'id' => 'customerTypeId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
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

		$this->add(array(
			'type' => 'Zend\Form\Element\Checkbox',
			'name' => 'consignee',
			'options' => array(
				'label' => 'Consignee',
				'use_hidden_element' => true,
				'checked_value' => '1',
				'unchecked_value' => '0'
			)
		));


		$this->add( array(
			'name' => 'consigneee',
			'type' => 'checkbox',
			'attributes' => array(
				'class' => 'form-control',
				'label' => 'Consignee',
				'id' => 'companyName',
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


		$this->add( array(
			'name' => 'paymentTerms',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Payment Terms',
				'id' => 'paymentTerms',
			)
		));


		$this->add( array(
			'name' => 'percentCommission',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Percent Commission',
				'id' => 'percentCommission',
			)
		));

		$this->add( array(
			'name' => 'shippingMode',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Shipping Mode',
				'id' => 'shippingMode',
			)
		));

		$this->add( array(
			'name' => 'paymentTerms',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Sales Executive',
				'id' => 'paymentTerms',
			)
		));

		$this->add( array(
			'name' => 'salesExecutive',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Sales Executive',
				'id' => 'salesExecutive',
			)
		));

		$this->add( array(
			'name' => 'priceType',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Price Type',
				'id' => 'priceType',
			)
		));
		$this->add( array(
			'name' => 'customerStatus',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'placeholder' => 'Enter Customer Status',
				'id' => 'customerStatus',
			)
		));



















	}
}
