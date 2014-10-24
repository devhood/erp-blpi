<?php

namespace Sales\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Main\Controller\BaseController;
use Sales\Form\SalesForm;
use Sales\Form\SalesItemForm;

class OrderController extends BaseController
{
    public function addAction()
    {

        $formSales = new SalesForm($this->_getEntityManager());
        $formSalesItem = new SalesItemForm($this->_getEntityManager());
        return new ViewModel(array('formSales' => $formSales, 'formSalesItem' => $formSalesItem));
    }

}
