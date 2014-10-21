<?php
namespace Customer\Form;

use Zend\Form\Form;

class CustomerForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('customer');


		$this->add(array(
			'name' => 'categories[categoryId]',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Category',
				'tabindex' => '1',
				'id' => 'categoryId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));

		$this->add(array(
			'name' => 'customerTypes[customerTypeId]',
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

		//
		// $this->add(array(
		// 	'type' => 'Zend\Form\Element\Checkbox',
		// 	'name' => 'consignee',
		// 	'options' => array(
		// 		'label' => 'Consignee',
		// 		'use_hidden_element' => true,
		// 		'checked_value' => '1',
		// 		'unchecked_value' => '0'
		// 	)
		// ));


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
	'type' => 'Select',
	'attributes' => array(
		'class' => 'select2me form-control',
		'data-placeholder' => 'Choose Payment Terms',
		'tabindex' => '1',
		'id' => 'paymentTermId',
	),
	'options' => array(
		// 						'value_options' => array(
		// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
		// 						),
	)
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
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Shipping Mode',
				'tabindex' => '1',
				'id' => 'shippingModeId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));
		$this->add(array(
			'name' => 'salesExecutive[salesExecutiveId]',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Sales Executive',
				'tabindex' => '1',
				'id' => 'salesExecutiveId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));

$this->add(array(
	'name' => 'priceTypes[priceTypeId]',
	'type' => 'Select',
	'attributes' => array(
		'class' => 'select2me form-control',
		'data-placeholder' => 'Choose Price Type',
		'tabindex' => '1',
		'id' => 'priceTypeId',
	),
	'options' => array(
		// 						'value_options' => array(
		// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
		// 						),
	)
));


		$this->add(array(
			'name' => 'customerStatus',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Customer Status',
				'tabindex' => '1',
				'id' => 'customerStatus',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));

		$this->add(array(
			'name' => 'salesExecutive[salesExecutiveId]',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Sales Executive',
				'tabindex' => '1',
				'id' => 'salesExecutiveId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));

		$this->add(array(
			'name' => 'addressType[addressTypeId]',
			'type' => 'Select',
			'attributes' => array(
				'class' => 'select2me form-control',
				'data-placeholder' => 'Choose Address Type',
				'tabindex' => '1',
				'id' => 'addressTypeId',
			),
			'options' => array(
				// 						'value_options' => array(
				// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
				// 						),
			)
		));


		//Modal Properties (ADDRESS)
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
	'type' => 'Select',
	'attributes' => array(
		'class' => 'select2me form-control',
		'data-placeholder' => 'Choose City',
		'tabindex' => '1',
		'id' => 'cityId',
	),
	'options' => array(
		// 						'value_options' => array(
		// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
		// 						),
	)
));

$this->add(array(
	'name' => 'province[provinceId]',
	'type' => 'Select',
	'attributes' => array(
		'class' => 'select2me form-control',
		'data-placeholder' => 'Choose Province',
		'tabindex' => '1',
		'id' => 'provinceId',
	),
	'options' => array(
		// 						'value_options' => array(
		// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
		// 						),
	)
));

$this->add(array(
	'name' => 'country[countryId]',
	'type' => 'Select',
	'attributes' => array(
		'class' => 'select2me form-control',
		'data-placeholder' => 'Choose Country',
		'tabindex' => '1',
		'id' => 'countryId',
	),
	'options' => array(
		// 						'value_options' => array(
		// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
		// 						),
	)
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


//Modal Properties (Contact)

$this->add( array(
	'name' => 'position',
	'type' => 'Text',
	'attributes' => array(
		'class' => 'form-control',
		'placeholder' => 'Enter Position',
		'id' => 'position',
	)
));
$this->add( array(
	'name' => 'primary',
	'type' => 'Text',
	'attributes' => array(
		'class' => 'form-control',
		'placeholder' => 'Enter Primary',
		'id' => 'primary',
	)
));

$this->add( array(
	'name' => 'fullname',
	'type' => 'Text',
	'attributes' => array(
		'class' => 'form-control',
		'placeholder' => 'Enter Fullname',
		'id' => 'fullname',
	)
));

$this->add( array(
	'name' => 'zipcode',
	'type' => 'email',
	'attributes' => array(
		'class' => 'form-control',
		'placeholder' => 'Enter Email',
		'id' => 'email',
	)
));
$this->add( array(
	'name' => 'phone',
	'type' => 'Text',
	'attributes' => array(
		'class' => 'form-control',
		'placeholder' => 'Enter Phone Number',
		'id' => 'phone',
	)
));

	}
}
