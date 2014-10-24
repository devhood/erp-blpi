<?php
namespace Product\Form;

use Zend\Form\Form;
use Zend\Form\Annotation\Options;

class ProductForm extends Form
{

	public function __construct($om = null)
	{
		parent::__construct('product');

	$this->add( array(
		'name' => '__',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => '___',
		)
	));

}
}
