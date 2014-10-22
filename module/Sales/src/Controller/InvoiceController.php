<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class InvoiceController extends BaseController
{
    public function invoiceAction()
    {
        return new ViewModel();
    }


    public function addAction()
    {

      $form = new \Sales\Form\InvoiceForm();



      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("transactionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));


      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));


      $inventory = $this->_getOptions("InventoryLocations","inventoryLocationId","inventoryLocationName");
      $form->get("inventoryLocations[inventoryLocationId]")->setOptions(array('value_options' => $inventory));

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

      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));



        return new ViewModel(array('form' => $form));
    }

    public function approvedAction()
    {


      $form = new \Sales\Form\InvoiceForm();



      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("transactionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));


      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));


      $inventory = $this->_getOptions("InventoryLocations","inventoryLocationId","inventoryLocationName");
      $form->get("inventoryLocations[inventoryLocationId]")->setOptions(array('value_options' => $inventory));

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

      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));



        return new ViewModel(array('form' => $form));
    }

    public function printAction()
    {

      $form = new \Sales\Form\InvoiceForm();



      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("transactionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));


      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));


      $inventory = $this->_getOptions("InventoryLocations","inventoryLocationId","inventoryLocationName");
      $form->get("inventoryLocations[inventoryLocationId]")->setOptions(array('value_options' => $inventory));

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

      $customer = $this->_getOptions("Customers","customerId","customerName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));



        return new ViewModel(array('form' => $form));
    }

}
