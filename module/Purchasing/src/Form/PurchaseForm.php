<?php
namespace Purchasing\Form;

use Zend\Form\Form;

class PurchaseForm extends Form
{
  public function __construct($em)
  {
    parent::__construct('sales');

    
    $this->add( array(
    		'name' => 'purchase',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'purchase',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'supplier',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'supplier',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'referenceNo',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'referenceNo',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'purchaseDate',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'purchaseDate',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'expectedArrivalDate',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'expectedArrivalDate',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'purchaseStatus',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'purchaseStatus',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'purchaseNotes',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'purchaseNotes',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'purchaseItem',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'purchaseItem',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'product',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'product',
    				'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'quantity',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'quantity',
    				'readonly' => 'readonly'
    		)
    ));
    
    
    $this->add( array(
      'name' => 'cost',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'cost',
         'readonly' => 'readonly'
      )
    ));
    $this->add( array(
      'name' => 'currency',
      'type' => 'Text',
      'attributes' => array(
        'class' => 'form-control',
        'id' => 'currency',
        'readonly' => 'readonly'
      )
    ));


  }
}
