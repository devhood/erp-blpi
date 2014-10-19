<?php
namespace Product\Form;

use Zend\Form\Form;

class ProductForm extends Form
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
	}
}
