<?php
namespace Product\Form;

use Zend\Form\Form;

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
				'type' => 'Select',
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
		));

		$this->add(array(
				'name' => 'paymentTerms[paymentTermId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'paymenttermId',
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

		$this->add(array(
				'name' => 'priceTypes[priceTypeId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'priceTypeId',
				),
		));

		$this->add( array(
				'name' => 'priceAmount',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'priceQuantity',
				)
		));

		$this->add(array(
				'name' => 'currencies[currencyId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'currencyId',
				),
		));

		// Unit Modal

		$this->add(array(
				'name' => 'uoms[uomId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'uomId',
				),
		));

		$this->add( array(
				'name' => 'unitQuantity',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'unitQuantity',
				)
		));

		// Bundle Modal

		$this->add(array(
				'name' => 'products[productId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'productId',
				),
		));

		$this->add( array(
				'name' => 'bundleQuantity',
				'type' => 'Text',
				'attributes' => array(
						'class' => 'form-control',
						'id' => 'bundleQuantity',
				)
		));

		$this->add( array(
				'name' => 'desc',
				'type' => 'Textarea',
				'attributes' => array(
						'class' => 'wysihtml5 form-control',
						'id' => 'desc',
						'rows' => '6'
				)
		));

		$this->add( array(
				'name' => 'categories',
				'type' => 'text',
				'attributes' => array(
						'class' => 'form-control tags medium',
						'id' => 'categories',
				)
		));

	}
}
