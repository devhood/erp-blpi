<?php
namespace Sales\Form;

use Zend\Form\Form;

class SalesItemForm extends Form
{
  public function __construct($em)
  {
    parent::__construct('salesitem');
    //Value for Modal
    $this->add(array(
        'name' => 'salesItemId',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'tabindex' => '1',
            'id' => 'salesItemId',
        ),
    ));


    $this->add(array(
        'name' => 'products[productId]',
        'type' => 'DoctrineModule\Form\Element\ObjectSelect',
        'options' => array(
          'object_manager'  => $em,
          'target_class'    => 'Database\Entity\Products',
          'property'           => 'productName',
          'display_empty_item' => true,
          'empty_item_label'   => '---'
        ),
        'attributes' => array(
          'class' => 'select2me form-control',
          'tabindex' => '1',
          'id' => 'productId',
        ),
        ));

    $this->add( array(
        'name' => 'quantity',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'id' => 'quantity',

        )
    ));

    $this->add( array(
        'name' => 'price',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'id' => 'quantity',

        )
    ));
    $this->add( array(
        'name' => 'sales',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'id' => 'quantity',

        )
    ));

    $this->add(array(
        'name' => 'discount',
         'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'tabindex' => '1',
            'id' => 'discount',
        ),

    ));

    $this->add(array(
        'name' => 'freebie',
        'type' => 'Select',
        'attributes' => array(
            'class' => 'select2me form-control',
            'tabindex' => '1',
            'id' => 'freebie',
        ),

    ));
    $this->add( array(
        'name' => 'total',
        'type' => 'Text',
        'attributes' => array(
            'class' => 'form-control',
            'id' => 'quantity',

        )
    ));
  }
}
