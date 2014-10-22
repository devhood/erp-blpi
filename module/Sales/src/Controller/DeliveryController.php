<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class DeliveryController extends BaseController
{
    public function indexAction()
    {
        return new ViewModel();
    }


    public function addAction()
    {

<<<<<<< HEAD
   
        return new ViewModel();
=======
      $form = new \Sales\Form\DeliveryForm();

      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("trasanctionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));

<<<<<<< HEAD
      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));

      $shipping = $this->_getOptions("Address","addressId","addressType");
      $form->get("shippingAddress[AddressId]")->setOptions(array('value_options' => $shipping));

      $billing = $this->_getOptions("Address","addressId","addressType");
      $form->get("billingAddress[AddressId]")->setOptions(array('value_options' => $billing));

      $ordersource = $this->_getOptions("OrderSource","orderSourceId","orderSourceName");
      $form->get("orderSource[orderSourceId]")->setOptions(array('value_options' => $ordersource));

      $shippingmode = $this->_getOptions("ShippingModes","shippingModeId","shippingModeName");
      $form->get("shippingModes[shippingModeId]")->setOptions(array('value_options' => $shippingmode));

      $user = $this->_getOptions("Users","userId","fullName","designation","2");
      $form->get("users[userId]")->setOptions(array('value_options' => $user));

      $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
      $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));


      return new ViewModel(array('form' => $form));
    }

     public function approveAction()
    {

      $form = new \Sales\Form\DeliveryForm();

      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("trasanctionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));

      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));

      $shipping = $this->_getOptions("Address","addressId","addressType");
      $form->get("shippingAddress[AddressId]")->setOptions(array('value_options' => $shipping));

      $billing = $this->_getOptions("Address","addressId","addressType");
      $form->get("billingAddress[AddressId]")->setOptions(array('value_options' => $billing));

      $ordersource = $this->_getOptions("OrderSource","orderSourceId","orderSourceName");
      $form->get("orderSource[orderSourceId]")->setOptions(array('value_options' => $ordersource));

      $shippingmode = $this->_getOptions("ShippingModes","shippingModeId","shippingModeName");
      $form->get("shippingModes[shippingModeId]")->setOptions(array('value_options' => $shippingmode));

      $user = $this->_getOptions("Users","userId","fullName","designation","2");
      $form->get("users[userId]")->setOptions(array('value_options' => $user));

      $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
      $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));


      return new ViewModel(array('form' => $form));
    }

     public function printAction()
    {

      $form = new \Sales\Form\DeliveryForm();

      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("trasanctionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));

      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));

      $shipping = $this->_getOptions("Address","addressId","addressType");
      $form->get("shippingAddress[AddressId]")->setOptions(array('value_options' => $shipping));

      $billing = $this->_getOptions("Address","addressId","addressType");
      $form->get("billingAddress[AddressId]")->setOptions(array('value_options' => $billing));

      $ordersource = $this->_getOptions("OrderSource","orderSourceId","orderSourceName");
      $form->get("orderSource[orderSourceId]")->setOptions(array('value_options' => $ordersource));

      $shippingmode = $this->_getOptions("ShippingModes","shippingModeId","shippingModeName");
      $form->get("shippingModes[shippingModeId]")->setOptions(array('value_options' => $shippingmode));

      $user = $this->_getOptions("Users","userId","fullName","designation","2");
      $form->get("users[userId]")->setOptions(array('value_options' => $user));

      $payment = $this->_getOptions("PaymentTerms","paymentTermId","paymentTermName");
      $form->get("paymentTerms[paymentTermId]")->setOptions(array('value_options' => $payment));


=======
      $customer = $this->_getOptions("Customers","transactionTypeId","transactionTypeName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));

>>>>>>> 0f753098b8d10b053e0dd3e681893b4e730b2726
      return new ViewModel(array('form' => $form));
>>>>>>> c2b68337cbc76f960ce1699d72d45f983c679e25
    }

}
