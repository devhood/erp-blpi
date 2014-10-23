<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;

class PaymentController extends BaseController
{



    public function indexAction()
    {


      $form = new \Sales\Form\PaymentForm();

      // $transaction = $this->_getOptions("TransactionTypes","transactionTypeId","transactionTypeName");
      // $form->get("trasanctionTypes[transactionTypeId]")->setOptions(array('value_options' => $transaction));
      //
      // $customer = $this->_getOptions("Customers","transactionTypeId","transactionTypeName");
      // $form->get("customers[customerId]")->setOptions(array('value_options' => $customer));

      return new   ViewModel(array('form' => $form));

    }

}
