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
			'name' => 'productCode',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'productCode',
			)
		));

		$this->add( array(
			'name' => 'productName',
			'type' => 'Text',
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'productName',
			)
		));

		$this->add(
		array(
			'name' => 'classifications[classificationId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'options' => array(
				'object_manager' => $om,
				'target_class'   => 'Database\Entity\Classifications',
				'property'       => 'classificationName',
			),
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'classificationId',
			),
		)
	);

	$this->add(array(
		'name' => 'brands[brandId]',
		'type' => 'DoctrineModule\Form\Element\ObjectSelect',
		'options' => array(
			'object_manager' => $om,
			'target_class'   => 'Database\Entity\Brands',
			'property'       => 'brandName',
		),
		'attributes' => array(
			'class' => 'select2me form-control',
			'tabindex' => '1',
			'id' => 'brandId',
		),
	));

	$this->add(array(
		'name' => 'supplier[supplierId]',
		'type' => 'DoctrineModule\Form\Element\ObjectSelect',
		'options' => array(
			'object_manager' => $om,
			'target_class'   => 'Database\Entity\Suppliers',
			'property'       => 'supplierName',
		),
		'attributes' => array(
			'class' => 'select2me form-control',
			'tabindex' => '1',
			'id' => 'supplierId',
		),
	));

	$this->add( array(
		'name' => 'size',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'size',
		)
	));

	$this->add( array(
		'name' => 'weight',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'weight',
		)
	));

	$this->add(array(
		'name' => 'productStatus',
		'type' => 'Select',
		'attributes' => array(
			'class' => 'select2me form-control',
			'tabindex' => '1',
			'id' => 'productStatus',
		),
		'options' => array(
			'value_options' => array(
				'0'=>'Active',
				'1'=>'Inactive',
				'2'=>'Discontinued',
				'3'=>'Cancelled'
			),
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
		'name' => 'partNumber',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'partNumber',
		)
	));

	$this->add( array(
		'name' => 'blCode',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'blCode',
		)
	));

	$this->add( array(
		'name' => 'printedCode',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'printedCode',
		)
	));






	$this->add( array(
		'name' => 'unitQuantity',
		'type' => 'Text',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'unitQuantity',
		)
	));

	$this->add( array(
		'name' => 'productDescription',
		'type' => 'Textarea',
		'attributes' => array(
			'class' => 'form-control',
			'id' => 'productDescription',
			'rows' => '6'
		)
	));


// 	$this->add( array(
// 		'name' => 'categories',
// 		'type' => 'text',
// 		'attributes' => array(
// 			'class' => 'form-control tags medium',
// 			'id' => 'categories',
// 		)
// 	));

}
}
