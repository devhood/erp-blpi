<?php
namespace Product\Form;

use Zend\Form\Form;

class ProductPriceForm extends Form
{
    public function __construct($om = null)
    {
        parent::__construct('productPrice');


  $this->add(array(
      'name' => 'priceTypes[priceTypeId]',
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
      'object_manager' => $om,
      'target_class'   => 'Database\Entity\PriceTypes',
      'property'       => 'priceTypeName',
      ),
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
      'type' => 'DoctrineModule\Form\Element\ObjectSelect',
      'options' => array(
      'object_manager' => $om,
      'target_class'   => 'Database\Entity\Currencies',
      'property'       => 'currencyName',
      ),
      'attributes' => array(
      'class' => 'select2me form-control',
      'tabindex' => '1',
      'id' => 'currencyId',
      ),

      ));





    }
}
