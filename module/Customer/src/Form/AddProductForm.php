<?php
namespace Customer\Form;

use Zend\Form\Form;

class AddCustomerForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('customer');

		$this->add( array(
				'name' => 'customerCode',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Item Code',
						'id' => 'customerCode',
				)
		));

		$this->add( array(
				'name' => 'customerName',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Name',
						'id' => 'customerName',
				)
		));

		$this->add(array(
				'name' => 'classifications[classificationId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'data-placeholder' => 'Choose Classification',
						'tabindex' => '1',
						'id' => 'classificationId',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));

		$this->add(array(
				'name' => 'brand[brandId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'data-placeholder' => 'Choose a Brand',
						'tabindex' => '1',
						'id' => 'brandId',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));

		$this->add(array(
				'name' => 'supplier[supplierId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'data-placeholder' => 'Choose Supplier',
						'tabindex' => '1',
						'id' => 'supplierId',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));

		$this->add( array(
				'name' => 'size',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Size',
						'id' => 'size',
				)
		));

		$this->add( array(
				'name' => 'weight',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Weight',
						'id' => 'weight',
				)
		));

		$this->add(array(
				'name' => 'customer_status',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'data-placeholder' => 'Choose Status',
						'tabindex' => '1',
						'id' => 'customer_status',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));

		$this->add(array(
				'name' => 'payment_term[paymenttermId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'data-placeholder' => 'Choose Payment Terms',
						'tabindex' => '1',
						'id' => 'paymenttermId',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));

		$this->add( array(
				'name' => 'part_number',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Part Number',
						'id' => 'part_number',
				)
		));

		$this->add( array(
				'name' => 'blCode',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter BL Code',
						'id' => 'blCode',
				)
		));

		$this->add( array(
				'name' => 'printed_code',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Printed Code',
						'id' => 'printed_code',
				)
		));
	}
}
