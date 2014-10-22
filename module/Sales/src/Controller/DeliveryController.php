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

      $form = new \Sales\Form\DeliveryForm();

      $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      $form->get("trasanctionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));

      $customer = $this->_getOptions("Customers","transactionTypeId","transactionTypeName");
      $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));

      return new ViewModel(array('form' => $form));
    }

}
