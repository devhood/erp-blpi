<?php
namespace Product\Form;

use Zend\Form\Form;

class AddProductForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('product');
		
		$this->add( array(
				'name' => 'productCode',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Item Code',
						'id' => 'productCode',
				)
		));

		$this->add( array(
				'name' => 'productName',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'placeholder' => 'Enter Name',
						'id' => 'productName',
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
				'name' => 'product_status',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'data-placeholder' => 'Choose Status',
						'tabindex' => '1',
						'id' => 'product_status',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));
	}
}
