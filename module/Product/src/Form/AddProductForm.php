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
	}
}
