<?php
namespace Product\Form;

use Zend\Form\Form;
use Zend\Form\Annotation\Options;

class ProductForm extends Form
{

	public function __construct($em = null)
	{
		parent::__construct('product');

		$this->add( array(
			'name' => 'productCode',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'productCode',
			)
		));

		$this->add( array(
			'name' => 'productName',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'productName',
			)
		));

		$this->add(
			array(
				'name' => 'classification[classificationId]',
				'type' => 'DoctrineModule\Form\Element\ObjectSelect',
				'required' => true,
				'options' => array(
					'object_manager' => $em,
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
			'name' => 'brand[brandId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'required' => true,
			'options' => array(
				'object_manager' => $em,
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
			'required' => true,
			'options' => array(
				'object_manager' => $em,
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
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'size',
			)
		));

		$this->add( array(
			'name' => 'weight',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'weight',
			)
		));

		$this->add(array(
			'name' => 'productStatus',
			'type' => 'Select',
			'required' => true,
			'attributes' => array(
				'class' => 'select2me form-control',
				'tabindex' => '1',
				'id' => 'productStatus',
			),
			'options' => array(
				'value_options' => array(
					'Active'=>'Active',
					'Inactive'=>'Inactive',
					'Discontinued'=>'Discontinued',
					'Cancelled'=>'Cancelled'
				),
			)
		));

		$this->add(array(
			'name' => 'paymentTerm[paymentTermId]',
			'type' => 'DoctrineModule\Form\Element\ObjectSelect',
			'required' => true,
			'options' => array(
				'object_manager' => $em,
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
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'partNumber',
			)
		));

		$this->add( array(
			'name' => 'blCode',
			'type' => 'Text',
			'required' => true,
			'attributes' => array(
				'class' => 'form-control',
				'id' => 'blCode',
			)
		));

		$this->add( array(
			'name' => 'printedCode',
			'type' => 'Text',
			'required' => true,
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
				'rows' => '1'
			)
		));

	}
}
