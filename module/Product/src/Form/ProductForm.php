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

		$this->add(array(
				'name' => 'classifications[classificationId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
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
				'name' => 'brands[brandId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
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
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
		));

		$this->add(array(
				'name' => 'paymentTerms[paymentTermId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
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

		// Price Modal
		$this->add(array(
				'name' => 'priceTypes[priceTypeId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'priceTypeId',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
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
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
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
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
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

		// Bundle Modal

		$this->add(array(
				'name' => 'products[productId]',
				'type' => 'Select',
				'attributes' => array(
						'class' => 'select2me form-control',
						'tabindex' => '1',
						'id' => 'productId',
				),
				'options' => array(
// 						'value_options' => array(
// 								'value_options' => $this->getGatewayTable()['brandTable']->fetchSelectOption(),
// 						),
				)
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
