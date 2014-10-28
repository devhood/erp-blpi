<?php
namespace Sales\Form;

use Zend\Form\Form;

class PaymentDetailForm extends Form
{
  public function __construct($em)
  {
    parent::__construct('paymentdetail');

    
    $this->add( array(
    		'name' => 'dummyproducts',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummyproducts',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummyfile',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummyfile',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummyproduct',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummyproduct',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummydate',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummydate',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummycheckno',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummycheckno',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummycheckdate',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummycheckdate',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'orno',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummybank',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummyamount',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummyamount',
    			//	'readonly' => 'readonly'
    		)
    ));
    $this->add( array(
    		'name' => 'dummydepositdate',
    		'type' => 'Text',
    		'attributes' => array(
    				'class' => 'form-control',
    				'id' => 'dummydepositdate',
    			//	'readonly' => 'readonly'
    		)
    ));
   




    


//     $this->add(array(
//     'name' => 'shippingAddress[addressId]',
//     'type' => 'DoctrineModule\Form\Element\ObjectSelect',
//     'options' => array(
//     'object_manager'  => $em,
//     'target_class'    => 'Database\Entity\Address',
//     'property'           => 'addressName',
//     'display_empty_item' => false,
//    'empty_item_label'   => ' ',

//     'label_generator' => function($row) {
//         return $row->getStreetLandmark() . ', '
//             . $row->getCity()->getCityName() . ', '
//             . $row->getProvince()->getProvinceName() . ', '
//             . $row->getCountry()->getCountryName() . ', '
//             . $row->getZipcode();
//     },
//   ),
//   'attributes' => array(
//     'class' => 'select2me form-control',
//     'tabindex' => '1',
//     'id' => 'addressId',
//   ),
// ));

    
    

    //     $this->add(array(
    //     		'name' => 'products[productId]',
    //     		'type' => 'DoctrineModule\Form\Element\ObjectSelect',
    //     		'options' => array(
    //     				'object_manager'  => $em,
    //     				'target_class'    => 'Database\Entity\Products',
    //     				'property'           => 'productName',
    //     				'display_empty_item' => true,
    //     				'empty_item_label'   => ' ',
    //     		),
    //     		'attributes' => array(
    //     				'class' => 'select2me form-control',
    //     				'tabindex' => '1',
    //     				'id' => 'productId',
    //     		),
    //     ));
    

  }
}
